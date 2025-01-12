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

		// вывод строковых данных в HTML-поток
		$num1 = 952;
		$del1 = 4;
		$num2 = 476;
		$del2 =7;
		$mnozyh =3;
		$summ = 196;


		$reslt=($num1/$del1)* $mnozyh-($num2/$del2)+$summ;

		echo 'результат выражения (952 / 4) * 3 - (476 / 7) + 196  = '.$reslt;
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>