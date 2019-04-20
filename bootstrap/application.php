<?php
declare(strict_types=1);

namespace App;

use Ixocreate\Admin\Package as AdminPackage;
use Ixocreate\Application\ApplicationConfigurator;
use Ixocreate\Framework\Package as FrameworkPackage;

/** @var ApplicationConfigurator $application */
$application->addPackage(FrameworkPackage::class);
$application->addPackage(AdminPackage::class);
