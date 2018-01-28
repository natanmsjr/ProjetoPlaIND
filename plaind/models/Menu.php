<?php

class Menu extends Model {
    
    public function getMenu($controller, $viewName){
        $menu = array();
        $sql = "SELECT * FROM menus WHERE controller = '$viewName'";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0) {
            $menu = $sql->feth();
        }
        return $menu;
    }
    
    public function setMenu() {
        
    }
    
    public function insertMenu(){
        
    }
    
    public function deleteMenu() {
        
    }
    
    public function updateMenu() {
        
    }
    
}

