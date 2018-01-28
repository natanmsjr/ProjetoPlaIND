<?php

/*
 *---------------------------------------------------------------
 * loader.php - Ação: Auto carregamento
 *---------------------------------------------------------------
 *
 * Página de definição do autoloader. Algoritmo de carregamento
 * automático das classes do sistema (Controller, Modelsm, Views).
 * Carrega a plataforma iniciando o Core().
 *
 * @autor: Natanael Macedo da Silva Junior
 * @versão: 1.0
 * 
 */

/*
 * O arquivo loader.php inicia a sessão,
 * define o autoload da plataforma e
 * carrega a plataforma iniciando o Core()
 */

// Definição do autoload
// Ao instanciar um objeto de uma classe:
// 1º - Verifica se é controller, se for procura o arquivo na pasta, senão...
// 2º - Verifica se é model, senão...
// 3º - Verifica se encontra na pasta do Core
spl_autoload_register(function($class)
{   
    // Extrai substring para determinar se é controller, model ou do core
    if(strpos($class,'Controller') > -1)
	{
        // Verifica se é algum controller
        if(file_exists(PLAIND_PATH.'/controllers/'.$class.'.php'))
		{
            require_once PLAIND_PATH.'/controllers/'.$class.'.php';
        }
    }
    // Verifica se é algum model
	elseif(file_exists(PLAIND_PATH.'/models/'.$class.'.php'))
	{
		require_once PLAIND_PATH.'/models/'.$class.'.php';
	}
    // Verifica se é da pasta core
    elseif(file_exists(SYSTEM_PATH.'/core/'.$class.'.php'))
	{
        require_once SYSTEM_PATH.'/core/'.$class.'.php';
    }
});

// Inicia o core do sistema
$core = new Core();
$core->run();