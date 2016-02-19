<?php

	
	function create($conn, $dados){
		$insert = $conn->prepare('INSERT INTO pages (title, body, slug) VALUES (:title, :body, :slug);');
		$insert->bindValue(':title', $dados['title'], PDO::PARAM_STR);
		$insert->bindValue(':body', $dados['body'], PDO::PARAM_STR);
		$insert-> bindValue(':slug', slug($dados['title']), PDO::PARAM_STR);
		return $insert->execute();
	}

	function read($conn, $slug=null){
		$select = $conn->prepare('SELECT * FROM pages WHERE slug=:slug;');		
		$select->bindValue(':slug', $slug, PDO::PARAM_STR);
		$select->execute();
		return $select->fetch();
	}

	function update($conn, $dados, $id){
		$update = $conn->prepare('UPDATE pages SET title=:title, body=:body, slug=:slug) WHERE id=:id;');
		$update->bindValue(':title', $dados['title'], PDO::PARAM_STR);
		$update->bindValue(':body', $dados['body'], PDO::PARAM_STR);
		$update->bindValue(':slug', slug($dados['title']), PDO::PARAM_STR);
		$update->bindValue(':id', $id, PDO::PARAM_INT);
		return $update->execute();
	}

	function delete($conn, $id){
		$delete = $conn->prepare('DELETE FROM pages WHERE id=:id;');		
		$delete->bindValue(':id', $id, PDO::PARAM_INT);
		return $delete->execute();
	}

	function slug($title){
		$slug = strtolower($title);
		$slug = preg_replace('/[^a-z0-9]\ -/', '', $slug);
		$slug = preg_replace('/[ ]/', '-', $slug);
		return $slug;
	}


?>