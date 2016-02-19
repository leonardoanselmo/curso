<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dia da semana</title>
</head>
<body>
	<?php 
		$d = isset($_GET['ds'])?$_GET['ds']:0;
		switch ($d) {
			case '2':
			case '3':
			case '4':
			case '5':
			case '6':
				echo "Levanta e vai estudar ! :)";
				break;

			case '7':
			case '8':
				echo "Pode dormir !!!";
				break;
			default:
				echo "Dia da semana inválido";
		}

	 ?>
	 <a href="diadasemana.html">voltar</a>
</body>
</html>