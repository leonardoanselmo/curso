<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funções Aritméticas</title>
</head>
<body>
<?php 
	
	$v1 = $_GET['x'];
	$v2 = $_GET['y'];

	echo "Valores recebidos de v1: $v1 e v2: $v2.<br>";
	echo "O valor absoluto de $v2 é: ".abs($v2).'<br>';
	echo "O valor de $v1<sup>$v2</sup> é: ".pow($v1, $v2).'<br>';
	echo "A raiz quadrada de $v1 é: ".sqrt($v1).'<br>';
	echo "O valor arredondado de $v1 é: ".round($v1).'<br>';
	echo "O valor inteiro de $v1 é: ".intval($v1).'<br>';
	echo "O valor de $v1 em moeda é: R$ ".number_format($v1, 2, ",", ".").'<br>';

 ?>
	
</body>
</html>