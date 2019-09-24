<?php
declare(strict_types=1);

namespace App\Console;

use Ixocreate\Admin\Config\AdminConfig;
use Ixocreate\Application\Console\CommandInterface;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class Setup extends Command implements CommandInterface
{
    /**
     * @var SymfonyStyle
     */
    protected $io;

    /**
     * @var AdminConfig
     */
    private $adminConfig;

    public function __construct(AdminConfig $adminConfig)
    {
        parent::__construct(self::getCommandName());
        $this->adminConfig = $adminConfig;
    }

    public static function getCommandName()
    {
        return 'app:setup';
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->io = new SymfonyStyle($input, $output);

        $this->publicDirectories();

        $this->adminSecret();

        $this->io->text([
            '',
            '<info>Setup complete</info>',
            '',
            'Add database credentials to your .env file and run:',
        ]);

        $this->io->listing([
            'php ixocreate publish:run',
            'php ixocreate migration:migrate',
            'php ixocreate admin:create-user',
        ]);
    }

    private function publicDirectories()
    {
        $this->link('../resources/assets', 'public/assets');

        @\mkdir('data/media');

        $this->link('../data/media', 'public/media');
    }

    private function link(string $target, string $link)
    {
        if (is_link($link)) {
            $this->io->text("<info>Directory $target already linked to $link</info>");
            return;
        }

        \symlink($target, $link);

        $this->io->text("<info>Linked directory $target to $link</info>");
    }

    private function adminSecret()
    {
        if ($this->adminConfig->secret()) {
            $this->io->text('<info>Admin secret already set</info>');
            return;
        }

        $envFile = '.env';

        if (!\file_exists($envFile)) {
            $this->io->text('<error>File ".env" does not exist. Copy ".env.example" to ".env".</error>');
            return;
        }

        $key = Uuid::uuid4()->toString();

        file_put_contents($envFile, str_replace("ADMIN_SECRET=", 'ADMIN_SECRET=' . $key, file_get_contents($envFile)));

        $this->io->text('<info>Set admin secret</info>');
    }
}
