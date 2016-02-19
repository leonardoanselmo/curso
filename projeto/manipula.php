<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manipulação de Objetos</title>
</head>
<body>
	<pre>
	<?php 

		class Funcionario{

			var $codigo;
			var $nome;
			var $salario = 878;
			var $departamento = "Contabilidade";

			function getSalario(){}
			function setSalario(){}
			function getNome(){}
			function setNome(){}

		}
		
		$oFunc = new Funcionario;
		$oFunc->codigo = 234;
		$oFunc->nome = 'Leonardo Anselmo';
		$oFunc->salario = 2345.00;
		$oFunc->departamento = 'TI';

		print_r(get_class_methods("Funcionario"));
		print_r(get_class_vars("Funcionario"));
		print_r(get_object_vars($oFunc));
		echo get_class($oFunc)."<br/>;
		if (method_exists($oFunc, 'getNome')) {
			echo "O metodod getNome existe na classe Funcionario";
		}

	 ?>
	 </pre>
</body>
</html>