<?php
declare(strict_types=1);

namespace Application;

/** @var \KiwiSuite\ApplicationHttp\Pipe\PipeConfigurator $pipeConfigurator */
use KiwiSuite\Admin\Middleware\AdminMiddleware;

$pipeConfigurator->addPathMiddleware('/admin', AdminMiddleware::class, PHP_INT_MAX);
