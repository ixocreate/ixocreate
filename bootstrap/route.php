<?php
declare(strict_types=1);

namespace Application;

/** @var \KiwiSuite\ApplicationHttp\Route\RouteConfigurator $routeConfigurator */

/**
 * admin routes
 */
$routeConfigurator->addGet('/admin[/[{path}]]', [\KiwiSuite\Admin\Action\IndexAction::class], "admin");

/**
 * application routes
 */
$routeConfigurator->addGet('/kiwi[/]', [\Application\Action\TestAction::class], "test");
