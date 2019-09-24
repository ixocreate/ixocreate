<?php
declare(strict_types=1);

namespace App;

use Ixocreate\Database\Connection\Option\MySqlOption;

/** @var \Ixocreate\Database\DatabaseConfigurator $database */

$database->addConnection('master', (new MySqlOption())
    ->withDbName(\getenv('DB_MASTER_DATABASE') ?: '')
    ->withUser(\getenv('DB_MASTER_USERNAME') ?: '')
    ->withPassword(\getenv('DB_MASTER_PASSWORD') ?: '')
    ->withHost(\getenv('DB_MASTER_HOSTNAME') ?: '127.0.0.1')
    ->withCharset(\getenv('DB_MASTER_CHARSET') ?: 'utf8mb4')
);
