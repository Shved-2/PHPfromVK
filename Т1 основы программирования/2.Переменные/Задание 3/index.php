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
		$DolforRub = 78.9;
		$RubforCny = 0.08;

		$count = 1000;

		$rub =  $count * $DolforRub;
		$yen = $rub * $RubforCny;
		echo '1000$ = '.$rub. ' рублей.<br>';
		echo   $rub. ' рублей  ='.$yen.' йен';


		
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>