<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculando a média</title>
</head>
<body>
	<?php 

		$nota1 = $_GET['n1'];
		$nota2 = $_GET['n2'];
		$m = ($nota1+$nota2)/2;
		echo "A média entre $nota1 e $nota2 é: $m <br/>";
		$sit = ($m<6?"Reprovado":"Aprovado");
		echo "A situação do aluno é: $sit";


	 ?>
</body>
</html>