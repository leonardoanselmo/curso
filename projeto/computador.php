<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testando uma classe computador</title>
</head>
<body>
	<?php 

		/**
		* 
		*/

		include "biblioteca.php";

		define("MAXIMO_CLIENTES", 100);
		echo MAXIMO_CLIENTES."<br/>";

		class Computador
		{
			var $cpu;

			function ligar()
			{
				echo "Ligando o computador a {$this->cpu} <br/>";
			}
		}

		$obj = new Computador;
		$obj->cpu="500GHz";
		$obj->ligar();

		$vai_chover = TRUE;
		$esta_frio = FALSE;

		if ($vai_chover xor $esta_frio) {
			echo "nao vou sair de casa <br/>";
		}

		$fruta = array("maça", "pera", "laranja", "mamão");
		foreach ($fruta as $valor) {
			echo "$valor- ";
		}

		echo "<br/> ".quadrado(2);

		echo "<br/>".calcula_obesidade(80, 1.83);

	 ?>
</body>
</html>