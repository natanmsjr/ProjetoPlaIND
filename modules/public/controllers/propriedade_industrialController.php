<?php

/*
 *---------------------------------------------------------------
 * propriedade_industrialController.php
 *---------------------------------------------------------------
 *
 * @autor: Natanael Macedo da Silva Junior
 * @version: 1.0
 * 
 */

class propriedade_industrialController extends controller {

    public function __construct() {
        parent::__construct();
    }
      
    public function index($dados = array()) {
        $this->loadTemplate('propriedade_industrial', 'propriedade_industrial', $dados);
    }

    public function desenho_industrial($dados = array()) {
        
        $this->loadTemplate('propriedade_industrial', 'desenho_industrial', $dados);
    }
    
    public function marca($dados = array()) {
                
        $this->loadTemplate('propriedade_industrial', 'marca', $dados);
    }
    
    public function patente($dados = array()) {
                
        $this->loadTemplate('propriedade_industrial', 'patente', $dados);
    }
    
    public function software($dados = array()) {
                
        $this->loadTemplate('propriedade_industrial', 'software', $dados);
    }
    
    public function transferencia_de_tecnologia($dados = array()) {
                
        $this->loadTemplate('propriedade_industrial', 'tranferencia_de_tecnologia', $dados);
    }
    
    public function instituicoes_e_setores($dados = array()) {
                
        $this->loadTemplate('propriedade_industrial', 'instituicoes_e_setores', $dados);
    }
    
    public function informacoes($dados = array()) {
                
        $this->loadTemplate('propriedade_industrial', 'informacoes', $dados);
    }

}
