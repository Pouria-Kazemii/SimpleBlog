<?php

use Src\Controllers\HomeController;
use Src\Controllers\LoginController;
use Src\Controllers\PostsController;
use Src\Controllers\RegisterController;
use Src\Http\Router;

Router::get('/', [HomeController::class, 'list']);

// Router::controller(PostsController::class)
// ->prefix('/posts')
// ->group(function() {
    
//     Router::get('/','list');
//     Router::get('/create', 'create');
//     Router::post('', 'store');
// });

Router::get('/posts', [PostsController::class, 'list']);
Router::get('/posts/create', [PostsController::class, 'create']);
Router::post('/posts', [PostsController::class, 'store']);

Router::get('/login', [LoginController::class, 'create']);
Router::post('/login', [LoginController::class, 'store']);
Router::post('/logout', [LoginController::class, 'destroy']);

Router::get('/register', [RegisterController::class, 'create']);
Router::post('/register', [RegisterController::class, 'store']);