<?php 

include 'membre.php';

//mail(to, subject, message);
$headers  = 'From: info@gmail.com' . "\r\n";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8';

mail('info@gmail.com', 'Question par rapport à...', '<h1>Quel est le prix des voitures?</h1>', $headers);
//pour afficher un format HTML dans l'envoie du courriel avec les balises '<h1>, <p>, etc.'
//changer le php.ini si ça marche pas et repartir Apache et Mysql

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

Test
	
</body>
</html>