<?php
require_once '../vendor/autoload.php';
date_default_timezone_set("Asia/Ho_Chi_Minh");

define('_VIEW_PATH', dirname(__DIR__).'/src/views');
define('_CACHE_PATH', dirname(__DIR__).'/src/cache');

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

use Pecee\SimpleRouter\SimpleRouter as Route;

Route::setDefaultNamespace('\App\Controllers');

// Start the routing
Route::start();
