<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vetores</title>
</head>
<body>
	<pre>
	<?php 

		$n = range(5,20,2);
		print_r($n);

		foreach ($n as $valor) {
			echo "$valor ";
		}

		$v = array(
				0=>5,
				1=>2,
				2=>4,
				7=>1
			);
		unset($v[3]);
		unset($v[8]);

		print_r($v);

	 ?>
	 </pre>
</body>
</html>