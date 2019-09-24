<?php
declare(strict_types=1);

namespace App;

use Ixocreate\Media\MediaConfigurator;

/** @var MediaConfigurator $media */

$media->setUri(\getenv('MEDIA_URL') ?: 'media');
