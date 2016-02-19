<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agenda de Contatos</title>
</head>
<body>
	<?php 

		$contatos = array("Leonardo Anselmo"=>array("e-mail"=>"leonardo_anselmo@hotmail.com", "fone"=>"(87) 9.9993-1184"),
						  "Patricia Anselmo"=>array("e-mail"=>"patricia_anselmo08@hotmail.com", "fone"=>"(87) 9.9607-2716"));


		$contatos['Debora Anselmo']['e-mail']='deboraanselmo@hotmail.com';
		$contatos['Debora Anselmo']['fone']='(87) 9.9988-6525';
		

		//sort($contatos);
		print_r(array_keys($contatos));
		echo "<br/>";

		$quantidade = count($contatos);
		echo "$quantidade <br/>";

		foreach ($contatos as $nomes => $nome) {
			echo "Contato: $nomes <br/>";
			foreach ($nome as $informacoes => $valor) {
				echo "$informacoes: $valor <br/>";
			}
		}


	 ?>
</body>
</html>