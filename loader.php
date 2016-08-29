<?php
/*
 * O arquivo loader.php inicia a sessão,
 * define o autoload da plataforma e
 * carrega a plataforma iniciando o Core()
 */

//echo "Entrou load<br>";
// Inicia sessão
session_start();

// Definição do autoload
spl_autoload_register(function ($class){
    if(strpos($class, 'Controller') > -1) {
        if(file_exists('controllers/'.$class.'.php')) {
                require_once 'controllers/'.$class.'.php';
        }
    } elseif(file_exists('models/'.$class.'.php')) {
            require_once 'models/'.$class.'.php';
    } elseif(file_exists('core/'.$class.'.php')) {
            require_once 'core/'.$class.'.php';
    }
});

// Inicia o core do sistema
$core = new Core();
$core->run();
?>
