<?php
//require '../Model/redirect.php';

$mysqli = new mysqli("localhost", "root", "", "xml");		
		$mysqli->set_charset("utf8");

if ($mysqli->connect_errno) {
    //Error_DB();
}

?>