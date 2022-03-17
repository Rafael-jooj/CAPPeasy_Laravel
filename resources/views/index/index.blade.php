	<!DOCTYPE html>
	<html>
	<head>  
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/login.css">

		<title>login</title>
		 

	</head>
	<body>
		<form class="form-signin" action="logar.php" method="POST">
		<div class="fundo">
			<div class="box">
				<div class="container">
					<div class="row">
						<div class="col-md-6 d-none d-lg-block">
							<img class="img" src="imagens/cappeasy.png"> 
						</div>
						<div class="col-md-6 d-flex">
						<div class="align-self-center">
							<h2 class="titulo">Entre com sua conta</h2>
							<form>
							<div>
								<input class="email" type="email" name="email" placeholder="E-mail" required> 
							</div>
							<div>
								<input class="senha" type="password" name="senha" placeholder="Senha" required> 
							</div>
							<input class="submit" type="submit" value="Login">
							</form>
							<p><a class="linksenha" href="#">Esqueceu a senha?</a></p>
							<hr>
							<!-- <div class="input-group-append">
								<button type="button" class="btn btn-primary">Cadastre-se</button>
							</div> -->
							<p> <a href="cadastro.php">Não possui conta? Crie sua conta</a></p>
										
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		</form>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>