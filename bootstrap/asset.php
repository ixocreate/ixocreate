<?php
declare(strict_types=1);

namespace App;

/** @var \Ixocreate\Asset\AssetConfigurator $asset */

$asset->setUrls([\getenv('ASSET_URL') ?: 'assets']);
$asset->setFormat('%1$s?v=%2$s');
