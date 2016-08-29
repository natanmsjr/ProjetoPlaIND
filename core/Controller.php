<?php
//echo "Entrou controller<br>";
class controller {

	protected $db;

	public function __construct() {
		global $config;
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	}
	
	//public function loadView($viewName, $viewData = array()) {
        public function loadView($viewName) {
		//extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	//public function loadTemplate($viewName, $viewData = array()) {
        public function loadTemplate($viewName) {
		include 'views/template.php';
	}

	//public function loadViewInTemplate($viewName, $viewData) {
        public function loadViewInTemplate($viewName) {
		//extract($viewData);
		include 'views/'.$viewName.'.php';
	}

}