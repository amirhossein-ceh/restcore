<?php

use \Illuminate\Database\Capsule\Manager as Capsule;
use \App\Config;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => env('DB_CONNECTION','mysql'),
    'host' => env('DB_HOST','127.0.0.1'),
    'port' => env('DB_PORT','3306'),
    'database' => env('DB_DATABASE','rest'),
    'username' => env('DB_USERNAME','root'),
    'password' => env('DB_PASSWORD',''),
    'charset' => env('DB_CHARSET','utf8'),
    'collection' => env('DB_COLLECTION','utf8_general_ci'),
    'prefix' => env('DB_PREFIX',''),
    'strict' => env('DB_STRICT'),
    'engine' => env('DB_ENGINE'),
]);

$capsule->bootEloquent();