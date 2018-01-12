<?php
declare(strict_types=1);
namespace Application;

/** @var \KiwiSuite\ServiceManager\ServiceManagerConfigurator $middlewareConfigurator */
$middlewareConfigurator->addDirectory('src/Action');
$middlewareConfigurator->addDirectory('src/Middleware');
