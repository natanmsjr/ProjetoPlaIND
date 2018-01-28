<?php

/*
 *---------------------------------------------------------------
 * config.php - Ação: Configuração
 *---------------------------------------------------------------
 *
 * Página de configuração do sistema. Aqui é identificado e
 * iniciado  o ambiente de execução. Determina se permite ou não
 * a exibição de logs de erros.
 *
 * Ambientes padrão:
 *
 *     development (testing) - com reporte de erros
 *     public - sem reporte de erros
 *
 * Autor: Natanael Macedo da Silva Junior
 * Criação: 
 * Versão: 1.0
 * 
 */
session_cache_expire(30);
// Inicia sessão
session_start();

//$h = password_hash("123", PASSWORD_DEFAULT);
//var_dump($h, password_verify("123", $h), $_SESSION, $_POST);
//var_dump($_SESSION, $_POST);

// Solicita informações da página enviroment.php
require_once 'environment.php';

// Inicializa as informações padrão do ambiente de execução
// Caminho para a raiz do sistema
define('SYSTEM_PATH','sistema');
//Caminho para a raiz da plataforma
define('PLAIND_PATH','plaind');
//Caminho para a pasta assets
define('ASSETS_PATH','/assets');
//Caminho para a pasta assets
define('LIBRARY_PATH',PLAIND_PATH.'/biblioteca');
// Caminho para a pasta de uploads para arquivos
define('UPLOAD_FILE_PATH',PLAIND_PATH.'/uploads/arquivos');
// Caminho para a pasta de uploads imagens
define('UPLOAD_IMG_PATH',PLAIND_PATH.'/uploads/imagens');
// Caminho para a pasta de uploads imagens
define('INCLUDE_PATH',PLAIND_PATH.'/views/includes');
// URL da home
define('HOME_URL','http://www.plaind.pc');
// Nome do host da base de dados
define('HOSTNAME','localhost');
// Nome do DB
define('DB_NAME','plaind');
// Usuário do DB
define('DB_USER','root');
// Senha do DB
define('DB_PASSWORD','');
// Charset da conexão PDO
define('DB_CHARSET','utf8');

// Define e configura o ambiente atual da plataforma
if(defined('ENVIRONMENT'))
{
    if(ENVIRONMENT == 'development')
	{
        // Reporta todos os erros
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    } elseif (ENVIRONMENT == 'host') {    
        // Oculta todos os reportes de erros
        error_reporting(0);
        ini_set("display_errors", 0);
    }
}   

global $config;
$config = array();

// Configura banco do ambiente de execução
$config['dbname'] = DB_NAME;
$config['host'] = HOSTNAME;
$config['dbuser'] = DB_USER;
$config['dbpass'] = DB_PASSWORD;

// Inicia conecção com o Bando de dasdos da aplicação
/*global $db;
try {
    // Instrução PDO para conecção
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
    // Exceção para exibição de erros
    echo "Erro: ".$e->getMessage();
}*/

// Solicita a página loader.php
require_once 'loader.php';