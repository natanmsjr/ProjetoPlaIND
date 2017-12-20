    <div id="entrar">
        <!-- Conteúdo da página de Login -->
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <h4><a class="default" style="color: #fff; padding-left: 10px;" href="/"><i class="fa fa-chevron-left"></i> Voltar a Página Principal</a></h4>
            </div>
            <!-- /.row -->
        
            <div class="card card-container">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 card-header">
                    <a href="/"><img src="/assets/images/PlaIND.png" alt="PlaIND"></a>
                    <hr>
                </div>
                <div class="text-center">
                    <h4>Acesse a Plataforma</h4>
                </div>
                <form class="form-signin" method="POST" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="on" action="#">
                    <div class="form-group">
                        <input type="text" id="cpf" class="form-control" placeholder="CPF" autocomplete="on" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite o CPF no formato nnn.nnn.nnn-nn" />
                        <input type="password" id="password" class="form-control" placeholder="Senha" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" />
                        <div class="text-right">
                            <a href="/login/nova_senha" class="forgot-password">Esqueci minha senha</a>
                        </div>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">
                            <span class="fa fa-sign-in"></span> Acessar</button>
                    </div>
                </form><!-- /form -->
                <hr>
                <div class="text-center">
                    <h5><a href="/login/cadastro" class="forgot-password">
                        <span class="fa fa-plus"></span> Novo Cadrastro</a>
                    </h5>
                </div>
            </div><!-- /card-container -->
        </div><!-- /container -->
    </div>