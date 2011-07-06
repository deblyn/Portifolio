<?php
	require_once "dbms.php";
	
	$user = $_POST['login'];
	$pass = md5($_POST['senha']);
	
	$c = getDbmsConnection();
	$r = $c->query("select * from user where user = \"$user\"");
	$u = $r->fetch_object();
		
	if($u->user == $user && $u->password == $pass){
		Header("Location: ../admin/logged_index.php");
	}
	
	
		
?>