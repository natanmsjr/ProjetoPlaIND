<?php

/*
 *---------------------------------------------------------------
 * erroController.php
 *---------------------------------------------------------------
 *
 * @autor: Natanael Macedo da Silva Junior
 * @version: 1.0
 * 
 */

class erroController extends controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index($dados = array()){
        $this->loadTemplate('erro', 'erro', $dados);
    }
	
	public function erro_400($dados = array()) {
		$this->loadTemplate('erro', 'erro_400', $dados);
	}
	
	public function erro_401($dados = array()) {
		$this->loadTemplate('erro', 'erro_401', $dados);
	}

	public function erro_403($dados = array()) {
		$this->loadTemplate('erro', 'erro_403', $dados);
	}
	
	public function erro_404($dados = array()) {
		$this->loadTemplate('erro', 'erro_404', $dados);
	}
	
	public function erro_500($dados = array()) {
		$this->loadTemplate('erro', 'erro_500', $dados);
	}
}

