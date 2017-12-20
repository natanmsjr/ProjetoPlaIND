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
    <!-- CSS do Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- CSS da Plataforma -->
    <link rel="stylesheet" href="../assets/css/modern-business.css">
    <!-- Tema da plataforma -->
    <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../assets/css/skin-blue.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="skin-blue">
    
        <!-- Main Header -->
        <header class="main-header">
            
            <!-- Header Navbar -->
            <nav class="navbar navbar-fixed-top">
              
                <!-- Logo -->
                <a href="/" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">P<strong>IND</strong></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Pla<strong>IND</strong></span>
                </a>
                <a href="#" class="sidebar-toggle" data-toggle="collapse" role="button" data-target="#navbar-collapse">
                    <span class="sr-only">Navegação Alternativa</span>
                </a>
              
                <!-- Navbar Right Menu -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">A Plataforma</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Propriedade Industrial <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/propriedade_industrial/desenho_industrial">Desenho Industrial</a>
                            </li>
                            <li>
                                <a href="/propriedade_industrial/marca">Marca</a>
                            </li>
                            <li>
                                <a href="/propriedade_industrial/patente">Patente</a>
                            </li>
                            <li>
                                <a href="/propriedade_industrial/software">Software</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Institucional</a>
                    </li>
                    <li>
                        <a href="/contato">Contato</a>
                    </li>
                    <li>
                        <a href="/login"><i class="glyphicon glyphicon-log-in"></i> Entre</a>
                    </li>
                </ul>
              </div>
            </nav>
        </header>
    
    
    <!-- Corpo da página -->
    <?php $this->loadViewInTemplate($controller, $viewName); ?>
    
    <!-- Rodapé -->
    <div class="container">
        
        <footer>
            
            <!-- <div class="row">
                <br>
                <hr>                
                <div class="col-lg-4">
                    <h3>CINTTEC</h3>
                    <p><span class="icon icon-home"></span> Av. Marechal Rondon, S/N<br/>
                        <span class="icon icon-phone"></span> Jardim Rosa Elze, São Cristóvão 49100-000 <br/>
                        <span class="icon icon-mobile"></span><i class="fa fa-phone"></i> (79) 3194-6865 <br/>
                        <span class="icon icon-envelop"></span><i class="fa fa-envelope-o"></i><a href="#"> 
                            cinttec.ufs@gmail.com</a> <br/>
                        <span class="icon icon-facebook"></span><i class="fa fa-clock-o"></i><a href="#">
                            Segunda - Sexta: 8:00h ás 17:00  </a> <br/>
                    </p>
                </div>

                <div class="col-lg-4">
                    
                    
                </div>

                <div class="col-lg-4 right">
                    <h3>Páginas</h3>
                    <ol class="list-unstyled">
                        <li><a href="#">A Plataforma</a></li>
                        <li><a href="/propriedade_industrial">Propriedade Industrial</a>
                        <li><a href="#">Institucional</a></li>
                        <li><a href="/contato">Contato</a></li>
                        <li><a href="/login">Login</a></li>
                    </ol>
                </div> -->

                <div class="col-lg-12">
                    <hr>
                    <p>Copyright &copy; Pla<strong>IND</strong> 2016</p>
                </div>
            
            </div>
            
        </footer>
        
    </div>
    <!-- ./Rodapé -->

    <!-- AdminLTE App -->
    <script src="../assets/js/app.min.js"></script>
    
    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>
    
    <!-- jQuery 2.2.3 -->
    <script src="../assets/js/jquery-2.2.3.min.js"></script>
    
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