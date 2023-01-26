<?php 


function view($name, $data = null){

    isset($data) ? extract($data) : null; 

    require  './src/views/'. $name .'.php';
}

function redirect($name, $action){
    header("Location:/index.php?name={$name}&action={$action}");
}

function login(array $user){

    $_SESSION[$user['email']] = $user['name'];

    setcookie('email', $user['email']);
}

function authCheck(){
    return isset($_SESSION[$_COOKIE['email']]);
}

function getUser(){
    if(authCheck()){
        return $_SESSION[$_COOKIE['email']];
    }
}

function logout(){
    $_SESSION[$_COOKIE['email']] = null;
    $_COOKIE['email'] = null;
}