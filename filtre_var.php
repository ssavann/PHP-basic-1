<?php 
include 'membre.php';

$email = 'info@gmail.com';
$email2 = 'infogmail.com';


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo 'Votre adresse email est valide';
}else{
	echo 'Votre adresse email est invalide';
}

echo '<br />';

if (filter_var($email2, FILTER_VALIDATE_EMAIL)) {
	echo 'Votre adresse email est valide';
}else{
	echo 'Votre adresse email est invalide';
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