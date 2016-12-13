<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

//require Router::load('routes.php')->directs(Request::uri());

$router = Router::load('routes.php');
$router->directs(Request::uri(), Request::method());