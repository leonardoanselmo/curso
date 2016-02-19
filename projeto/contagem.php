<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contagem</title>
</head>
<body>
	<?php 

		$i = isset($_GET['inic'])?$_GET['inic']:0;
		$f = isset($_GET['fim'])?$_GET['fim']:0;
		$v = isset($_GET['inc'])?$_GET['inc']:0;

		if ($i < $f) {
			while ($i <= $f) {
				echo "$i ";
				$i += $v;
			}
		} else {			
			while ($i >= $f) {
				echo "$i ";
				$i -= $v;
			}
		}
		

	 ?>
	 <a href="contagem.html">voltar</a>
</body>
</html>