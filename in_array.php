<?php 
include 'membre.php';

$terme = 'php,mysql,apache,html,css';

$termeTableau = explode(',', $terme);


if (in_array('mysql', $termeTableau)) {
	echo 'Formation Mysql';
}

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