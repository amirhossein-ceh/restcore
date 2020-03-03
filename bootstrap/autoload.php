<?php

use Dotenv\Dotenv;

require  "../vendor/autoload.php";

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
require "../Core/Database.php";
require "../App/Services/Script.php";

