<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Categorias</title>
</head>
<body>
	<?php
		$jsonString = file_get_contents('categorias.json');
		$categorias = json_decode($jsonString,true);
		
		foreach ($categorias as $cat):
			echo("<input type='checkbox' name='cat_$cat[id]' id='cat_$cat[id]'>");
			echo("<label for='cat_$cat[id]'>$cat[nome]</label><br>");
		endforeach;
	 ?>
	 
</body>
</html>