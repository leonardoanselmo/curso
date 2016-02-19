<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Verifica estados</title>
</head>
<body>
	<?php 

		$uf = isset($_GET['estado'])?$_GET['estado']:"[estado não informado]";

		switch ($uf) {
			case 'PB':
			case 'PE':
			case 'AL':
			case 'MA':
			case 'PI':
			case 'CE':
			case 'SE':
			case 'RN':
			case 'BA':
				echo "Região Nordeste";
				break;

			case 'AM':
			case 'RR':
			case 'AP':
			case 'PA':
			case 'TO':
			case 'RO':
			case 'AC':
				echo "Região Norte";
				break;

			case 'MT':
			case 'MS':
			case 'GO':
				echo "Região Centro-Oeste";
				break;
			
			case 'SP':
			case 'RJ':
			case 'ES':
			case 'MG':
				echo "Região Sudeste";
				break;

			case 'PR':
			case 'RS':
			case 'SC':
				echo "Região Sul";
				break;

			default:
				echo "Capital Federal";
				break;
		}


	 ?>
	 <a href="estados.html">voltar</a>
</body>
</html>