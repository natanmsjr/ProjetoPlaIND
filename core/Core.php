<?php

class Core {
    
    public function run() {
        $url = explode('index.php', $_SERVER['PHP_SELF'], 10);
        $url = end($url);
        
        $params = array();
        if(!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0].'Controller';
            array_shift($url);

            if(isset($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            if(count($url) > 0) {
                $params = $url;
            }

        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }
            
        if (class_exists($currentController) && method_exists($currentController, $currentAction)) {
            $controller = new $currentController();
            call_user_func_array(array($controller, $currentAction), $params);
        
        } elseif (class_exists($currentController) && !method_exists($currentController, $currentAction)) {
            $controller = new $currentController();
            $currentAction = 'index';
            call_user_func_array(array($controller, $currentAction), $params);
        }
        else {
            $currentController = 'errorController';
            $currentAction = 'index';
            $controller = new $currentController();
            call_user_func_array(array($controller, $currentAction), $params);
        }

    }
    
}