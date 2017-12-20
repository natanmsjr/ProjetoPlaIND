<?php
session_start();

$currentController = 'homeController';
$action = 'index';
$parameters = array();
    
if(empty($_POST['email']) && empty($_POST['senha'])){
    $_SESSION['module'] = 'public';
    $controller = new $currentController();
    call_user_func_array(array($controller, $action), $parameters);
} else {
    $_SESSION['module'] = 'restricted';
    $controller = new $currentController();
    call_user_func_array(array($controller, $action), $parameters);
}