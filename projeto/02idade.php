<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		$ano = isset($_GET['ano'])?$_GET['ano']:0;
		$nome = isset($_GET['nome'])?$_GET['nome']:"[não informado]";
		$sexo = isset($_GET['sexo'])?$_GET['sexo']:"[sem sexo]";

		$idade = date("Y") - $ano;
		echo "A idade de <strong>$nome</strong> que é $sexo é $idade anos.";

	 ?>
	 <a href="02exercicio.html">voltar</a>
</body>
</html>