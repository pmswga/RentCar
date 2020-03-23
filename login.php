<?php

	require_once "start.php";
	
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
			<div class="header item">RentCar</div>
			<a class="item" href="">Автомобили</a>
			<a class="item" href="">Производители</a>
			<div class="right menu">
				<a class="item" href="">Войти</a>
				<a class="item" href="">Регистрация</a>
			</div>
		</div>
	
		<div class="ui stackable grid">
			<div class="row">
				<div class="three wide column">
				</div>
				<div class="ten wide column">
					<fieldset class="ui segment blue">
						<legend><h3>Вход в систему</h3></legend>
						<form class="ui form">
							<div class="field">
								<label>E-mail</label>
								<input type="email">
							</div>
							<div class="field">
								<label>Пароль</label>
								<input type="password">
							</div>
							<div class="field">
								<input type="submit" value="Войти" class="ui primary button">
							</div>
						</form>
					</fieldset>
				</div>
			</div>
		</div>
		
	</body>
</html>