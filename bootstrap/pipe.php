<?php
declare(strict_types=1);

namespace App;

/** @var PipeConfigurator $pipe */
use App\Middleware\TestMiddleware;
use KiwiSuite\Admin\Middleware\AdminMiddleware;
use KiwiSuite\ApplicationHttp\Pipe\PipeConfigurator;
use KiwiSuite\ProjectUri\Middleware\ProjectUriCheckMiddleware;

$pipe->pipe(ProjectUriCheckMiddleware::class);
$pipe->segment('/admin', function (PipeConfigurator $pipe) {
    $pipe->pipe(AdminMiddleware::class);
});

$pipe->pipe(TestMiddleware::class);
