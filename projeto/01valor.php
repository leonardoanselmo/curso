<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valor digitado</title>
</head>
<body>
	<?php 

		$valor = $_GET['v'];
		$rq = sqrt($valor);
		echo "A raiz quadrada de $valor é: ".number_format($rq, 2)."<br/>";

	 ?>
	 <a href="formulario.html">voltar</a>
	
</body>
</html>