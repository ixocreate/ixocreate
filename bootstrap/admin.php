<?php
declare(strict_types=1);

namespace App;

use Ixocreate\Admin\AdminConfigurator;

/** @var AdminConfigurator $admin */

/**
 * JWT token secret
 */
$admin->setSecret(\getenv('ADMIN_SECRET') ?: '');

/**
 * Whitelabel interface
 */
$admin->setName(\getenv('APP_NAME') ?: 'IXOCREATE');
$admin->setAuthor(\getenv('APP_NAME') ?: 'IXOCREATE');
$admin->setDescription(\getenv('APP_NAME') ?: 'IXOCREATE');
$admin->setCopyright(\date('Y'));
$admin->setPoweredBy(true);

$admin->setLoginLogo('https://ixocreate.github.io/current/img/brand/ixocreate/ixocreate-logo.svg');
$admin->setIcon('https://ixocreate.github.io/current/img/brand/ixocreate/favicon/favicon-128.png');
$admin->setLogo('https://ixocreate.github.io/current/img/brand/ixocreate/ixocreate-logo.svg', 140, 50);
$admin->setBackground('https://ixocreate.github.io/current/img/brand/ixocreate/ixocreate-features-header-frames0059.jpg');

$admin->setDefaultLocale('en_US'); // set to e.g. de_AT
$admin->setDefaultTimezone('UTC'); // set to e.g. Europe/Vienna
