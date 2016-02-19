<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Somando</title>
</head>
<body>
	<?php 

		function soma($a, $b){
			$s = $a + $b;
			return $s;
		}

		$r = soma(5, 6);
		echo "A soma é: $r <br/>";
	 ?>
</body>
</html>