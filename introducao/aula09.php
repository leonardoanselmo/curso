<?php

	$nome = 'Leonardo Anselmo';
	$variavel = "Texto que quisermos $nome";


	echo strtolower($variavel).'<br>';
	echo strtoupper($variavel).'<br>';
	echo substr($variavel, 0, 5).'<br>';
	echo substr($variavel, 20, 20).'<br>';
	echo str_pad($variavel, 40, '*', STR_PAD_BOTH).'<br>';
	echo str_repeat('***.', 5).'<br>';
	echo strlen($variavel).'<br>';
	echo str_replace('que', 'aonde', $variavel).'<br>';
	echo strpos($variavel, 'que').'<br>';

?>