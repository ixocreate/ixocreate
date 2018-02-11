<?php
declare(strict_types=1);
namespace Application;

use KiwiSuite\Framework\Module as FrameworkModule;
use KiwiSuite\Admin\Module as AdminModule;

/** @var \KiwiSuite\Application\ApplicationConfigurator $applicationConfigurator */
$applicationConfigurator->addModule(FrameworkModule::class);
$applicationConfigurator->addModule(AdminModule::class);
