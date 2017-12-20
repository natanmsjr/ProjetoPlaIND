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

class homeController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($dados = array()) {        
        $this->loadTemplate('home','home', $dados);
    }

}