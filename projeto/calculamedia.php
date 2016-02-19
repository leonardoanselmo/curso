<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calcula média</title>
</head>
<body>
	<?php 

		$n1 = isset($_GET['nota1'])?$_GET['nota1']:"[informe a nota 1]";
		$n2 = isset($_GET['nota2'])?$_GET['nota2']:"[informe a nota 2]";
		$m = ($n1 + $n2)/2;

		if ($m <= 5) {
			$sit = "REPROVADO";
		} elseif ($m>5 && $m<7) {
			$sit = "RECUPERAÇÃO";
		} else {
			$sit = "APROVADO";
		}

		echo "Suas notas foram Nota1: $n1 e Nota2: $n2 <br/>";
		echo "Sua média é: ".number_format($m, 2)."<br/>";		
		echo "Sua situaçao é: $sit <br/>";

	 ?>
	 <a href="calculamedia.html">voltar</a>
</body>
</html>