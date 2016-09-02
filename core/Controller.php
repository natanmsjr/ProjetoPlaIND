<?php

class controller {

    protected $db;

    public function __construct() {
        global $config;
        $this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    }

    public function loadView($controller, $viewName, $viewData = array()) {
        extract($viewData);
        //include 'views/'.$viewName.'.php';
        include 'views/'.$controller.'/'.$viewName.'.php';
    }

    public function loadTemplate($controller, $viewName, $viewData = array()) {
        include 'views/template.php';
    }

    public function loadViewInTemplate($controller, $viewName, $viewData = array()) {
        extract($viewData);
        //include 'views/'.$viewName.'.php';
        include 'views/'.$controller.'/'.$viewName.'.php';
    }
}