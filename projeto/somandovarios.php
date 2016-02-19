<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Somando varios paramentros</title>
</head>
<body>
	<?php 

		function soma(){

			$p = func_get_args();
			$t = func_num_args();
			$s = 0;
			for ($i=0; $i < $t; $i++) { 
				$s += $p[$i];
			}

			return $s;

		}

		$r = soma(3,3,3,3);
		echo "A soma é: $r <br/>";

	 ?>

</body>
</html>