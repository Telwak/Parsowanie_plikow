<?php

$mysqli = new mysqli("localhost", "root", "", "xml");		
		$mysqli->set_charset("utf8");

if ($mysqli->connect_errno) {
	include 'Model\redirect.php';
    Error_DB();
}

?>