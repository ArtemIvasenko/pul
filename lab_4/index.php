<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Система - производство пластиковых изделий</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header>
		<h1>ИЗДЕЛИЯ ИЗ ПЛАСТИКА</h1>
	</header>
	<nav>
		<ul>
			<li><a href="index.php">Гланая</a></li>
			<li><a href="index.php?id=uslugi">Услуги</a></li>
			<li><a href="index.php?id=about">О компании</a></li>
			<li><a href="index.php?id=reviews">Гостевая книга</a></li>
		</ul>
	</nav>
	<div class="container">
		<?php include 'routing.php';?>
	</div>

	<footer>
		<div class="adress">Наш адрес: Москва, ул. Тверская, дом 54.</div>
		<div class="phone">+7(999) 888-77-66</div>
	</footer>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>