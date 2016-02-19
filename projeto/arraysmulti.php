<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays multidimensionais</title>
</head>
<body>
	<?php 

		$carros = array("Palio"=>array("cor"=>"azul", "potencia"=>"1.0","opcionais"=>"Ar cond."),
						"Corsa"=>array("cor"=>"cinza", "potencia"=>"1.3", "opcionais"=>"MP3"),
						"Gol"=>array("cor"=>"branco", "potencia"=>"1.0", "opcionais"=>"metalica"));

		foreach ($carros as $modelo => $caracteristicas) {
			echo "=> modelo $modelo <br/>";
			foreach ($caracteristicas as $caracteristica => $valor) {
				echo "caracteristica $caracteristica => $valor <br/>";
			}
		}

	 ?>
</body>
</html>