<?php
declare(strict_types=1);

namespace App;

use Ixocreate\Intl\LocaleConfigurator;

/** @var LocaleConfigurator $locale */

$locale->add('en_US');
$locale->add('de_AT');

$locale->setDefaultLocale('en_US');
