<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Printf</title>
</head>
<body>
	<?php 

		$p = "Leite";
		$pr = 4.5;

		echo "O $p custa R$ ".number_format($pr,2);
		printf("<p> O %s custa R$ %.2f", $p, $pr);

		echo "<br/>";

		$x[0]=2;
		$x[1]=4;
		$x[2]=8;

		print_r($x);

		echo "<br/>";

		$v2 = array(3,4,6,7,2,9,2);
		print_r($v2);

		echo "<br/>";
		var_dump($v2);
		echo "<br/>";
		var_export($v2);
		echo "<br/>";
		$txt = "    Aqui temos um texto gigante criado pelo PHP que vai mostrar o funcionamento da funcao wordwrap";
		$q = wordwrap($txt, 15, "<br/>");
		echo $q."<br/>";
		echo strlen($txt)."<br/>";
		echo trim($txt)."<br/>";
		echo str_word_count($txt, 0);
		echo "<br/>";
		echo strtolower($txt);
		echo "<br/>";
		echo strtoupper($txt);
		echo "<br/>";
		$nome = "leonardo anselmo";
		echo ucfirst($nome);
		echo "<br/>";
		echo ucwords($nome);
		echo "<br/>";
		echo strrev($nome);
		echo "<br/>";
		echo strpos($nome, "anselmo");
		echo "<br/>";
		echo substr_count($nome, "a");
		$novonome = str_replace("anselmo", "de Freitas Anselmo", $nome);
		echo "<br/>";
		echo $novonome;

	 ?>
</body>
</html>