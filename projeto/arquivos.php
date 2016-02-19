<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manipulacao de arquivos</title>
</head>
<body>
	<?php 

		$arq = fopen("teste.txt", "r");
		while (!feof($arq)) {
			$buffer = fgets($arq, 4096);
			echo $buffer;
		}
		//file_put_contents("/Applications/XAMPP/xamppfiles/htdocs/curso/projeto/teste.txt", "Freitas");
		echo file_get_contents("/Applications/XAMPP/xamppfiles/htdocs/curso/projeto/teste.txt")."<br/>";
		$arq1 = file("teste.txt");
		var_dump($arq1);
		fclose($arq);

		if (file_exists("texto.txt")) {
			echo "Arquivo existe \n";
		} else {
			echo "Arquivo não existe. \n";
		}
		//echo "<br/>";
		echo getcwd();
		echo "<br/>";
		$nome = "Leonardo \n";
		echo "{$nome} ";
		echo "{$nome} ";


	 ?>
</body>
</html>