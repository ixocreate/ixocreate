<?php
declare(strict_types=1);
namespace Application;

/** @var \KiwiSuite\ApplicationHttp\Route\RouteConfigurator $routeConfigurator */
use Application\Action\TestAction;

$routeConfigurator->addGet('/kiwi/', [TestAction::class], "test");
