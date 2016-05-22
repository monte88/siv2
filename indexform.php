<?php 
require_once 'const.inc.php'; // подключаем файл с константами


$mysqli = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME); 
if ($mysqli->connect_error) { 
die('Ошибка подключения (' . $mysqli->connect_errno . ') ' 
. $mysqli->connect_error); 
} 
else 
echo "Ura Suka"; 




?> 



<!DOCTYPE html> 
<html> 
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">

<title>Портал СіВ відділу</title> 
<meta charset="UTF-8"> 
</head> 
<body> 
<div class="main"> 
	

	<div class="menu"> 
		<ul class="mainMenu"> 
			<li><a href="#">Главная</a></li> 
			<li><a href="#">Картриджи</a></li> 
			<li><a href="#">Отчеты</a></li> 
			<li><a href="#">Склад</a></li> 
		</ul> 
	</div> 
	<div>

	<?php 

		$sqlddd = "SELECT `id_oper`, `id_patron`, `model_patron`, `date_ust`, `date_snyat`, `date_otpr`, `date_back` FROM `history` WHERE `id_oper` IS NULL"; 
		$abs = $mysqli->query($sqlddd); 

		foreach ($abs as $key=>$value) { 

		echo "<input type = 'text' size=5 value = '". $value['id_oper'] . "'>";
		echo "<input type = 'text' size=5 value = '". $value['id_patron'] . "'>"; 
		echo "<input type = 'text' size=5 value = '". $value['model_patron'] . "'>"; 
		echo "<input type = 'text' size=5 value = '". $value['date_ust'] . "' >"; 
		echo "<input type = 'text' size=5 value = '". $value['date_snyat'] . "'>"; 
		echo "<input type = 'text' size=5 value = '". $value['date_otpr'] . "'>"; 
		echo "<input type = 'text' size=5 value = '". $value['date_back'] . "'><br>"; 
		 

		}
	?>
	</div>

</div> 

</body>
</html>



