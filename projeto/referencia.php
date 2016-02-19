<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Referência</title>
</head>
<body>
<?php 
	$a = 3;
	$b = &$a;
	$b += 5;
	echo "A variavel a vale: $a".'</br>';
	echo "A variavel b vale: $b";

 ?>
	
</body>
</html>