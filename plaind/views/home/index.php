		<div class="container">
		</div>
		<div class="card card-login col-sm-4 col-md-4 col-lg-3">
			<div class="card-banner card-container wow fadeIn">
				<div class="text-center">
					<h4>Acesse a Plataforma</h4>
				</div>
				<?php $_SESSION['csrfToken'] = sha1(time().rand(0,999)); ?>
				<form class="form-login" method="POST" accept-charset="<?php echo DB_CHARSET; ?>" enctype="application/x-www-form-urlencoded" autocomplete="on" action="/acesso/login">
					<div class="form-group">
						<input type="hidden" name="csrfToken" value="<?php echo $_SESSION['csrfToken']; ?>" />
						<input class="form-control" id="email" type="text"  name="email" placeholder="E-mail" title="Digite o e-mail cadastrado" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required  />
						<input class="form-control" id="senha" type="password" name="senha" placeholder="Senha" title="Digite a senha cadastrada" required />
						<div class="text-forgotpass">
							<a href="/acesso/recuperacao" class="forgot-password">Esqueceu sua senha?</a>
						</div>
						<button class="btn btn-lg btn-primary2 btn-block btn-signin" type="submit">
							Entrar <i class="fa fa-chevron-right"></i>
						</button>
						<h5 class="text-center"><b>OU</b></h5>
						<a href="/acesso" class="btn btn-lg btn-primary btn-block btn-signin">
							<i class="fa fa-plus"></i> Cadastra-se
						</a>
					</div>
				</form>
			</div><!-- /card-container -->
		</div>

		<div class="banner">
			<div class="banner-content">
				<div class="container">
					<div class="banner-text col-xs-12 col-sm-7 col-md-7 col-lg-8">
						<div class="banner-title wow fadeInLeft">
							<h2>
								<p>Inicie</p>
								<p>Acompanhe</p>
								<p>e Gerencie seus processos!</p>
							</h2>
						</div>
						<div class="banner-body wow fadeInLeft" data-wow-delay="300ms">
							<p>
								<h4>Uma forma digital, transparente e prática para o acompanhamento e gerenciamento de suas concessões de direitos em Propriedade Industrial!</h4>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<section id="plataforma">
			<div class="container">
				<div class="section-header">
					<h3 class="section-title text-center wow fadeInUp">A PlaIND é uma plataforma voltada para...</h3>
				</div>
				<div class="section-body">
					<div class="section-body-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-6 wow fadeInUp">
							<img src="/assets/imagens/man.png">
							<h5>
								<b>Inventores / Pesquisadores</b>
							</h5>
							<p class="text-center">
								Acompanhe seus processos de um jeito rápido e transparente
							</p>
						</div>
						
						<div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
							<img src="/assets/imagens/team2.png">
							<h5>
								<b>NITs - Núcleo de Inovação Tecnológica</b>
							</h5>
							<p class="text-center">
								Gerencie os de um jeito fácil e prático
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- serviços -->
		<!-- <section id="servicos" >
			<div class="container">
				<div class="section-header">
					<h2 class="section-title text-center wow fadeInDown">Nossos Recursos</h2>
				</div>
				<div class="section-body">
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="100ms">
							<i class="fa fa-code"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">Sites</h3>
							<p>Sob-medida</p>
						</div>
					</div>
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="200ms">
							<i class="fa fa-newspaper-o"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">Blogs</h3>
							<p>Fale diretamente com seu cliente</p>
						</div>
					</div>
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="300ms">
							<i class="fa fa-desktop"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">Portais</h3>
							<p>100% de foco no público</p>
						</div>
					</div>
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="400ms">
							<i class="fa fa-laptop"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">Hot-site</h3>
							<p>Lance seu produto ou serviço com força total</p>
						</div>
					</div>
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="500ms">
						  <i class="fa fa-shopping-cart"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">E-commerce</h3>
							<p>A melhor maneira de gerar lucros</p>
						</div>
					</div>
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="600ms">
							<i class="fa fa-mobile-phone"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">Aplicativos Mobile</h3>
							<p>Esteja sempre à mão</p>
						</div>
					</div>
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="700ms">
							<i class="fa fa-facebook"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">Mídias Sociais</h3>
							<p>Esteja cada vez mais próximo do seu cliente</p>
						</div>
					</div>
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="800ms">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">E-mail Marketing</h3>
							<p>Potencialize suas campanhas on-line</p>
						</div>
					</div>
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="800ms">
							<i class="fa fa-tasks"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">Sistemas sob Medida</h3>
							<p>Facilitando o seu dia-a-dia</p>
						</div>
					</div>
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="900ms">
							<i class="fa fa-line-chart"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">SEO</h3>
							<p>Maior visibilidade para seu site</p>
						</div>
					</div>
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="1000ms">
							<i class="fa fa-print"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">Materiais offline</h3>
							<p>Expresse sua marca de diversas maneiras</p>
						</div>
					</div>
					<div class="servico col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="servico-icon wow zoomIn" data-wow-duration="200ms" data-wow-delay="1100ms">
							<i class="fa fa-eye"></i>
						</div>
						<div class="servico-content wow fadeInRight">
							<h3 class="servico-title">Identidade Visual</h3>
							<p>Esteja na mente do consumidor</p>
						</div>
					</div>
				</div><!--/.section-body
			</div><!--/.container
		</section><!--/#serviços-->
			
		<section id="servicos">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 wow fadeInLeft">
						<img class="img-responsive" src="../assets/imagens/responsive.png" alt="">
					</div>
					<div class="col-sm-6">
						<div class="wow fadeInRight">
							<h3 class="section-title text-justify wow fadeInUp">Multiplataforma</h3>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="pi" >
			<div class="container">
				<div class="section-header">
					<h2 class="section-title text-center wow fadeInDown">Com o que trabalhamos?</h2>
					<p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>
				<div class="section-body">
					<div class="section-body-body">
						<div class="text-center col-xs-12 col-sm-6 col-md-3 col-lg-3 wow fadeInUp">
							<div class="section-body-box">
								<em>
									<span class="fa fa-area-chart"></span>
								</em>
								<h5>
									<b>Desenho Industrial</b>
								</h5>
								<p class="text-center">
									Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater
								</p>
								<button class="btn btn-primary">Saiba mais</button>
							</div>
						</div>
						<div class="text-center col-xs-12 col-sm-6 col-md-3 col-lg-3 wow fadeInUp">
							<div class="section-body-box">
								<em>
									<span class="fa fa-copyright"></span>
								</em>
								<h5>
									<b>Marca</b>
								</h5>
								<p class="text-center">
									Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater
								</p>
								<button class="btn btn-primary">Saiba mais</button>
							</div>
						</div>
						<div class="text-center col-xs-12 col-sm-6 col-md-3 col-lg-3 wow fadeInUp">
							<div class="section-body-box">
								<em>
									<span class="fa fa-lightbulb-o"></span>
								</em>
								<h5>
									<b>Patente</b>
								</h5>
								<p class="text-center">
									Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater
								</p>
								<button class="btn btn-primary">Saiba mais</button>
							</div>
						</div>
						<div class="text-center col-xs-12 col-sm-6 col-md-3 col-lg-3 wow fadeInUp">
							<div class="section-body-box">
								<em>
									<span class="fa fa-code"></span>
								</em>
								<h5>
									<b>Software</b>
								</h5>
								<p class="text-center">
									Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater
								</p>
								<button class="btn btn-primary">Saiba mais</button>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		</section><!--/#services-->

		<section id="institucional">
			<div class="container">
				<div class="section-header">
					<h2 class="section-title text-center wow fadeInDown">Institucional</h2>
					<p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>

				<div class="row">
					<div class="col-sm-6 wow fadeInLeft">

					</div>              

					<div class="col-sm-6 wow fadeInRight">


					</div>
				</div>
			</div><!--/.container-->
		</section><!--/#institucional-->
		
		<section id="institucional">
			<div class="container">
				<div class="section-header">
					<h2 class="section-title text-center wow fadeInDown">Institucional</h2>
					<p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>

				<div class="row">
					<div class="col-sm-6 wow fadeInLeft">

					</div>              

					<div class="col-sm-6 wow fadeInRight">


					</div>
				</div>
			</div><!--/.container-->
		</section><!--/#institucional-->
		
		<section id="duvidas">
			<div class="container">
				<div class="section-header">
					<h2 class="section-title text-center wow fadeInDown">Dúvidas</h2>
					<p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>

				<div class="row">
					<div class="col-sm-6 wow fadeInLeft">

					</div>              

					<div class="col-sm-6 wow fadeInRight">


					</div>
				</div>
			</div><!--/.container-->
		</section><!--/#institucional-->
		
		<section id="contato">
			<!-- conteúdo da página -->
			<div class="container">
				<div class="section-header">
					<h2 class="section-title text-center wow fadeInDown">Contato</h2>
				</div>
				<div class="section-body">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<form name="sentMessage" id="contactForm" class="form-signin" method="POST" accept-charset="UTF-8" action="#">
							<div class="form-group">
								<input type="text" class="form-control" id="name" placeholder="Nome" required pattern="[A-Za-z]+$" />
								<input type="tel" class="form-control" id="phone" placeholder="Telefone" required pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" />
								<input type="email" class="form-control" id="email" placeholder="E-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
								<textarea rows="10" cols="100" class="form-control" id="message" placeholder="Mensagem" maxlength="999" style="resize:none" required></textarea>
							</div>
							<button type="submit" class="btn btn-default">Enviar Mensagem</button>
						</form>
					</div>
				</div>
			</div><!--/#contato-->
		</section>