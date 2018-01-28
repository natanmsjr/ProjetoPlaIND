<?php

class homeController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($dados = array()) {
        $user = new Usuario();
        
        $dados = array (
            'nome' => $user->getNome()
        );
        $this->loadTemplate('home','home', $dados);
    }
}