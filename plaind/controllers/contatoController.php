<?php

/*
 *---------------------------------------------------------------
 * contatoController.php
 *---------------------------------------------------------------
 *
 * @autor: Natanael Macedo da Silva Junior
 * @version: 1.0
 * 
 */
 
class contatoController extends controller {
	
	public function _construct() {
		parent::_construct();
	}
	
	public function index($dados = array()) {
		$this->loadTemplate('contato', 'contato', $dados);
	}
}
	
	