<?php 
$membre = ['Toto Savann', 24, 1.83];


//Tableau associatif: clé => valeur
$membre2 =[

	'name' 	=> 'Patric Roy',
	'age' 	=> 33,
	'taille'=> 2.85 

];

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<h1><?= 'Salut ' .$membre[0]. ', vous avez ' .$membre[1]. ' ans et vous faites ' .$membre[2]. 'm'  ?></h1>	


<h1><?= 'Salut ' .$membre2['name']. ', vous avez ' .$membre2['age']. ' ans et vous faites ' .$membre2['taille']. 'm'  ?></h1>	

	
</body>
</html>