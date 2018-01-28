<?php

/*
 *---------------------------------------------------------------
 * acessoController.php
 *---------------------------------------------------------------
 *
 * @autor: Natanael Macedo da Silva Junior
 * @version: 1.0
 * 
 */

class acessoController extends controller {
    
	public function __construct() {
        parent::__construct();
    }
	
    public function index($viewData = array()) {
        $this->loadTemplate('acesso', 'index', $viewData);
    }
	
	public function cadastro_pessoa($viewData = array()) {
		$this->loadTemplate('acesso', 'cadastro_pessoa', $viewData);
    }
	
	public function cadastro_empresa($viewData = array()) {
		$this->loadTemplate('acesso', 'cadastro_empresa', $viewData);
    }
	
	public function nova_senha($viewData = array()) {
		$this->loadTemplate('acesso', 'nova_senha', $viewData);
    }
	
	public function recuperacao($viewData = array()) {
		$this->loadTemplate('acesso', 'recuperacao', $viewData);
    }
	
	public function logIn($viewData = array()) {
		if(isset($_POST)
		&& isset($_POST['email']) && !empty($_POST['email'])
		&& isset($_POST['senha']) && !empty($_POST['senha'])
		&& isset($_POST['csrfToken']) && !empty($_POST['csrfToken'])
		&& isset($_SESSION['csrfToken']) && !empty($_SESSION['csrfToken'])
		&& $_POST['csrfToken'] == $_SESSION['csrfToken']) {
			$email = addslashes(trim($_POST['email']));
    		$senha = addslashes(trim($_POST['senha']));
    		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$usuario = new Usuario();
				$msg = $usuario->login($email, $senha);
				$viewData['alert'] = $msg['alert'];
				$viewData['msg_alert'] = $msg['msg_alert'];
			} else {
				$viewData['alert'] = "warning";
				$viewData['msg_alert'] = "<strong>Aviso:</strong> Informe um e-mail válido.";
			}
    	} else {
			$viewData['alert'] = "danger";
			$viewData['msg_alert'] = "<strong>Aviso:</strong> Não foi possível fazer esta ação no momento.";
		}
        $this->loadTemplate('acesso', 'index', $viewData);
    }
	
	public function logoff($viewData = array()) {
		unset($_SESSION['csrfToken']);
		unset($_SESSION['usuarioId']);
		unset($_SESSION['usuarioSenha']);
		unset($_SESSION['usuarioPermissao']);
		unset($_SESSION['tentativas']);
		session_destroy();
		$_GET = array();
		$_POST = array();
		session_cache_expire(30);
		session_start();
		$this->loadTemplate('acesso', 'index', $viewData);
	}
	
	public function singIn($viewData = array()) {
		if(isset($_POST) && $_POST['csrfToken'] == $_SESSION['csrfToken']) {
			$cliente = addslashes($_POST['cliente']);
			$categoria = addslashes($_POST['categoria']);
			$nome = addslashes($_POST['nome']);
			$sobrenome = addslashes($_POST['sobrenome']);
			$sexo = addslashes($_POST['sexo']);
			$data_nasc = addslashes($_POST['data']);
			$rg = addslashes($_POST['rg']);
			$cpf = addslashes($_POST['cpf']);
			$celular = addslashes($_POST['celular']);
			$telefone = addslashes($_POST['telefone']);
			$cep = addslashes($_POST['cep']);
			$endereco = addslashes($_POST['endereco']);
			$numero = addslashes($_POST['numero']);
			$complemento = addslashes($_POST['complemento']);
			$bairro = addslashes($_POST['bairro']);
			$cidade = addslashes($_POST['cidade']);
			$estado = addslashes($_POST['estado']);
			$unidade = addslashes($_POST['unidade']);
			$departamento = addslashes($_POST['departamento']);
			$matricula = addslashes($_POST['matricula']);
			$siape = addslashes($_POST['siape']);
			
			$email = addslashes($_POST['email']);
			$senha = sha1(addslashes($_POST['senha']).CHAVE);
			
    		$msg = $usuario->login($email, $senha);
			$viewData['alert'] = $msg['alert'];
			$viewData['msg_alert'] = $msg['msg_alert'];
		}
		else {
			$viewData['alert'] = "danger";
			$viewData['msg_alert'] = "Não é possível fazer esta ação no momento.";
		}
        $this->loadTemplate('acesso', 'index', $viewData);
    }
	
	public function forgotPassword($viewData = array()) {
		if(isset($_POST)
		&& isset($_POST['email']) && !empty($_POST['email'])
		&& isset($_POST['csrfToken']) && !empty($_POST['csrfToken'])
		&& isset($_SESSION['csrfToken']) && !empty($_SESSION['csrfToken'])
		&& $_POST['csrfToken'] == $_SESSION['csrfToken']) {
    		$email = addslashes(trim($_POST['email']));
    		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$usuario = new Usuario();
				$msg = $usuario->recuperaAcesso($email);
				$viewData['alert'] = $msg['alert'];
				$viewData['msg_alert'] = $msg['msg_alert'];
				if($msg['alert'] == 'danger')
					$this->loadTemplate('acesso', 'recuperacao', $viewData);
				else
					$this->loadTemplate('acesso', 'index', $viewData);
			} else {
				$viewData['alert'] = "warning";
				$viewData['msg_alert'] = "<strong>Aviso:</strong> Informe um e-mail válido.";
				$this->loadTemplate('acesso', 'recuperacao', $viewData);
			}
		} else {
			$viewData['alert'] = "danger";
			$viewData['msg_alert'] = "<strong>Aviso:</strong> Não é possível fazer esta ação no momento.";
			$this->loadTemplate('acesso', 'recuperacao', $viewData);
		}
    }
	
	public function newPassword($viewData = array()) {
		if(isset($_POST)
		&& isset($_POST['senha']) && !empty($_POST['senha'])
		&& isset($_POST['senha-confirmacao']) && !empty($_POST['senha-confirmacao'])
		&& isset($_POST['h']) && !empty($_POST['h'])
		&& isset($_POST['csrfToken']) && !empty($_POST['csrfToken'])
		&& isset($_SESSION['csrfToken']) && !empty($_SESSION['csrfToken'])
		&& $_POST['csrfToken'] == $_SESSION['csrfToken']) {
			$idHash = addslashes(trim($_POST['h']));
			$senha = addslashes(trim($_POST['senha']));
			$senhaConf = addslashes(trim($_POST['senha-confirmacao']));
			if($senha == $senhaConf) {
				$usuario = new Usuario();
				$msg = $usuario->novaSenha($idHash, $senha);
				$viewData['alert'] = $msg['alert'];
				$viewData['msg_alert'] = $msg['msg_alert'];
				$this->loadTemplate('acesso', 'index', $viewData);
			} else {
				$viewData['alert'] = "warning";
				$viewData['msg_alert'] = "<strong>Aviso:</strong> As senhas não coincidem.";
				header("Location: /acesso/nova_senha?h=".$_POST['h']);
			}
		} else {
			$viewData['alert'] = "danger";
			$viewData['msg_alert'] = "<strong>Aviso:</strong> Não é possível fazer esta ação no momento.";
			$this->loadTemplate('acesso', 'nova_senha', $viewData);
		}
	}
}