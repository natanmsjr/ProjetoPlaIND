<?php

class Core {
        
    public function run(){
        $parameters = array();
        
        $url = explode('index.php', $_SERVER['PHP_SELF']);
        $url = end($url);        
        
        if(empty($url) || $url=='/'){
            //$currentController = 'homeController';
            //$currentAction = 'index';
            $_SESSION['controller'] = 'homeController';
            $_SESSION['action'] = 'index';
        } else {
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
        }
        
        //if (class_exists($currentController) && method_exists($currentController, $currentAction)) {
        if (class_exists($_SESSION['controller']) && method_exists($_SESSION['controller'], $_SESSION['action'])) {
            //$controller = new $currentController();
            $controller = new $_SESSION['controller']();
            $action = $_SESSION['action'];
            $parameters = $_SESSION['parameters'];
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