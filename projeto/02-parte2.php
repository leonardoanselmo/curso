<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		$i = 1;
		while ($i <= 5) {
			$v = "num".$i;
			$url = "v".$i;
			$$v = isset($_GET[$url])?$_GET[$url]:0;
			$i++;
		}

		$i=1;
		while ($i <= 5) {
			$v = "num".$i;
			echo "Valor $i: ".$$v."<br/>";
			$i++;
		}


	 ?>
	 <a href="02-parte1.php">voltar</a>

</body>
</html>