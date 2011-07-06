<?php
function getDbmsConnection($host = "localhost", $user = "root", $password = "", $schema = "port"){
	return new mysqli($host, $user, $password, $schema);
}
?>