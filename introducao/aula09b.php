<?php

	$cores = [
		'Azul',
		'Vermelho',
		'Verde',
		'Amarelo'
	];

	$cores[] = 'Preto';
	//print_r($cores);

	$contatos['nome']='Leonardo';
	$contatos['sobrenome']='Anselmo';
	$contatos['email']=array(
		'leonardo_anselmo@hotmail.com',
		'barblo25@yahoo.com.br');

	print_r($contatos).'<br>';
	print_r($contatos['email'][0]).'<br>';

?>