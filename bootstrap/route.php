<?php
declare(strict_types=1);
namespace Application;

use Application\Action\TestAction;

/** @var \KiwiSuite\ApplicationHttp\Route\RouteConfigurator $routeConfigurator */
$routeConfigurator->addGet('/kiwi/', [TestAction::class], "test");
