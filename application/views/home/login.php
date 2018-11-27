<link href="assets/css/login.css" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<section class="login-form">
				<form method="post" action="<?php echo base_url() ?>login" role="login">
					<div class="text-center">
						<h3>Portal Dacom</h3>
					</div>
					<input type="text" name="username" placeholder="Usuário" required class="form-control input-lg" />
					<input type="password" name="password" class="form-control input-lg" placeholder="Senha" required />
					<div class="text-center">
						<span class="warning">
							<?php echo $text ?>
						</span>
					</div>
					<button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Login</button>
				</form>
			</section>
		</div>
	</div>
</div>