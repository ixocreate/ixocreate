<?php
declare(strict_types=1);

namespace Application;

use Ixocreate\Admin\Package as AdminPackage;
use Ixocreate\Application\ApplicationConfigurator;
use Ixocreate\CommonTypes\Package as CommonTypePackage;
use Ixocreate\Framework\Package as FrameworkPackage;

/** @var ApplicationConfigurator $application */
$application->addPackage(CommonTypePackage::class);
$application->addPackage(FrameworkPackage::class);
$application->addPackage(AdminPackage::class);
