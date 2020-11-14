<?php 

include 'membre.php';

$date = date_create('2020-11-07T15:32:25');

$date = date_format( $date, 'j/n/Y à H:i');		// ça donne 7/11/2020 à 15:32

echo $date;

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