<?php
/**
 * Configuração geral
 */
//echo "Entrou config<br>";
require_once 'environment.php';

global $config;

$config = array();

// Define e confiura o ambiente atual da plataforma
if(ENVIRONMENT == 'development') {
    
    // Configura o ambiente de desenvolvimento
    $config['dbname'] = DB_NAME;
    $config['host'] = HOSTNAME;
    $config['dbuser'] = DB_USER;
    $config['dbpass'] = DB_PASSWORD;
    
    // Reporta todos os erros
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
} elseif(ENVIRONMENT == 'debug') {
    
    // Configura o ambiente de debug
    $config['dbname'] = DB_NAME;
    $config['host'] = HOSTNAME;
    $config['dbuser'] = DB_USER;
    $config['dbpass'] = DB_PASSWORD;
    
    // Reporta todos os erros
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

} elseif (ENVIRONMENT == 'host') {
    
    // Configura o ambiente para a hospedagem real
    $config['dbname'] = DB_NAME;
    $config['host'] = HOSTNAME;
    $config['dbuser'] = DB_USER;
    $config['dbpass'] = DB_PASSWORD;
    
    // Oculta todos os reportes de erros
    error_reporting(0);
    ini_set("display_errors", 0);
    
}

require_once 'loader.php';