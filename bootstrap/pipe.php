<?php
declare(strict_types=1);

namespace App;

/** @var PipeConfigurator $pipe */
use KiwiSuite\ApplicationHttp\Pipe\PipeConfigurator;
use KiwiSuite\Cms\Middleware\CmsMiddleware;


$pipe->pipe(CmsMiddleware::class);

