<?php

/*
 *---------------------------------------------------------------
 * homeController.php
 *---------------------------------------------------------------
 *
 * @autor: Natanael Macedo da Silva Junior
 * @version: 1.0
 * 
 */

class painelController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($dados = array()) {
        $this->loadTemplate('painel','index', $dados);
    }
	
	public function painel($dados = array()) {
		$this->loadTemplate('painel', 'painel', $dados);
	}

}