<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VAlor por referencia</title>
</head>
<body>
	<?php 

		function teste(&$x){
			$x += 2;
			echo "O Valor de X é: $x <br/>";
		}

		$a = 3;
		teste($a);
		echo "O Valor de A é: $a ";

	 ?>
</body>
</html>