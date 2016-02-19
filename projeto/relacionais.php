<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Relacionais</title>
</head>
<body>
<?php 
	
	$n1 = $_GET['a'];
	$n2 = $_GET['b'];

	$tipo = $_GET['op'];

	echo "Os valores passados foram $n1 e $n2 <br/>";
	$r = ($tipo == 's'?$n1+$n2:$n1*$n2);
	echo "O resultado é $r <br/>";

 ?>
	
</body>
</html>