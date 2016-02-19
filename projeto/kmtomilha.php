<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Km para Milha</title>
</head>
<body>
	<?php 

		$total = 0;
		function km2mi($quilometros){

			global $total;
			$total += $quilometros;
			return $quilometros * 0.6;

		}

		echo "percorreu ".km2mi(100)." milhas <br/>";
		echo "percorreu ".km2mi(200)." milhas <br/>";
		echo "percorreu no total $total milhas";

	 ?>
</body>
</html>