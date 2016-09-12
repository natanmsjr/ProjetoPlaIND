<?php
/*
 * O arquivo loader.php inicia a sessão,
 * define o autoload da plataforma e
 * carrega a plataforma iniciando o Core()
 */
session_start();
$_SESSION['module'] = 'public';
$_SESSION['controller'] = '';
$_SESSION['action'] = '';
$_SESSION['parameters'] = array();

// Definição do autoload
spl_autoload_register(function ($class){
    
    if(strpos($class, 'Controller') > -1) {
        //if(file_exists('controllers/'.$class.'.php')) {
        //if(file_exists('modules/'.$currentModule.'/controllers/'.$class.'.php')) {
        //if(file_exists('modules/site/controllers/'.$class.'.php')) {
        if(file_exists('modules/'.$_SESSION['module'].'/controllers/'.$class.'.php')) {
            //require_once 'controllers/'.$class.'.php';
            //require_once 'modules/'.$currentModule.'/controllers/'.$class.'.php';
            //require_once 'modules/site/controllers/'.$class.'.php';
            require_once 'modules/'.$_SESSION['module'].'/controllers/'.$class.'.php';
        }
    }
    //elseif(file_exists('modules/'.$currentModule.'/models/'.$class.'.php')) {
    //elseif(file_exists('modules/site/models/'.$class.'.php')) {
    elseif(file_exists('modules/'.$_SESSION['module'].'/models/'.$class.'.php')) {
        //require_once 'modules/'.$currentModule.'/models/'.$class.'.php';
        //require_once 'modules/site/models/'.$class.'.php';
        require_once 'modules/'.$_SESSION['module'].'/models/'.$class.'.php';
    }
    elseif(file_exists('core/'.$class.'.php')) {
        require_once 'core/'.$class.'.php';
    }
});

// Inicia o core do sistema
$core = new Core();
$core->run();