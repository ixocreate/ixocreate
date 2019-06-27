<?php
declare(strict_types=1);

namespace App;

use Ixocreate\Admin\AdminConfigurator;

/** @var AdminConfigurator $admin */
$admin->setName('IXOCREATE');
$admin->setAuthor('IXOCREATE');
$admin->setDescription('IXOCREATE');
$admin->setCopyright(\date('Y'));
$admin->setPoweredBy(true);
$admin->setLoginLogo('/admin/ixocreate-logo.svg');
$admin->setIcon('/admin/favicon.png');
$admin->setLogo('/admin/ixocreate-logo.svg', 140, 50);
$admin->setBackground('/admin/background.jpg');
