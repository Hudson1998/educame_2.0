<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!-- font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;0,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/login.css">
	<title>Document</title>
</head>
<body>
	<?php
	include('db_contaus.php');
	if($_POST){
		$email =  $_POST['usuario'];
		$senha = $_POST['senha'];
		$sql = new db_contaus();
		$verdade = $sql->facaLogin($email,$senha);
		if($verdade){
			header('Location: inicio.php');
		}
	}
	?>
	<div id="container">
		<div class="content">
			<form method="POST">
				<div class="form-group user">
					<label for="exampleInputEmail1">Usuario</label>
					<input name="usuario" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user@user.com">
					<small id="emailHelp" class="form-text text-muted">Digite seu email de usuario</small>
				</div>
				<div class="form-group pass">
					<label for="exampleInputPassword1">Senha</label>
					<input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
				</div>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">lembrar</label>
				</div>
				<button type="submit" class="btn btn-primary btnLogin">Entrar</button>
			</form>
		</div>
	</div>
</body>
</html>