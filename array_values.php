<?php 
include 'membre.php';

$terme = 'php,mysql,apache,html,css';

$termeTableau = explode(',', $terme);

unset($termeTableau['2']);

var_dump($termeTableau);

$tableau = array_values($termeTableau);

var_dump($tableau);


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


	
</body>
</html>