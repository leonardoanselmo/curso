<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Retorna um fatorial</title>
</head>
<body>
	<?php 

		function fatorial($numero){
			if ($numero == 1) {
				return $numero;
			} else {
				return $numero * fatorial($numero -1);
			}
		}

		echo fatorial(5)."<br/>";
		echo fatorial(19);


	 ?>
</body>
</html>