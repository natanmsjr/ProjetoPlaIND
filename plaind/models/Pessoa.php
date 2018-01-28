<?php
class Pessoa extends model {
	
	public function __construct() {
        parent::__construct();
    }
	
	public function getPessoa($email, $senha) {
		$usuario = array();
		$sql = "SELECT * FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$senha'";
		$usuario = $this->db->query($sql);
		return $usuario;
	}
	
	public function login($email, $senha) {
		$resultado = array();
		$this->email = $email;
		$this->senha = $senha;
		$resultado = $this->getUsuario($this->email, $this->senha);
		if($resultado->rowCount() > 0) {
			$resultado = $resultado->fetch();
			$_SESSION['usuarioId'] = $resultado['id_usuario'];
			$_SESSION['usuarioSenha'] = $resultado['senha_usuario'];
			$_SESSION['usuarioPermissao'] = $resultado['permissao_usuario'];
			header("Location: /painel");
			exit;
		}
		else {
			$msg = array();
			$msg['alert'] = "danger";
			$msg['msg_alert'] = "E-mail e/ou senha errados.";
			return $msg;
		}
	}
}