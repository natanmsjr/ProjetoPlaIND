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
 * Versão: 1.3
 * 
 */

// Solicita informações da página enviroment.php
require_once 'environment.php';

global $config;
$config = array();
// Configura banco do ambiente de execução
$config['dbname'] = DB_NAME;
$config['host'] = HOSTNAME;
$config['dbuser'] = DB_USER;
$config['dbpass'] = DB_PASSWORD;

// Define e configura o ambiente atual da plataforma
if(defined('ENVIRONMENT')){
    if(ENVIRONMENT == 'development') {    
        // Reporta todos os erros
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    } elseif (ENVIRONMENT == 'host') {    
        // Oculta todos os reportes de erros
        error_reporting(0);
        ini_set("display_errors", 0);
    }
}   

// Inicia conecção com o Bando de dasdos da aplicação
global $db;
try {
    // Instrução PDO para conecção
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
    // Exceção para exibição de erros
    echo "Erro: ".$e->getMessage();
}

// Solicita a página loader.php
require_once 'loader.php';