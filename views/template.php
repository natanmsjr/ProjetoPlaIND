<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PlaIND - Plataforma de Acompanhamento de Processos de Propriedade Industrial">
    <meta name="author" content="Natanael Macedo da Silva Junior">

    <title>PlaIND :: Plataforma de Acompanhamento de Processos de Propriedade Industrial</title>

    <!-- Localmente -->
    <!-- CSS do Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS da Plataforma -->
    <link href="../assets/css/modern-business.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	
    <!-- Cabeçalho-menu -->
    <header id="cabeçalho">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            
            <div class="container">	
                
                <!-- Para tela mobile -->
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Navegação Alternativa</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><strong>PlaIND</strong></a>
                </div>

                <!-- Páginas Menu -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">A Plataforma</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Propriedade Industrial <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                        <a href="#">Desenho Industrial</a>
                                </li>
                                <li>
                                        <a href="#">Marca</a>
                                </li>
                                <li>
                                        <a href="#">Patente</a>
                                </li>
                                <li>
                                        <a href="#">Software</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                                <a href="#">Institucional</a>
                        </li>
                        <li>
                                <a href="#">Contato</a>
                        </li>
                        <li>
                                <a href="/login"><i class="glyphicon glyphicon-log-in"></i> Entre</a>
                        </li>
                    </ul>
                </div>
                
            </div>
            
        </nav>
    </header>
    <!-- /cabeçalho-menu -->

    <!-- Corpo da página -->
     <?php $this->loadViewInTemplate($viewName); ?>
        
    <!-- Rodapé -->
    <div class="container">
        
        <footer>
            
            <div class="row">
                <br>
                <hr>
                <br>
                <br>
                <div class="col-lg-4">
                    <h3>Contact Information</h3>
                    <p><span class="icon icon-home"></span> Some Address 987, NY<br/>
                        <span class="icon icon-phone"></span> +34 9884 4893 <br/>
                        <span class="icon icon-mobile"></span> +34 59855 9853 <br/>
                        <span class="icon icon-envelop"></span> <a href="#"> agency@blacktie.co</a> <br/>
                        <span class="icon icon-twitter"></span> <a href="#"> @blacktie_co </a> <br/>
                        <span class="icon icon-facebook"></span> <a href="#"> BlackTie Agency </a> <br/>
                    </p>
                </div>

                <div class="col-lg-4">
                    <h3>Newsletter</h3>
                    <p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-4 control-label"></label>
                            <div class="col-lg-10">
                              <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="text1" class="col-lg-4 control-label"></label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="text1" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10">
                              <button type="submit" class="btn btn-success">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <h3>Support Us</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>

                <div class="col-lg-12">
                    <hr>
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            
            </div>
            
        </footer>
        
    </div>
    <!-- ./Rodapé -->

    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>