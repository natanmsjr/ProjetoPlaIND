	<!-- Conteúdo da página de Login -->
    <div class="container">
	
		<?php if(!empty($viewData['msg_alert'])): ?>
		<div class="alert alert-<?php echo $viewData['alert']; ?> alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			<?php echo $viewData['msg_alert'];?>
		</div>
		<?php endif; ?>
		
		<div class="col-lg-12">
            <div class="login-card col-xs-12 col-sm-5 col-md-5 col-lg-5">
                <div class="text-justifyr">
                    <h3>Acesse a Plataforma</h3>
                    <p>Já tenho cadastro na PlaIND.</p>
                </div>
				<?php $_SESSION['csrfToken'] = sha1(time().rand(0,999)); ?>
                <form id="login" class="form-login" method="POST" accept-charset="<?php echo DB_CHARSET; ?>" enctype="application/x-www-form-urlencoded" autocomplete="on" action="/acesso/logIn">
                    <div class="form-group">
						<input type="hidden" name="csrfToken" value="<?php echo $_SESSION['csrfToken']; ?>" />
                        <input class="form-control" type="text" id="email" name="email" placeholder="E-mail" title="Digite o e-mail cadastrado"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autofocus required />
                        <input class="form-control" type="password" id="password" name="senha" placeholder="Senha" title="Digite a senha cadastrada" required />
                        <div class="text-forgotpass">
                            <a href="/acesso/recuperacao" class="forgot-password">Esqueceu sua senha?</a>
                        </div>
                        <button class="btn btn-lg btn-primary2 btn-signin btn-block" type="submit">
                            Entrar <i class="fa fa-chevron-right"></i> 
                        </button>
                    </div>
                </form>
				<h5 class="text-center">Não consegue acessar sua conta? <a href="/acesso/recuperacao">Aqui.</a></h5>
            </div>

            <div id="linha-vertical" class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                <div class="linha-vertical"></div>
            </div>
			<div id="linha-horizontal" class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                <div class="linha-horizontal"></div>
            </div>

            <div class="singin-card col-xs-12 col-sm-5 col-md-5 col-lg-5">
                <div class="text-justify">
                    <h3>Cadastre-se</h3>
					<p><b>Cadastro pessoa física.*</b></p>
                    <p>Através do cadastro você ficará por dentro das novidades dos seus processos. Poderá acompanhar tecnologias e manter contato com pesquisadores.</p>
                </div>
                <form id="singin-pessoa-fisica" class="form-signin" method="POST" accept-charset="<?php echo DB_CHARSET; ?>" enctype="application/x-www-form-urlencoded"  action="/acesso/cadastro_pessoa">
                    <div class="form-group">
						<input type="hidden" name="csrfToken" value="<?php echo $_SESSION['csrfToken']; ?>" />
						<input id="cpf" class="form-control" name="cpf" type="cpf" placeholder="CPF" title="Digite seu CPF" required />
                        <button class="btn btn-lg btn-primary btn-signin btn-block" type="submit" value="pessoa_fisica">
                            <i class="ion-ios-personadd"></i> Criar minha conta
                        </button>
                    </div>
                </form>
				
				<br/>
				
				<div class="text-justify">
                    <p><b>Cadastro pessoa jurídica.*</b></p>
					<p>Através do cadastro você poderá acompanhar tecnologias e manter contato com pesquisadores.</p>
                </div>
				<form id="singin-pessoa-juridica" class="form-signin" method="POST" accept-charset="<?php echo DB_CHARSET; ?>" enctype="application/x-www-form-urlencoded"  action="/acesso/cadastro_empresa">
					<div class="form-group">
						<input type="hidden" name="csrfToken" value="<?php echo $_SESSION['csrfToken']; ?>" />
						<input id="cnpj" class="form-control" name="cnpj" type="cnpj" placeholder="CNPJ" title="Digite o CNPJ" required />
						<div class="form-group">        
							<button class="btn btn-lg btn-primary btn-signin btn-block" type="submit" value="pessoa_juridica">
								<i class="ion-ios-people"></i> Criar conta
							</button>
						</div>
					</div>
                </form>
            </div>
        </div>
        <div class="text-terms col-xs-12 col-lg-12">
            <p>* Ao cadastrar-se, você aceita nossos <a href="/pagina/termos">Termos de Uso</a>, <a href="/pagina/privacidade">Política de Provacidade</a> <br> e receberá e-mails da PlaIND, contendo novidades e informações.</p>
        </div>
    </div>
</body>
</html>