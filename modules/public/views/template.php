<?php
    
    if ($viewName == 'login' || $viewName == 'cadastro' || $viewName == 'nova_senha'){
        //Carregando topo da página
        require 'header.php';
        
        //Carregando topo da página
        require 'menu.php';
        
        //Corpo da página        
        $this->loadViewInTemplate($controller, $viewName);
        
        //Carregando rodapé da página
        require 'footer.php';
    }
    else {
        //Carregando topo da página
        require 'header.php';
        
        //Carregando topo da página
        require 'menu.php';

        //Corpo da página        
        $this->loadViewInTemplate($controller, $viewName);

        //Carregando rodapé da página
        require 'footer.php';
    
    }