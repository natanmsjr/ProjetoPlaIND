<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="PlaIND - Plataforma de Acompanhamento de Processos de Propriedade Industrial">
        <meta name="author" content="Natanael Macedo da Silva Junior">
        
        <title>PlaIND :: Plataforma de Acompanhamento de Processos de Propriedade Industrial</title>
        
        <!-- core Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- CSS Tema PlaIND -->
        <link href="/assets/css/publicCSS/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/css/publicCSS/main.css" rel="stylesheet">
        <link href="/assets/css/publicCSS/plaind.css" rel="stylesheet">
        <link href="/assets/css/publicCSS/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/assets/css/publicCSS/animacao.min.css" rel="stylesheet">
        <!-- Scripts -->
        <script src="/assets/js/publicJS/jquery.js"></script>
        <script src="/assets/js/publicJS/bootstrap.min.js"></script>
        <script src="/assets/js/publicJS/plaind.js"></script>
        <script src="/assets/js/publicJS/main.js"></script>
        <script src="/assets/js/publicJS/wow.min.js"></script>
        <script src="/assets/js/publicJS/jquery.maskedinput.js"></script>
        
        <!--[if lt IE 9]>
        <script src="../assets/js/publicJS/html5shiv.js"></script>
        <script src="../assets/js/publicJS/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <script type="text/javascript">
$(document).ready(function(){
	$("input.data").mask("99/99/9999");
        $("#cpf").mask("999.999.999-99");
        $("input.cep").mask("99.999-999");
});
</script>
    <body id="inicio" data-spy="scroll" data-target=".navbar" data-offset="50">