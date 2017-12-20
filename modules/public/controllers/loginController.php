<?php

/*
 *---------------------------------------------------------------
 * loginController.php
 *---------------------------------------------------------------
 *
 * @autor: Natanael Macedo da Silva Junior
 * @version: 1.0
 * 
 */

class loginController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($dados = array()) {                
        $this->loadTemplate('home', 'login', $dados);
    }
    
    public function cadastro($dados = array()) {
        $this->loadTemplate('home', 'cadastro', $dados);
    }
    
    public function nova_senha($dados = array()) {
        $this->loadTemplate('home', 'nova_senha', $dados);
    }
}

