<?php

	$lista_compras = [
		'Leite',
		'Ovos',
		'Arroz',
		'Carne',
		'Feijão',
		2,
		array(

			'Item 1',
			'Item 2',
			'Item 3'

			)
	 ];

	print_r($lista_compras);
	var_dump($lista_compras);

	$numero1 = 5;
	$numero2 = 6;

	$soma = $numero1 + $numero2;

?>
<pre>
	<?php

		var_dump($lista_compras);

	?>
</pre>

<p>
<?php	
	echo 'A soma é: '.$soma;
?>
<p>
<?php echo $lista_compras[6][2]; ?>
</p>

