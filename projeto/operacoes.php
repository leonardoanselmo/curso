<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operações</title>
</head>
<body>
	<?php 
		$n = isset($_GET['num'])?$_GET['num']:0;
		$o = isset($_GET['oper'])?$_GET['oper']:1;

		switch ($o) {
			case 1:
				$r = $n * 2;
				break;

			case 2:
				$r = pow($n, 3);
				break;

			case 3:
				$r = sqrt($n);
				break;
			
		}
		echo "O resultado da operação foi $r <br/>";

	 ?>
	 <a href="operacoes.html">voltar</a>
</body>

</html>