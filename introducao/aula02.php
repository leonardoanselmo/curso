<?php

	$nome = 'Leonardo';
	$sobrenome = 'Anselmo';

	echo '<h1>'.'<strong>'.$nome.' '.$sobrenome.'</strong>'.'</h1>';

	$nome_completo = $nome;
	$nome_completo .= ' ';
	$nome_completo .= $sobrenome;

	echo $nome_completo.'</br>';
	print $nome_completo;

?>
