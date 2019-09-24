<?php
declare(strict_types=1);

namespace App;

/** @var \Ixocreate\Application\Uri\ApplicationUriConfigurator $applicationUri */

$applicationUri->setMainUri(\getenv('APP_URL') ?: 'http://localhost:8000');
