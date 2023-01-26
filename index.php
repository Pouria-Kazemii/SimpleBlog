<?php

session_start();

require './vendor/autoload.php';

$name = $_GET['name'] ?? 'home'; //posts
$action = $_GET['action'] ?? 'list'; //show
$index = $_GET['index'] ?? null;

$controller  = 'Src\\Controllers\\' .ucfirst($name) . 'Controller';

(new $controller())->$action($index);

