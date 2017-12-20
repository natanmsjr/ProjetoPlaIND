<?php

/*
 *---------------------------------------------------------------
 * Controller.php - Ação: Controla o View
 *---------------------------------------------------------------
 *
 * Classe de gerenciamento do View. Controla o que será exibibo
 * nas páginas. Intermedia o que foi produzido no Model e deter-
 * mina como será mostrado.
 *
 * Autor: Natanael Macedo da Silva Junior
 * Criação: 
 * Versão: 1.4
 * 
 */

// Classe Controller
class Controller {
    
    public function __construct() {
        //global $config;
        //$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    }

    public function loadView($controller, $viewName, $viewData = array()) {
        extract($viewData);
        //include 'views/'.$viewName.'.php';
        //include 'views/'.$controller.'/'.$viewName.'.php';
        //include 'modules/'.$currentModule.'/views/'.$controller.'/'.$viewName.'.php';
        //include 'modules/site/views/'.$controller.'/'.$viewName.'.php';
        include 'modules/'.$_SESSION['module'].'/views/'.$controller.'/'.$viewName.'.php';
    }

    public function loadTemplate($controller, $viewName, $viewData = array()) {
        extract($viewData);
        //include 'views/template.php';
        //include 'modules/'.$currentModule.'/views/template.php';
        //include 'modules/site/views/template.php';
        include 'modules/'.$_SESSION['module'].'/views/template.php';
    }

    public function loadViewInTemplate($controller, $viewName, $viewData = array()) {
        extract($viewData);
        //include 'views/'.$viewName.'.php';
        //include 'views/'.$controller.'/'.$viewName.'.php';
        //include 'modules/'.$currentModule.'/views/'.$controller.'/'.$viewName.'.php';
        //include 'modules/site/views/'.$controller.'/'.$viewName.'.php';
        include 'modules/'.$_SESSION['module'].'/views/'.$controller.'/'.$viewName.'.php';
    }
}