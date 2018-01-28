<?php
class Config extends model {
	
	public function __construct() {
        parent::__construct();
    }
	
    public function getConfig() {
        $array = array();
        $sql = "SELECT * FROM configuracao";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0) {
            foreach($sql->fetchAll() as $config) {
                $array[$config['propriedade']] = $config['valor'];
            }
        }
        return $array;
    }
    
    public function setPropriedade($propriedade, $valor) {
        $this->db->query("UPDATE configuracao SET valor = '$valor' WHERE nome = '$propriedade'");
    }
}
