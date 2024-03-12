<?php
require __DIR__ . '/../vendor/autoload.php';

use Framework\Database;
use Framework\Router;
use Framework\Session;

Session::start();

require '../helpers.php';

$config = require basePath('config/db.php');

$db = new Database($config);
//Instatiate the router
$router = new Router();

//Get routes
$routers = require basePath('routes.php');

//Get current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//Route the request
$router->route($uri);
