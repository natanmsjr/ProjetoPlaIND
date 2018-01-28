<?php

class Usuario extends model {
	
	private $id;
	private $email;
	private $senha;
	private $situacao;
	private $permissao;
	private $dataCadastro;
	
	public function __construct() {
        parent::__construct();
    }
	
	private function getUsuario() {
		$usuario = array(
			"id" => '$this->id',
			"email" => '$this->email',
			"senha" => '$this->senha',
			"situacao" => '$this->situacao',
			"permissao" => '$this->permissao',
			"dataCadastro" => '$this->dataCadastro'
		);
		return $usuario;
	}
	
	private function setUsuario($id="", $email="", $senha="", $situacao="", $permissao="", $dataCadastro="") {
		$this->id = $id;
		$this->email = $email;
		$this->senha = $senha;
		$this->situacao = $situacao;
		$this->permissao = $permissao;
		$this->dataCadastro = $dataCadastro;
	}
	
	private function selectUsuarioById() {
		$usuario = array();
		$sql = "
			SELECT *
			FROM usuarios
			WHERE id_usuario = '$this->id'";
		if($usuario = $this->db->query($sql))
			return $usuario;
		else
			return $usuario = array();
	}
	
	private function selectUsuarioByIdHash() {
		$usuario = array();
		$sql = "
			SELECT *
			FROM usuarios
			WHERE md5(id_usuario) = '$this->id'";
		if($usuario = $this->db->query($sql))
			return $usuario;
		else
			return $usuario = array();
	}
	
	private function selectUsuarioByEmail() {
		$sql = "
			SELECT *
			FROM usuarios
			WHERE email_usuario = '$this->email'";
		if($usuario = $this->db->query($sql))
			return $usuario;
		else
			return $usuario = array();
	}
	
	private function updateSenhaUsuario() {
		$sql = "
			UPDATE usuarios
			SET senha_usuario = '$this->senha',
				situacao_usuario = IF(situacao_usuario = 3, 1, situacao_usuario)
			WHERE md5(id_usuario) = '$this->id'";
		if($this->db->query($sql)) {
			$msg['alert'] = "success";
			$msg['msg_alert'] = "<strong>Aviso:</strong> Senha alterada com sucesso.";
			return $msg;
		} else {
			$msg['alert'] = "danger";
			$msg['msg_alert'] = "<strong>Aviso:</strong> Não foi possível atualizar a senha.";
			return $msg;
		}
	}
	
	private function blockUsuario() {
		$sql = "
			UPDATE usuarios
			SET situacao_usuario = 3
			WHERE email_usuario = '$this->email'";
		if($usuario = $this->db->query($sql))
			return $usuario;
		else
			return $usuario = array();
	}
	
	public function login($email, $senha) {
		$this->setUsuario("", $email, $senha); // set as ionformações recebiodas do usuario
		$resultado = $this->selectUsuarioByEmail(); // busca no banco o usuario com o e-mail informado
		if(!empty($resultado) && $resultado->rowCount() == 1) { // verifica se foi retornado somente 1 registro
			$resultado = $resultado->fetch(); // trabalha as inormações recebidas do banco
			if($resultado['situacao_usuario'] == '1') { // verifica situação do usuario
				if(password_verify($this->senha, $resultado['senha_usuario'])) {
					$_SESSION['usuarioId'] = $resultado['id_usuario'];
					$_SESSION['usuarioEmail'] = $resultado['email_usuario'];
					$_SESSION['usuarioSenha'] = $resultado['senha_usuario'];
					$_SESSION['usuarioPermissao'] = $resultado['permissao_usuario'];
					header("Location: /painel");
					exit;
				} else {
					if(!isset($_SESSION['tentativas']))
						$_SESSION['tentativas'] = 0;
					else {
						if($_SESSION['tentativas'] >= 4) {
							$this->blockUsuario();
							$msg['alert'] = "warning";
							$msg['msg_alert'] = "<strong>Aviso:</strong> Você excedeu a quantidade de tentativas. Espere alguns minutos e tente novamente.";
							return $msg;
						} else
							$_SESSION['tentativas']++;
					}
					$msg['alert'] = "danger";
					$msg['msg_alert'] = "<strong>Aviso:</strong> Senha incorreta. Tente novamente.";
					return $msg;
				}
			} elseif($resultado['situacao_usuario'] == '2') {
				$msg['alert'] = "info";
				$msg['msg_alert'] = "<strong>Aviso:</strong> Conta desativada. Para ativar, verifique seu e-mail ou entre em contato com o administrador.";
				return $msg;
			} else {
				$msg['alert'] = "info";
				$msg['msg_alert'] = "<strong>Aviso:</strong> Conta bloqueada. Para desbloquear clique <a href=\"/acesso/recuperacao\">aqui</a>, ou entre em contato com o administrador.";
				return $msg;
			}
		} else {
			$msg['alert'] = "danger";
			$msg['msg_alert'] = "<strong>Aviso:</strong> Conta não encontrada. Tente novamente.";
			return $msg;
		}
	}
	
	public function recuperaAcesso($email) {
		$this->setUsuario("", $email, ""); // set as ionformações recebiodas do usuario
		$resultado = $this->selectUsuarioByEmail(); // busca no banco o usuario com o e-mail informado
		if($resultado->rowCount() == 1) { // verifica se foi retornado somente 1 registro
			$resultado = $resultado->fetch(); // trabalha as inormações recebidas do banco
			$hash = md5($resultado['id_usuario']);
			$link = "<a href=\"www.plaind.pc/acesso/nova_senha?h=".$hash."\">aqui</a>";
			$assunto = "PlaIND - Solicitação de recuperação de senha";
			$corpo = "Clique no link abaixo criar uma nova senha:\n\n".$link;
			$cabecalho= 'From: support@plaind.pc' . "\r\n" .
						'Reply-To: natan.msjr@gmail.com' . "\r\n" .
						'MIME-Version: 1.0' . "\r\n" .
						'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
			mail($this->email, $assunto, $corpo, $cabecalho);
			/*$to       = 'natan.msjr@gmail.com';
			$subject  = 'Testing sendmail.exe';
			$message  = 'Hi, you just received an email using sendmail!';
			$headers  = 'From: natan.msjr@gmail.com' . "\r\n" .
						'Reply-To: natan.msjr@gmail.com' . "\r\n" .
						'MIME-Version: 1.0' . "\r\n" .
						'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
			if(mail($to, $subject, $message, $headers))
				echo "Email sent";
			else
				echo "Email sending failed";*/
			$msg['alert'] = "info";
			$msg['msg_alert'] = "<strong>Aviso:</strong> Uma menssagem foi enviada para seu e-mail.";
			return $msg;
		} else {
			$msg['alert'] = "danger";
			$msg['msg_alert'] = "<strong>Aviso:</strong> Conta não encontrada. Se já tiver uma, tente novamente. Caso contrário, é necessário fazer um cadastro clicando <a href=\"/acesso\">aqui</a>.";
			return $msg;
		}
	}
	
	public function novaSenha($idHash, $senha) {
		$this->setUsuario($idHash, "", password_hash($senha, PASSWORD_DEFAULT));
		$msg = $this->updateSenhaUsuario();
		return $msg;
	}
}