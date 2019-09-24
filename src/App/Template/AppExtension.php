<?php

declare(strict_types=1);

namespace App\Template;

use Ixocreate\Application\Uri\ApplicationUri;
use Ixocreate\Template\Extension\ExtensionInterface;

class AppExtension implements ExtensionInterface
{
    /**
     * @var ApplicationUri
     */
    private $applicationUri;

    public static function getName(): string
    {
        return 'app';
    }

    public function __construct(ApplicationUri $applicationUri)
    {
        $this->applicationUri = $applicationUri;
    }

    public function __invoke($key = null)
    {
        switch ($key) {
            case 'title':
                return \getenv('APP_NAME');
                break;
            case 'url':
                return $this->applicationUri->getMainUri();
                break;
            default:
                return 'Run <code>php ixocreate app:setup</code> to complete your installation.';
                break;
        }
    }
}
