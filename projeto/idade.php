<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Verificando a idade</title>
</head>
<body>
	<?php 

		$ano = $_GET['an'];
		$idade = 2016 - $ano;
		echo "Quem nasceu em $ano tem a idade de $idade <br/>";
		$tipo = ($idade >=18 && $idade<65?"Obrigatório":"Não obrigatório.");
		echo "O seu voto é: $tipo";

	 ?>
</body>
</html>