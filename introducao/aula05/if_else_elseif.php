<?php

	$var_do_usuario = (isset($_GET['numero'])) ? $_GET['numero'] : 0;	

	if($var_do_usuario > 3){
		echo '<p>Você digitou um número maior que 3.</p>';
	} elseif ($var_do_usuario == 3) {
		echo '<p>Você digitou o número 3.</p>';	
	} else {
		echo '<p>Você digitou um número menor que 3.</p>';
	}

?>