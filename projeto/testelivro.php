<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exemplos do Livro</title>
</head>
<body>
	<?php 

		echo  'a','b','c','d'."<br/>";

		$a = 5;
		$b = &$a;
		$b = 10;
		echo "a $a <br/>";
		echo "b $b <br/>";

		$exibir_nome = true;

		if ($exibir_nome) {
			echo "Leonardo Anselmo <br/>";
		}

		$umidade = 91;
		$vai_chuver = ($umidade > 90);

		if ($vai_chuver) {
			echo "Está chuvendo <br/>";			
		}

		$carros = array("Golf",'Corsa',"Del Rey");
		echo $carros[0]."<br/>";

	 ?>
</body>
</html>