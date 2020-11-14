<?php 
$name = 'Steven Sil';
$name = 'Jean Dupond';

define('NAME', 'Steven Sil');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<h1><?= 'Salut ' .$name. ' !';  ?></h1>		<!-- une variable dont la valeur peut changer -->
<h1><?= 'Salut ' .NAME. ' !';  ?></h1>		<!-- une constante dont la valeur ne changera pas -->

	
</body>
</html>