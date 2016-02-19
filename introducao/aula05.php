<?php

	define('DS', DIRECTORY_SEPARATOR);

	$arquivo = (isset($_GET['arquivo'])) ? $_GET['arquivo'] : '';
	
	switch ($arquivo) {
		case 'if_else_elseif':
			include 'aula05'.DS.'if_else_elseif.php';
			break;

		case 'switch':
			include 'aula05'.DS.'switch.php';
			break;

		case 'for':
			include 'aula05'.DS.'for.php';
			break;

		case 'foreach':
			include 'aula05'.DS.'foreach.php';
			break;

		case 'while':
			include 'aula05'.DS.'while.php';
			break;
		
		default:
			echo 'Informe uma página';
			break;
	}

?>

<ul>
	<li><a href='aula05.php?arquivo=if_else_elseif'>else_if</a></li>
	<li><a href='aula05.php?arquivo=switch'>switch</a></li>
	<li><a href='aula05.php?arquivo=for'>for</a></li>
	<li><a href='aula05.php?arquivo=foreach'>foreach</a></li>
	<li><a href='aula05.php?arquivo=while'>while</a></li>
</ul>
