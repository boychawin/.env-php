<?php

declare (strict_types = 1);
require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$token = $_ENV['API_KEY'] ?? '';

print_r($token);