<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Типы данных</h2>
	<hr>
	<h2>Слабая типизация</h2>
	
	<?php
		$VarStr = 'Слабая типизация PHP';

		const CONSTSTR = 'Слабая типизация PHP';

		define("ARRSTR", array('Слабая типизация PHP'));

		var_dump($VarStr); // string(35)

		echo "<p>";

		var_dump(CONSTSTR); // string(35)

		echo "<p>";

		var_dump(ARRSTR[0]); // string(35)
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>