<?php

	$cores = array(

		'Azul',
		'Laranja',
		'Verde',
		'Vermelho',
		'Rosa',
		'Amarelo',
		'Burro quando foge',
		'Marrom'

	);

	$total = count($cores);

?>

<p>for</p>

<?php

	for($i=0; $i<$total; $i++){
		echo $i.' '.$cores[$i].'<br>';
	}

?>