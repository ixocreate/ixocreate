<?php
declare(strict_types=1);

namespace Application;

use Application\Middleware\TestMiddleware;

/** @var \KiwiSuite\ApplicationHttp\Pipe\PipeConfigurator $pipeConfigurator */
$pipeConfigurator->addGlobalMidPipe(TestMiddleware::class);
