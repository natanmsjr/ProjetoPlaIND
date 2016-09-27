<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <br>
            <ol class="breadcrumb">
                <li><a href='/'>Início</a></li>
                <li class="active">Login</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
	
    <!-- conteúdo -->
    <div id="login" class="container-fluid" style="width:300px">
        
        <div class="row">
            <div class="span1"> &nbsp;</div>
            
            <div class="span4">
                
                <div class="well">
                    <form method="POST" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off" action="../user_login.php">
                        <div class="control-group">
                            <div class="controls">	
                                <label class="control-label" for="email">Email:</label>
                                <input class="form-control"  name="email" type="email" id="email" placeholder="Email" style="width:260px"></input>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <label class="control-label" for="senha">Senha:</label>
                                <input type="password" class="form-control"  name="senha" id="senha" placeholder="Senha" style="width:260px"></input>
                            </div>
                            <input type="checkbox" id="remember"> Lembre-me</input>
                        </div>
                        <br/>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-default">Entrar</button> <a href="index.html">Esqueceu sua senha?</a>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
            
        </div>
        
    </div>