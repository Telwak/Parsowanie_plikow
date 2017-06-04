<?php
$mysqli = new mysqli("localhost", "root", "", "xml");		
		$mysqli->set_charset("utf8");

if ($mysqli->connect_errno) {
    header("Location: ../Index.php?FailedDB: Nie można się połączyć z bazą danych!");
    exit();
}

?>