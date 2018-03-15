<?php
declare(strict_types=1);

namespace Application;

use KiwiSuite\Admin\Package as AdminPackage;
use KiwiSuite\CommonTypes\Package as CommonTypePackage;
use KiwiSuite\Framework\Package as FrameworkPackage;

/** @var \KiwiSuite\Application\ApplicationConfigurator $applicationConfigurator */
$applicationConfigurator->addPackage(CommonTypePackage::class);
$applicationConfigurator->addPackage(FrameworkPackage::class);
$applicationConfigurator->addPackage(AdminPackage::class);
