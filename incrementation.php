<?php 
$membre2 =[

	'name' 	=> 'Patrick Roy',
	'age' 	=> 33,
	'taille'=> 2.85 

];

$name = $prenom ?? $membre2['name'] ?? 'Patrick';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Incrementation</title>
</head>
<body>

<?php //$membre2['age']++; ?>		<!-- équivaut à $membre2['age'] + 1 = 33 + 1 = 34 -->

<?php $membre2['age']+= 1; ?>	<!-- équivaut à $membre2['age'] + 1 = 34 + 1 = 35 -->

<?= $membre2['age'];  ?>

	
</body>
</html>