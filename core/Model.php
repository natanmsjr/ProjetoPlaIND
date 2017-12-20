<?php

/*
 *---------------------------------------------------------------
 * Controller.php - Ação: Controla o View
 *---------------------------------------------------------------
 *
 * Classe de gerenciamento do View. Controla o que será exibibo
 * nas páginas.
 *
 * Autor: Natanael Macedo da Silva Junior
 * Criação: 
 * Versão: 1.3
 * 
 */

// Classe Model

class Model {
	
    protected $db;

	public function __construct() {
		global $config;
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	}
}