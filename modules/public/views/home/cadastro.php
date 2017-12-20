    <div id="entrar">
        <!-- Conteúdo da página de Login -->
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <!--<div class="row">
                <h4>
                    <a class="default" style="color: #fff; padding-left: 10px;" href="/">
                        <i class="fa fa-chevron-left"></i> Voltar a Página Principal
                    </a>
                </h4>
            </div> <!-- /.row -->
            
            <div class="col-lg-12">
                <div class="login-card col-md-5 col-lg-5">
                    <div class="text-justifyr">
                        <h4>Acesse a Plataforma</h4>
                        <p>Já tenho cadastro na PlaIND</p>
                    </div>
                    <form class="form-signin" method="POST" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="on" action="#">
                        <div class="form-group">
                            <input type="text" id="email" class="form-control" placeholder="E-mail" autocomplete="on" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite seu E-mail" />
                            <input type="password" id="password" class="form-control" placeholder="Senha" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" />
                            <div class="text-right">
                                <a href="/login/nova_senha" class="forgot-password">Esqueci minha senha</a>
                            </div>
                            <button class="btn btn-lg btn-primary btn-signin" type="submit">
                                <span class="fa fa-sign-in"></span> Continuar
                            </button>
                        </div>
                    </form><!-- /form -->
                </div>

                <div class="col-md-2 col-lg-2">
                </div>
                
                <div class="singin-card col-md-5 col-lg-5">
                    <div class="text-justify">
                        <h4>Cadastre-se na PlaIND</h4>
                        <p>Através do cadastro você ficará por dentro das novidades dos seus processos.</p>
                    </div>
                    <form class="form-signin" method="POST" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="on" action="#">
                        <div class="form-group">
                            <input type="text" id="cpf" class="form-control" placeholder="CPF" autocomplete="on" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite o CPF no formato nnn.nnn.nnn-nn" />
                            <button class="btn btn-lg btn-default btn-signin" type="submit">
                                <span class="fa fa-plus-circle"></span> Criar minha conta
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>