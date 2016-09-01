<?php
//echo "Entrou Core<br>";
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

        
        /*$c = new $currentController();
        call_user_func_array(array($c, $currentAction), $params);*/
            
        if (class_exists($currentController) && !empty($currentAction)) {
            $c = new $currentController();
            call_user_func_array(array($c, $currentAction), $params);
        
        } elseif (class_exists($currentController) && empty($currentAction)) {
            $c = new $currentController();
            $currentAction = 'index';
            call_user_func_array(array($c, $currentAction), $params);
        }
        else {
            $currentController = 'homeController';
            $currentAction = 'page_not_found';
            $c = new $currentController();
            call_user_func_array(array($c, $currentAction), $params);
        }

    }
    
}