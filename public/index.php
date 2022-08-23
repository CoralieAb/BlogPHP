<?php

use App\Controllers\Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

//var_dump($_SERVER['SCRIPT_NAME']);
//var_dump($_SERVER);
//var_dump($_SERVER['REQUEST_FILENAME']);
$router = new Router($_GET['url']);

$router->get('/posts/:id/', 'App\Controllers\BlogController@show');
$router->get('/', 'App\Controllers\BlogController@homepage');

$router->run();