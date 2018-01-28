    <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb breadcrumb-acesso">
					<li><a href="/"><span class="fa fa-home"></span></a></li>
					<li><a href="/acesso">Acesso</a></li>
					<li class="active">Recuperação de Acesso</li>
				</ol>
			</div>
		</div>
		
		<?php if(!empty($viewData['msg_alert'])): ?>
		<div class="alert alert-<?php echo $viewData['alert']; ?> alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			<?php echo $viewData['msg_alert'];?>
		</div>
		<?php endif; ?>
		
        <div class="col-lg-12">
            <div class="card-forgotpass col-lg-5">
                <div class="text-justify">
                    <h3>Recupere seu acesso</h3>
                    <p>Identifique-se para receber um e-mail com as instruções e o link para criar uma nova senha.</p>
                </div>
				<?php $_SESSION['csrfToken'] = sha1(time().rand(0,999)); ?>
                <form class="form-forgotpass" method="POST" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="on" action="/acesso/forgotPassword">
                    <input type="hidden" name="csrfToken" value="<?php echo $_SESSION['csrfToken']; ?>" />
					<div class="form-group">
                        <input class="form-control" id="email" type="email" name="email" placeholder="E-mail" title="Digite o e-mail cadastrado" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autofocus required>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary2 btn-block btn-signin" type="submit">
                        <span class="fa fa-edit"></span> Recuperar minha conta
                    </button>
                </form>
            </div>
        </div>
    </div>