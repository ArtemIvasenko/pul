<?php
	$id = null;
	// Получение id страницы с помощью метода GET и фильтрация данных
	$id = $_GET['id'];
	//Проверка на содержимое переменной $id
	switch($id){
	   case 'about': include 'inc/about.inc.php';  break;
	   case 'uslugi':   include 'inc/uslugi.inc.php';    break;
	   case 'reviews':   include 'inc/reviews.inc.php';    break;

	   default: include 'inc/index.inc.php';
	}
 ?>