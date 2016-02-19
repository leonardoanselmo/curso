<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funções com Arryas</title>
</head>
<body>
	<?php 

		$cores = array("vermelho", "amarelo", "azul", "preto");
		print_r($cores);
		echo "<br/>";
		$cores[] = "verde";
		print_r($cores);
		$cores[9] = "marrom";
		echo "<br/>";
		print_r($cores);
		echo "<br/>";
		echo $cores[2]."<br/>";

		$pessoa["nome"] = "Leonardo Anselmo";
		$pessoa["endereco"] = "Av. Pedro Cavalcante, 223";
		$pessoa["bairro"] = "Heliopolis";
		var_dump($pessoa);
		echo "<br/>";
		foreach ($cores as $cor) {
			echo "$cor <br/>";
		}

		foreach ($pessoa as $chave => $pessoas) {
			echo "$chave: $pessoas <br/>";
		}

		$minha_multa["carro"] = "Pálio";
		$minha_multa["valor"] = 178.00;

		print_r($minha_multa);

		$minha_multa["carro"] .= " ED 1.0";
		$minha_multa["valor"] += 20;

		var_dump($minha_multa);

	 ?>
</body>
</html>