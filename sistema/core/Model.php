<?php

/*
 *---------------------------------------------------------------
 * Controller.php - Ação: Controla o View
 *---------------------------------------------------------------
 *
 * Classe de gerenciamento do View. Controla o que será exibibo
 * nas páginas.
 *
 * @autor: Natanael Macedo da Silva Junior
 * @versão: 1.3
 * 
 */

// Classe Model

class Model {
	
    protected $db;

	public function __construct() {
		global $config;
		try {
			$dsn = "mysql:dbname=".$config['dbname'].";host=".$config['host'];
			$dbuser = $config['dbuser'];
			$dbpass = $config['dbpass'];
			$this->db = new PDO($dsn, $dbuser, $dbpass);
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}
}