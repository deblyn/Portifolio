<?php
	require_once("dbms.php");
	
	$nome = $_REQUEST['siteNome'];
	$url = $_REQUEST['siteUrl'];
	$tecnicas = $_REQUEST['siteTecnicas'];
	$ano = $_REQUEST['siteAno'];
	$descricao = $_REQUEST['siteDetalhes'];
	
	$c = getDbmsConnection();
	$c->query("insert into works (nome) values (\"$nome\"");
	$c->close();
?>