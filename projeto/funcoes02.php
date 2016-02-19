<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funcoes PHP</title>
</head>
<body>
	<?php 

		$nome = "Leonardo Anselmo";
		echo strtoupper($nome)."<br/>";
		echo strtolower($nome)."<br/>";
		echo substr($nome, 0, 9)."<br/>";
		echo str_pad($nome, 30, "*")."<br/>";
		echo str_pad($nome,30, "*", STR_PAD_LEFT)."<br/>";
		echo str_pad($nome, 30, "*", STR_PAD_BOTH)."<br/>";
		echo str_repeat(" ".$nome, 5)."<br/>";
		echo strlen($nome)."<br/>";
		echo str_replace("Anselmo", "Freitas Anselmo", $nome)."<br/>";
		echo $nome."<br/>";
		echo "Está na posição: ".strpos($nome, "Anselmo")." Anselmo."."<br/>";

	 ?>
</body>
</html>