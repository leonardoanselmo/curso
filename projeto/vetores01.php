<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vetores</title>
</head>
<body>
	<pre>
	<?php 

		$v = array("A", "J", "M", "X", "K");
		print_r($v)."<br/>";
		//array_push($v, 9);
		$v[] = 9;
		$v[] = 13;
		
		echo "<br/>";
		array_pop($v);
		array_unshift($v, 2);
		var_dump($v);
		echo "O vetor tem: ".count($v)." elemento <br/>";
		sort($v);
		print_r($v);
		rsort($v);
		print_r($v);
		asort($v);
		print_r($v);

	 ?>
	 </pre>
</body>
</html>