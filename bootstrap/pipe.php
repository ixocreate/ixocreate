<?php
declare(strict_types=1);

namespace App;

use Ixocreate\ApplicationHttp\Pipe\PipeConfigurator;
use Ixocreate\Cms\Middleware\CmsMiddleware;

/** @var PipeConfigurator $pipe */
$pipe->pipe(CmsMiddleware::class);
