<?php

/*
 *---------------------------------------------------------------
 * Core.php - Classe: Núcleo do sistema
 *---------------------------------------------------------------
 *
 * Página de início padrão do sistema. Solicita página de
 * configuração.
 * Identifica:
 *      1 - Controller (Classe)
 *      2 - Action (Método)
 *      3.. - Parâmetros
 *
 * @autor: Natanael Macedo da Silva Junior
 * @version: 1.2
 * 
 */

// Definição da classe Core
class Core {
    
    // Função de start do sistema
    // Obtem a URl e determina qual controller pertence
    public function run(){
        
        /*echo $_SERVER['PHP_SELF']."<br>" ;
        
        if(isset($_SERVER['PHP_SELF'])) {
            $url = $_SERVER['PHP_SELF'];
        }
        
        print_r ($url);
        echo '<br>';
        
        $param = array();
        
        if(!empty($url) && $url!='/'){
            $url = explode('/', $url);
            
            print_r ($url);
            echo '<br>';
            
            array_shift($url);
            
            print_r ($url);
            echo '<br>';
            
            array_shift($url);
            
            
                $currentController = $url[0].'Controller';
            
            print_r ($url);
            echo '<br>';
            
            array_shift($url);
            
            if(isset($url) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }
            
            if(count($url) > 0) {
                $param = $url;
            }
        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }
        
        if (class_exists($currentController) && method_exists($currentController, $currentAction)) {
            $controller = new $currentController();
            $action = $currentAction;
            $parameters = $param;
            $controller->$action($parameters);
            call_user_func_array(array($controller, $action), $parameters);
        }
        elseif (class_exists($currentController) && !method_exists($currentController, $currentAction)) {
            $controller = new $currentController();
            $action = 'index';
            $parameters = $param;
            call_user_func_array(array($controller, $action), $parameters);
        }
        else {
            $currentController = 'errorController';
            $action = 'index';
            $parameters = array();
            $controller = new $currentController();
            call_user_func_array(array($controller, $action), $parameters);
        }*/
        
        $parameters = array();        
        $url = explode('index.php', $_SERVER['PHP_SELF']);
        $url = end($url);
        
        if(!empty($url) || !$url=='/'){
            $url = explode('/', $url);           
            array_shift($url);
            
            if(isset($url[0])){
                //$currentController = $url[0].'Controller';
                $_SESSION['controller'] = $url[0].'Controller';
                array_shift($url);
            } else{
                //$currentController = 'homeController';
                $_SESSION['controller'] = 'homeController';
            }
            if(isset($url[0])){
                //$currentAction = $url[0];
                $_SESSION['action'] = $url[0];
                array_shift($url);
            } else{
                //$currentAction = 'index';  
                $_SESSION['action'] = 'index';
            }
            
            if(count($url) > 0){
                //$parameters = $url;
                $_SESSION['parameters'] = $url;
            }
        } else {
            //$currentController = 'homeController';
            //$currentAction = 'index';
            $_SESSION['controller'] = 'homeController';
            $_SESSION['action'] = 'index';
        }
        
        
        
        //if (class_exists($currentController) && method_exists($currentController, $currentAction)) {
        if (class_exists($_SESSION['controller']) && method_exists($_SESSION['controller'], $_SESSION['action'])) {
            //$controller = new $currentController();
            $controller = new $_SESSION['controller']();
            $action = $_SESSION['action'];
            //$parameters = $_SESSION['parameters'];
            if (!empty($_SERVER['parameters'])) {
                $parameters = $_SESSION['parameters'];
            }
            //$controller->$currentAction($parameters);
            //call_user_func_array(array($controller, $currentAction), $parameters);
            call_user_func_array(array($controller, $action), $parameters);        
        }
        //elseif (class_exists($currentController) && !method_exists($currentController, $currentAction)) {
        elseif (class_exists($_SESSION['controller']) && !method_exists($_SESSION['controller'], $_SESSION['action'])) {
            //$controller = new $currentController();
            //$currentAction = 'index';
            $controller = new $_SESSION['controller']();
            $action = 'index';
            $parameters = $_SESSION['parameters'];
            //$controller->$currentAction($parameters);
            //call_user_func_array(array($controller, $currentAction), $parameters);
            call_user_func_array(array($controller, $action), $parameters);
        }
        else {
            $currentController = 'errorController';
            //$currentAction = 'index';
            $action = 'index';
            $controller = new $currentController();
            //$controller->$currentAction($parameters);
            //call_user_func_array(array($controller, $currentAction));
            call_user_func_array(array($controller, $action), $parameters);
        }
    }
}