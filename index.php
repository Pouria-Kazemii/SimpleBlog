<?php

use Src\Http\Router;

session_start();

require './vendor/autoload.php';

include('./src/routes/web.php');

// Router::registerRoutes(include('./src/routes/web.php'));

Router::find($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

