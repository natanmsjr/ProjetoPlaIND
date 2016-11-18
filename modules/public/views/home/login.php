    <!-- Conteúdo da p´pagina de Login -->
    <br>
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <br>
                <ol class="breadcrumb  wow fadeInRight">
                    <li><a href='/'>Início</a></li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div><!-- /.row -->
        
        <!-- column-title -->
        <div class="row">
             <div class="col-sm-12 wow fadeInLeft">
                 <h3 class="column-title">Login</h3>
             </div>
        </div><!-- /.row -->
        
        <!-- content -->
        <div id="login" class="container-fluid" style="width:500px">
            <div class="row">
                <div class="well">
                    <form method="POST" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off" action="../user_login.php">
                    <div class="control-group">
                        <div class="controls">	
                            <label class="control-label" for="email">Email:</label>
                            <input class="form-control"  name="email" type="email" id="email" placeholder="Email"></input>
                        </div>
                        <div class="controls">
                            <label class="control-label" for="senha">Senha:</label>
                            <input type="password" class="form-control"  name="senha" id="senha" placeholder="Senha"></input>
                            <input type="checkbox" id="remember"> Lembre-me</input>
                        </div>                            
                    </div>
                    <div class="control-group">
                        <div class="controls text-right">
                            <button type="submit" class="btn btn-primary"><strong>ENTRAR</strong>    <i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12">
                        <div class="col-lg-6 text-center">
                            <h4><a href="#"><h4>Esqueceu sua senha?</a></h4>
                        </div>
                        <div class="col-lg-6 text-center">
                            <h4><a href="#"><i class="fa fa-plus"></i> Cadastre-se</a></h4>
                        </div>
                    </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <br>
        
    </div>