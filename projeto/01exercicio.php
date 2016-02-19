<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		$a = isset($_GET["ano"])?$_GET["ano"]:1900;
		$i = date("Y") - $a;
		echo "Você nasceu em $a e terá $i anos. <br/>";
		if ($i < 16) {
			$tipoVoto = "não vota";
		} elseif (($i >=16 && $i < 18) || ($i > 65)){
				$tipoVoto = "voto opcional";
		} else {
				$tipoVoto = "voto obrigatório";
		}		
		echo "Com essa idade você $tipoVoto";

	 ?>
	 <a href="01exercicio.html">voltar</a>
</body>
</html>