<?php
error_reporting(0);
require __DIR__ . '/vendor/autoload.php';
use \TncBzkrt\Config\{App, Route};
$app = new \TncBzkrt\Config\App();
require __DIR__ . '/Define/Default.php';
require __DIR__ . '/App/Routing/Web.php';
Route::prefix('/api');
require __DIR__ . '/App/Routing/Api.php';
Route::$prefix = '';
Route::dispatch();