<?php
declare(strict_types=1);

namespace App;

use Ixocreate\Admin\Package as AdminPackage;
use Ixocreate\Application\ApplicationConfigurator;
use Ixocreate\Framework\Package as FrameworkPackage;
use Symfony\Component\Dotenv\Dotenv;

/** @var ApplicationConfigurator $application */

/**
 * Load environment parameters
 */
if (\file_exists(__DIR__ . '/../.env')) {
    $dotenv = new Dotenv();
    $dotenv->load(__DIR__ . '/../.env');
}

/**
 * Enable/disable development by debug env variable, default to true
 */
$application->setDevelopment((\getenv('APP_DEBUG') ?: 'true') === 'true');

/**
 * Load bootstrap items by environment
 */
if (!empty(\getenv('APP_ENV'))) {
    $application->setBootstrapEnvDirectory(\getenv('APP_ENV') . '/');
    $application->setConfigEnvDirectory(\getenv('APP_ENV') . '/');
}

/**
 * Register IXOCREATE packages
 */
$application->addPackage(FrameworkPackage::class);
$application->addPackage(AdminPackage::class);

/**
 * Register additional app packages
 */
// ...
