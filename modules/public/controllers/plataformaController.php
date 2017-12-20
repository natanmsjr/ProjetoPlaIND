<?php

/*
 *---------------------------------------------------------------
 * plataformaController.php
 *---------------------------------------------------------------
 *
 * @autor: Natanael Macedo da Silva Junior
 * @version: 1.0
 * 
 */

class plataformaController extends controller {

    public function __construct() {
        parent::__construct();
    }
      
    public function index($dados = array()) {
        $this->loadTemplate('plataforma', 'plataforma', $dados);
    }

    public function plaind($dados = array()) {
        
        $this->loadTemplate('plataforma', 'plaind', $dados);
    }

    public function desenvolvedores($dados = array()) {
                
        $this->loadTemplate('plataforma', 'desenvolvedores', $dados);
    }
}
