<?php

	require_once "start.php";
	
	if (!empty($_POST['loginButton'])) {
		
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		//check user in database
		
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Вход</title>
		<meta charset="utf8">
		<link rel="stylesheet" type="text/css" href="css/semantic.css">
		<script type="text/javscript" src="css/semantic.js"></script>
		<script type="text/javscript" src="js/jquery.js"></script>
	</head>
	<body>
	
		<div class="ui pointing menu">
			<a class="header item" href="index.php">RentCar</a>
			<a class="item" href="">Автомобили</a>
			<a class="item" href="">Производители</a>
			<div class="right menu">
				<a class="item" href="login.php">Войти</a>
				<a class="item" href="reg.php">Регистрация</a>
			</div>
		</div>
	
		<div class="ui stackable grid">
			<div class="row">
				<div class="three wide column">
				</div>
				<div class="ten wide column">
					<fieldset class="ui segment blue">
						<legend><h3>Вход в систему</h3></legend>
						<form class="ui form" method="POST">
							<div class="field">
								<label>E-mail</label>
								<input type="email" name="email" required>
							</div>
							<div class="field">
								<label>Пароль</label>
								<input type="password" name="pass" required>
							</div>
							<div class="field">
								<input type="submit" name="loginButton" value="Войти" class="ui primary button">
							</div>
						</form>
					</fieldset>
				</div>
			</div>
		</div>
		
	</body>
</html>