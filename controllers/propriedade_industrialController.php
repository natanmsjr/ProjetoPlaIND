<?php

class propriedade_industrialController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function desenho_industrial() {
        
        $this->loadTemplate('desenho_industrial');
    }
    
    public function marca() {
                
        $this->loadTemplate('marca');
    }
    
    public function patente() {
                
        $this->loadTemplate('patente');
    }
    
    public function software() {
                
        $this->loadTemplate('software');
    }

}
