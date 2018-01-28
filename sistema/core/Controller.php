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
 * @autor: Natanael Macedo da Silva Junior
 * @versão: 1.0
 * 
 */

// Classe Controller
class Controller {
    
    private $config;
    
    public function __construct() {
		$cfg = new Config();
        $this->config = $cfg->getConfig();
    }
    
    public function loadTemplate($controller, $viewName, $viewData = array()) {
		//extract($viewData);
        include PLAIND_PATH.'/views/template.php';
    }
    
    public function loadView($controller, $viewName, $viewData = array()) {
		//extract($viewData);
        include PLAIND_PATH.'/views/'.$controller.'/'.$viewName.'.php';
    }

    public function loadViewInTemplate($controller, $viewName, $viewData = array()) {
        //extract($viewData);
        include PLAIND_PATH.'/views/'.$controller.'/'.$viewName.'.php';
    }
    
    public function loadHeaderViewInTemplate($opcao) {
        //$h = new Header();
        //$header = $h->getHeader();
        //$this->loadView('menu', $array);
        switch ($opcao){
            case 0: return include INCLUDE_PATH.'/header.php';
            case 1: return include INCLUDE_PATH.'/header-alt.php';
            case 2: return include INCLUDE_PATH.'/header-painel.php';
        }
    }
    
    public function loadMenuViewInTemplate($opcao) {
        //$m = new Menu();
        //$menu = $m->getMenu();
        //$this->loadView('menu', $array);
        switch ($opcao){
            case 0: return include INCLUDE_PATH.'/menu.php';
            case 1: return include INCLUDE_PATH.'/menu-entrar.php';
            case 2: return include INCLUDE_PATH.'/menu-painel.php';
        }
    }
    
    public function loadFooterViewInTemplate($opcao) {
        //$f = new Footer();
        //$footer = $f->getFooter();
        switch ($opcao){
            case 0: return include INCLUDE_PATH.'/footer.php';
            case 1: return include INCLUDE_PATH.'/footer-min.php';
            case 2: return include INCLUDE_PATH.'/footer-painel.php';
        }
    }
}