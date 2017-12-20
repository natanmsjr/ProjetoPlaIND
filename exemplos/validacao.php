<?php/*
session_start();
$_SESSION['module'] = 'restricted';
//$_SESSION['module'] = 'public';
$_SESSION['controller'] = '';
$_SESSION['action'] = '';
$_SESSION['parameters'] = array();
$_SESSION['login'] = false;

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
    header("Location: index.php"); exit;
}

require_once '/home.php';*/

<?php
// Inclui o arquivo com o sistema de segurança
require_once("seguranca.php");
// Verifica se um formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Salva duas variáveis com o que foi digitado no formulário
  // Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
  $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
  $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
  // Utiliza uma função criada no seguranca.php pra validar os dados digitados
  if (validaUsuario($usuario, $senha) == true) {
    // O usuário e a senha digitados foram validados, manda pra página interna
    header("Location: index.php");
  } else {
    // O usuário e/ou a senha são inválidos, manda de volta pro form de login
    // Para alterar o endereço da página de login, verifique o arquivo seguranca.php
    expulsaVisitante();
  }
}
/*
$currentController = 'homeController';
$action = 'index';
$parameters = array();
    
if(empty($_POST['email']) && empty($_POST['senha'])){
    $_SESSION['module'] = 'public';
    $controller = new $currentController();
    call_user_func_array(array($controller, $action), $parameters);
} else {
    $_SESSION['module'] = 'restricted';
    $controller = new $currentController();
    call_user_func_array(array($controller, $action), $parameters);
}*/