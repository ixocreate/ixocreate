<?php
declare(strict_types=1);

namespace App;

use App\Action\Api\ApiAction;
use App\Action\WelcomeAction;
use Ixocreate\Application\Http\Pipe\PipeConfigurator;

/** @var PipeConfigurator $pipe */

$pipe->get('/', WelcomeAction::class, 'welcome');

$pipe->get('/api', ApiAction::class, 'api.index');

// $pipe->pipe(CmsMiddleware::class);
