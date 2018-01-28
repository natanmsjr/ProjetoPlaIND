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
                    <p>Informe uma nova senha para a recuperação de sua conta.</p>
                </div>
				<?php $_SESSION['csrfToken'] = sha1(time().rand(0,999)); ?>
                <form class="form-forgotpass" method="POST" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off" action="/acesso/newPassword">
                    <input type="hidden" name="csrfToken" value="<?php echo $_SESSION['csrfToken']; ?>" />
					<?php if(isset($_GET['h'])): ?> <input type="hidden" name="h" value="<?php echo $_GET['h']; ?>" /> <?php endif; ?>
					<div class="form-group">
						<input id="senha" class="form-control" type="password" name="senha" placeholder="Senha" title="Digite uma senha" autocomplete="off" autofocus required>
					</div>
					<div class="form-group">
						<input id="senha" class="form-control" type="password" name="senha-confirmacao" placeholder="Confirme a senha" alt="senha-confirmacao" title="Digite novamente a senha" autocomplete="off" autofocus required>
					</div>
                    <br />
                    <button class="btn btn-lg btn-primary2 btn-block btn-signin" type="submit" onclick="myFunctio()">
                        <span class="fa fa-edit"></span> Recuperar minha conta
                    </button>
                </form>
            </div>
        </div>
    </div>