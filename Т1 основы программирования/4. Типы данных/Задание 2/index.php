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
		echo '1) ', 11 + '7', '<br />';
		echo '2) ', '2' + '5', '<br />';
		echo '3) ', 2 + '7 abc', '<br />';
		echo '4) ',2 + 'abc7', '<br />';
		echo '5) ',1 + true+null, '<br />';
		
		echo '6) ', 1+ (int)'abc7', '<br />';
		echo '7) ', '2' + '7abc', '<br />';
		echo '8) ', true + false+true + true, '<br />';
		echo '9) ','8' /'2', '<br />';
		echo '10) ','4.5px'-3, '<br />';
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>