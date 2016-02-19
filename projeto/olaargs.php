<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ola com Argumentos</title>
</head>
<body>
	<?php 

		function Ola(){

			$argumentos = func_get_args();
			$quantidade = func_num_args();

			for($n=0;$n<$quantidade;$n++){
				echo "Olá ".$argumentos[$n]."<br/>";
			}

		}

		Ola("Leonardo","Débora","Patricia");

	 ?>
</body>
</html>