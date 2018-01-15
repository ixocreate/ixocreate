<?php
declare(strict_types=1);

namespace Application;

/** @var \KiwiSuite\ServiceManager\ServiceManagerConfigurator $middlewareConfigurator */

/**
 * app middlewares
 */
$middlewareConfigurator->addDirectory('src/Action');
$middlewareConfigurator->addDirectory('src/Middleware');

/**
 * admin middlewares
 */
$middlewareConfigurator->addDirectory('vendor/kiwi-suite/admin/src/Action');
$middlewareConfigurator->addDirectory('vendor/kiwi-suite/admin/src/Middleware');
