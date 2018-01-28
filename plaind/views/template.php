<?php
    if($controller == 'acesso') {
        //Carregando topo da página
        $this->loadHeaderViewInTemplate(0);
        
        //Carregando topo da página
        $this->loadMenuViewInTemplate(1);
        //Corpo da página        
        $this->loadViewInTemplate($controller, $viewName, $viewData);
    }
	elseif($controller == 'painel') {
        //Carregando topo da página
        $this->loadHeaderViewInTemplate(2);
        
        //Carregando topo da página
        $this->loadMenuViewInTemplate(2);
        
        //Corpo da página        
        $this->loadViewInTemplate($controller, $viewName, $viewData);
        
        //Carregando rodapé da página
        $this->loadFooterViewInTemplate(2);
    }
	elseif($controller == 'erro') {
		//Corpo da página        
        $this->loadViewInTemplate($controller, $viewName, $viewData);
	}
	else {        
        //Carregando topo da página
        $this->loadHeaderViewInTemplate(0);
        
        //Carregando topo da página
        $this->loadMenuViewInTemplate(0);
        
        //Corpo da página        
        $this->loadViewInTemplate($controller, $viewName, $viewData);
        
        //Carregando rodapé da página
        $this->loadFooterViewInTemplate(0);
    }