<?php

	function quilometragem($qtd=0, $un_md='km'){		
		static $total;
		$total += $qtd;

		$validacao = ['m','km'];
		if(in_array($un_md, $validacao))
			return $total.' '.$un_md.'<br>';
		return false;
	}

	$m = quilometragem(100, 'km');
	$m1 = quilometragem(200, 'cm');
	echo $m;
	echo $m1;
	quilometragem(150, 'm');
	quilometragem(80, 'cm');
	$total=0;
	quilometragem(120, 'T');
	quilometragem(180, 'Kg');
	quilometragem();

?>