<?php
/*
 * Inicializa as configuração do ambiente
 */
//echo "Entrou environment<br>";
// Inicia o ambiente de desenvolvimento
define('ENVIRONMENT', 'development');

// Caminho para a raiz
define( 'SRCPATH', dirname( __FILE__ ) );
 
// Caminho para a pasta de uploads
//define( 'UP_ABSPATH', SRCPATH . '/views/_uploads' );
 
// URL da home
define( 'HOME_URI', 'http://plaind.pc' );
 
// Nome do host da base de dados
define( 'HOSTNAME', 'localhost' );
 
// Nome do DB
define( 'DB_NAME', 'plaind' );
 
// Usuário do DB
define( 'DB_USER', 'root' );
 
// Senha do DB
define( 'DB_PASSWORD', '8912' );
 
// Charset da conexão PDO
define( 'DB_CHARSET', 'utf8' );

?>