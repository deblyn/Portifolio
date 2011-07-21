<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	<title>Administração-> Trabalhos</title>
</head>
<body>
	<form action="../includes/validate.php">
		<label>Nome:</label><input type="text" name="siteNome" id="siteNome"/>
		<label>Endereço:</label><input type="text" name="siteUrl"/>
		<label>Técnicas Utilizadas:</label><input type="text" name="siteTecnicas" />
		<label>Ano de Criação:</label><input type="text" name="siteAno" />
		<label>Detalhes:</label><textarea rows="20" cols="50" name="siteDetalhes"></textarea>
		<input type="submit" value="Salvar"/>
	</form>
</body>
</html>