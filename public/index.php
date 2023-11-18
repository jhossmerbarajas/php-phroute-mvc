<?php 

require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/../');
$dotenv->load();

require_once '../app/Core/config.php';
require_once '../app/Core/database.php';
require_once '../routes/web.php';