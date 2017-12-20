<?php

/*
 *---------------------------------------------------------------
 * errorController.php
 *---------------------------------------------------------------
 *
 * @autor: Natanael Macedo da Silva Junior
 * @version: 1.0
 * 
 */

class errorController extends controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index($dados = array()){
        $this->loadTemplate('error', 'error', $dados);
    }

}

