<?php
declare(strict_types=1);

namespace App;

/** @var \KiwiSuite\ApplicationHttp\Pipe\PipeConfigurator $pipeConfigurator */
use KiwiSuite\Admin\Middleware\AdminMiddleware;
use KiwiSuite\ApplicationHttp\Pipe\PipeConfigurator;
use KiwiSuite\ProjectUri\Middleware\ProjectUriCheckMiddleware;

$pipeConfigurator->pipe(ProjectUriCheckMiddleware::class);
$pipeConfigurator->segment('/admin', function (PipeConfigurator $pipeConfigurator) {
    $pipeConfigurator->pipe(AdminMiddleware::class);
});
