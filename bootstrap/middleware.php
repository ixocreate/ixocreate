<?php
declare(strict_types=1);
namespace Application;

use Application\Action\TestAction;

/** @var \KiwiSuite\ServiceManager\ServiceManagerConfigurator $middlewareConfigurator */
$middlewareConfigurator->addFactory(TestAction::class);
