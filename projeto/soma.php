<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Soma entre números</title>
</head>
<body>
<?php 
	
	$numero1 = $_GET['a'];
	$numero2 = $_GET['b'];

	$soma = $numero1 + $numero2;

	echo "A soma entre $numero1 e $numero2 é: $soma<br>";
	echo "A soma vale: ".($numero1+$numero2).'<br>';
	echo "A subtração vale: ".($numero1-$numero2).'<br>';
	echo "A multiplicação vale: ".($numero1*$numero2).'<br>';
	echo "A divisao vale: ".($numero1/$numero2).'<br>';
	echo "O módulo vale: ".($numero1%$numero2).'<br>';


 ?>
	
</body>
</html>