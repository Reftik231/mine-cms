<?php

include 'config.php';

$info = mysqli_query($conn, 'SELECT `h1`, `text1`,`text2`  FROM `settings`');
while ($result = mysqli_fetch_array($info)) {
	$project_name=$result['h1'];
	$text1=$result['text1'];
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $project_name ?></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icoc" href="images/logo.png">
	<script src="js/monitor.js"></script>
</head>

<div class="head">
	<a class="logo-txt" href="/"><?php echo $project_name ?></a>
	<a class="head-txt" href="/">Главная</a>
	<a class="head-txt" href="/">Как играть?</a>
	<a class="head-txt" href="/">Правила</a>
	<a class="head-txt" href="/">Магазин</a>
</div>
<body>

<div class="before">
	<img class="before-png" src="images/logo.png">
	<div class="before-txt">
		<h1><?php echo $project_name ?></h1>
		<div class="stat-server-block">
			<a class="stat-server1">Статус:<span id="server-status">Загрузка...</span></a>
			<a class="stat-server2">Онлайн:<span id="players-online">Загрузка...</span></a>
			<a class="stat-server3">Версия:<span id="server-version">Загрузка...</span></a>
		</div>
		<div class="server-info">
			<a><?php echo $text1 ?></a>
		</div>
		<a href="">Играть</a>
	</div>
</div>

</body>
</html>