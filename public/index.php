<?php
require '../helpers.php';

require basePath('Router.php');

$router = new Router();

$routers = require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
