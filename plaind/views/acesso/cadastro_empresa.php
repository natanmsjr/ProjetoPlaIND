		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb breadcrumb-acesso">
						<li><a href="/"><span class="fa fa-home"></span></a></li>
						<li><a href="/acesso">Acesso</a></li>
						<li class="active">Cadastro</li>
					</ol>
				</div>
			</div>
		
			<?php if(!empty($viewData['msg_alert'])): ?>
			<div class="alert alert-<?php echo $viewData['alert']; ?> alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
				<?php echo $viewData['msg_alert'];?>
			</div>
			<?php endif; ?>
			
			<div class="form-singin-body">
				<div class="column-title">
					<h3 class="wow fadeIn"><i class="fa fa-plus"></i> Novo Cadastro <small data-wow-delay="200ms">Ja tem cadastro? <a href="/acesso">Entre</a></small></h3>
				</div>
				<?php $_SESSION['csrfToken'] = sha1(time().rand(0,999)); ?>
				<form id="add-pessoa" class="form-signin form-horizontal wow fadeIn" data-wow-delay="400ms" data-wow-duration="2s" data-wow-offset="30" method="POST" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="on" action="/acesso/cadastro">
					<input type="hidden" name="csrfToken" value="<?php echo $_SESSION['csrfToken']; ?>" />
					<div class="form-group">
						<div class="col-lg-6">
							<label class="col-lg-12 required" for="nome">Nome / Razão Social</label>
							<div class="col-lg-12">
								<input id="nome" class="form-control" type="text" name="nome" placeholder="Ex.: Airthon" title="Digite a razão social" alt="nome" required>
							</div>
						</div>
						<div class="col-lg-6">
							<label class="col-lg-12 required" for="nome">Pessoa para contato na empresa</label>
							<div class="col-lg-12">
								<input id="nome" class="form-control" type="text" name="nome" placeholder="Ex.: Airthon" title="Digite a razão social" alt="nome" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<label class="col-lg-12 required" for="cnpj">CNPJ</label>
							<div class="col-lg-12">
								<input id="cnpj" class="form-control" type="cnpj" name="cnpj" placeholder="Ex.: 123.456.789-10" title="Digite seu nº do CNPJ" alt="cnpj" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<label class="col-lg-12 required" for="telefone">Telefone</label>
							<div class="col-lg-12">
								<input id="telefone" class="form-control" type="tel" name="telefone" placeholder="Ex.: (79)1234-5678" title="Digite seu nº de telefone" alt="telefone" required>
							</div>
						</div>
					</div>
					<hr class="form-signin-hr">
					<div class="form-group">
						<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
							<label class="col-lg-12 required" for="CEP">CEP</label>
							<div class="col-lg-12">
								<input id="cep" class="form-control" type="cep" name="cep" placeholder="Ex.: 41234-567" title="Digite o nº do CEP" alt="cep" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
							<label class="col-lg-12 required" for="endereco">Endereço</label>
							<div class="col-lg-12">
								<input id="endereco" class="form-control" type="text" name="endereco" placeholder="Ex.: Av. Rio de Janeiro" title="Digite o seu endereço" alt="endereco" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
							<label class="col-lg-12 required" for="numero">Número</label>
							<div class="col-lg-12">
								<input id="numero" class="form-control" type="text" name="numero" placeholder="Ex.: 001 ou s/n" title="Digite o nº do endereço" alt="numero" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<label class="col-lg-12 required" for="complemento">Complemento</label>
							<div class="col-lg-12">
								<input id="complemento" class="form-control" type="text" name="complemento" placeholder="Ex.: Bl A, Ap 4 " title="Digite o complemento" alt="complemento" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<label class="col-lg-12 required" for="bairro">Bairro</label>
							<div class="col-lg-12">
								<input id="bairro" class="form-control" type="cep" name="bairro" placeholder="Ex.: Alphaville" title="Digite o seu bairro" alt="bairro" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<label class="col-lg-12 required" for="cidade">Cidade</label>
							<div class="col-lg-12">
								<input id="cidade" class="form-control" type="text" name="cidade" placeholder="Ex.: Aracaju" title="Digite sua cidade" alt="cidade" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<label class="col-lg-12 required" for="estado">Estado</label>
							<div class="col-lg-12">
								<select class="form-control" name="estado" required>
									<option value="">Selecione...</option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>
						</div>
					</div>
					<hr class="form-signin-hr">
					<div class="form-group">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<label class="col-lg-12 required" for="email">E-mail</label>  
							<div class="col-lg-10">
								<input id="email" class="form-control" type="text" name="email" placeholder="exemplo@exemplo.com.br">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<label class="col-lg-12 required" for="email-confirmacao">Confirmar E-mail</label>  
							<div class="col-lg-10">
								<input id="email" class="form-control" type="text" name="email-confirmacao">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<label class="col-lg-12 required" for="senha">Senha</label>
							<div class="col-lg-10">
								<input id="senha" class="form-control" type="password" name="senha" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<label class="col-lg-12 required" for="senha-confirmacao">Confirmar Senha</label>  
							<div class="col-lg-10">
								<input id="senha" class="form-control" type="password" name="senha-confirmacao" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-button-center col-xs-12 col-sm-8 col-md-6 col-lg-6">
							<div class="col-xs-6 col-sm-8 col-md-8 col-lg-8">
								<button id="cadastrar" name="Cadastrar" class="btn btn-primary2 btn-lg btn-block" type="submite">Cadastrar</button>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
								<button id="cadastrar" name="Redefinir" class="btn btn-default btn-lg btn-block" type="reset">Apagar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			
		</div>	
    </div>