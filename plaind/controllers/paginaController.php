<?php

class paginaController extends controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index($dados = array()) {
        $this->loadTemplate('pagina', 'plataforma', $dados);
    }
    
    //Plaind
    public function plataforma($dados = array()) {
        $this->loadTemplate('pagina', 'plataforma', $dados);
    }

    public function plaind($dados = array()) {
        
        $this->loadTemplate('pagina', 'plaind', $dados);
    }

    public function desenvolvedores($dados = array()) {
                
        $this->loadTemplate('pagina', 'desenvolvedores', $dados);
    }
    
    //Propriedade Industrial
    public function propriedade_industrial($dados = array()) {
        $this->loadTemplate('pagina', 'propriedade_industrial', $dados);
    }

    public function desenho_industrial($dados = array()) {
        
        $this->loadTemplate('pagina', 'desenho_industrial', $dados);
    }
    
    public function marca($dados = array()) {
                
        $this->loadTemplate('pagina', 'marca', $dados);
    }
    
    public function patente($dados = array()) {
                
        $this->loadTemplate('pagina', 'patente', $dados);
    }
    
    public function software($dados = array()) {
                
        $this->loadTemplate('pagina', 'software', $dados);
    }
    
    public function transferencia_de_tecnologia($dados = array()) {
                
        $this->loadTemplate('pagina', 'tranferencia_de_tecnologia', $dados);
    }
    
    public function instituicoes_e_setores($dados = array()) {
                
        $this->loadTemplate('pagina', 'instituicoes_e_setores', $dados);
    }
    
    public function informacoes($dados = array()) {
                
        $this->loadTemplate('pagina', 'informacoes', $dados);
    }
    
    //Termos de Uso
    public function termos($dados = array()) {
        $this->loadTemplate('pagina', 'termos', $dados);
    }
    
    //Política de Privacidade
    public function privacidade($dados = array()) {
        $this->loadTemplate('pagina', 'privacidade', $dados);
    }
}

