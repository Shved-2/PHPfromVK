<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Переменные</h2>
	<hr>
	<h2>Все будет правильно, на этом построен мир</h2>
	
	<?php
		// набор переменных сценария
		define ('PINK', array('The Dark Side of The Moon', 'Pink Floyd', '17 марта 1973', 'Harvest, Capitol, EMI',
		'LP, кассета, CD, SACD', 'Платиновый (USA), Платиновый(GBR)'));
		$album = "The Dark Side of The Moon";
		$team = "Pink Floyd";
		$data = "17 марта 1973";
		$label = "Harvest, Capitol, EMI";
		$format = "LP, кассета, CD, SACD";
		$status = "Платиновый (USA), Платиновый(GBR)";
	?>
	<?php

	echo 'album:  '.PINK[0].'<br>';
	echo 'team:  '.PINK[1].'<br>';
	echo 'data:  '.PINK[2].'<br>';
	echo 'label:  '.PINK[3].'<br>';
	echo 'format:  '.PINK[4].'<br>';
	echo 'status:  '.PINK[5];
	 
?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>