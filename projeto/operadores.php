<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores</title>
</head>
<body>
<?php 
	
	$preco = $_GET["p"];
	echo "O preço do produto é R$ ".number_format($preco, 2).'</br>';
	$preco *= 1.10;
	echo "O novo preço do produto com 10% é: R$ ".number_format($preco, 2);
 ?>
	
</body>
</html>