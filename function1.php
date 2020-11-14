<?php 
include 'membre.php';

//var_dump($membre);


if (isset($membre)) {
	echo "Tout va bien<br />";
}else{
	echo "Erreur<br />";
}


if (!empty($equipe)) {
	echo "Tout va bien<br />";
}else{
	echo "Tableau est vide<br />";
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