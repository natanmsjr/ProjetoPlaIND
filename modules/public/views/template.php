<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PlaIND - Plataforma de Acompanhamento de Processos de Propriedade Industrial">
    <meta name="author" content="Natanael Macedo da Silva Junior">
    <title>PlaIND :: Plataforma de Acompanhamento de Processos de Propriedade Industrial</title>
    <!-- core CSS -->
    <link href="../assets/css/publicCSS/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/publicCSS/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/publicCSS/animate.min.css" rel="stylesheet">
    <link href="../assets/css/publicCSS/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/publicCSS/owl.transitions.css" rel="stylesheet">
    <link href="../assets/css/publicCSS/prettyPhoto.css" rel="stylesheet">
    <link href="../assets/css/publicCSS/responsive.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/publicCSS/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../assets/js/publicJS/html5shiv.js"></script>
    <script src="../assets/js/publicJS/respond.min.js"></script>
    <![endif]-->
</head><!--/head-->

<body id="home" class="homepage">
    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">                
                <div class="navbar-header">
                    <div class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <h4><i class="fa fa-list-ul"></i></h4>
                    </div>
                    <a class="logo" href="/"><img src="../assets/images/PlaIND.png"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="/#home">Home</a></li>
                        <li class="scroll"><a href="#plataforma">A Plataforma</a></li>
                        <li class="scroll"><a href="#services">Propriedade Industrial</a></li>
                        <li class="scroll"><a href="#portfolio">Institucional</a></li>
                        <li class="scroll"><a href="#about">Sobre</a></li>
                        <li class="scroll"><a href="#get-in-touch">Contato</a></li>
                        <li><a href="/login"><i class="fa fa-user"></i> Login</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
    
    <!-- Corpo da página -->
    <?php $this->loadViewInTemplate($controller, $viewName); ?>

    <footer id="footer">
        <div class="container">
            <hr>
            <div class="col-sm-12">
            &copy; 2016 Pla<strong>IND</strong>. Todos os direitos reservados. Desenvolvido por <a href="#">@NatanMacedo</a>
            </div>
        </div>    
    </footer><!--/#footer-->

    <script src="../assets/js/publicJS/jquery.js"></script>
    <script src="../assets/js/publicJS/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="../assets/js/publicJS/owl.carousel.min.js"></script>
    <script src="../assets/js/publicJS/mousescroll.js"></script>
    <script src="../assets/js/publicJS/smoothscroll.js"></script>
    <script src="../assets/js/publicJS/jquery.prettyPhoto.js"></script>
    <script src="../assets/js/publicJS/jquery.isotope.min.js"></script>
    <script src="../assets/js/publicJS/jquery.inview.min.js"></script>
    <script src="../assets/js/publicJS/wow.min.js"></script>
    <script src="../assets/js/publicJS/main.js"></script>
</body>
</html>