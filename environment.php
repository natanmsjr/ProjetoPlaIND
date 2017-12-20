<?php

/*
 *---------------------------------------------------------------
 * environment.php - Ação: Define ambiente
 *---------------------------------------------------------------
 *
 * Página que defie o ambiente em que será executado o sistema.
 * Inicializa o padrão de configuração do Bando de Dados do
 * ambiente atual.
 *
 * @autor: Natanael Macedo da Silva Junior
 * @version: 1.2
 * 
 */

// Determina o ambiente de execução
define('ENVIRONMENT', 'development');
//define('ENVIRONMENT', 'host');

// Inicializa as informações padrão do ambiente de execução
if(ENVIRONMENT == 'development') {
    // Caminho para a raiz
    define( 'BASE_PATH', dirname( __FILE__ ) );
    // Caminho para a pasta de uploads
    define( 'UP_ABSPATH', BASE_PATH . '/views/_uploads' );
    // URL da home
    define( 'HOME_URL', 'http://www.plaind.pc' );
    // Nome do host da base de dados
    define( 'HOSTNAME', 'localhost' );
    // Nome do DB
    define( 'DB_NAME', 'plaind' );
    // Usuário do DB
    define( 'DB_USER', 'root' );
    // Senha do DB
    define( 'DB_PASSWORD', '' );
    // Charset da conexão PDO
    define( 'DB_CHARSET', 'utf8' );

} elseif (ENVIRONMENT == 'host') {  
    // Caminho para a raiz
    define( 'BASE_PATH', dirname( __FILE__ ) );
    // Caminho para a pasta de uploads
    define( 'UP_ABSPATH', BASE_PATH . '/views/_uploads' );
    // URL da home
    define( 'HOME_URL', 'http://www.plaind.pc' );
    // Nome do host da base de dados
    define( 'HOSTNAME', 'localhost' );
    // Nome do DB
    define( 'DB_NAME', 'plaind' );
    // Usuário do DB
    define( 'DB_USER', 'root' );
    // Senha do DB
    define( 'DB_PASSWORD', '' );
    // Charset da conexão PDO
    define( 'DB_CHARSET', 'utf8' );
}