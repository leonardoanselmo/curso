<pre>
<?php
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$title = $_POST['title'];
		$body = $_POST['body'];
		if(empty($title) or empty($body)){
			echo 'Preencha todos os campos.';
		} else {
			if(mail('leonardo_anselmo@hotmail.com', $title, $body)){
				echo 'Sucesso.';
			} else {
				echo 'Falhou';
			}
			
		}		

	};
	
?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulário no PHP</title>
</head>
<body>
	<form action="aula10.php" method="POST">
		<input type="text" name="title">
		<input type="text" name="body">
		<input type="submit" value="Enviar">		
	</form>
	
</body>
</html>