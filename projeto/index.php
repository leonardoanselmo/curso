<?php

	

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		if (!empty($_POST['title']) and !empty($_POST['body']))	{

			include 'src/pages.php';

			$conn = new PDO('mysql:host=localhost;dbname=curso_php', 'root', '');

			$dados['title'] = $_POST['title'];
			$dados['body'] = $_POST['body'];

			create($conn, $dados);
 
		}	

	};

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		Title: <input type="text" name='title'><br>
		Body: <textarea name="body" id="" cols="30" rows="10"></textarea><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>