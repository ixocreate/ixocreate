<?php
declare(strict_types=1);

namespace Application;

use Ixocreate\Admin\Package as AdminPackage;
use Ixocreate\CommonTypes\Package as CommonTypePackage;
use Ixocreate\Framework\Package as FrameworkPackage;

/** @var \Ixocreate\Application\ApplicationConfigurator $applicationConfigurator */
$applicationConfigurator->addPackage(CommonTypePackage::class);
$applicationConfigurator->addPackage(FrameworkPackage::class);
$applicationConfigurator->addPackage(AdminPackage::class);
