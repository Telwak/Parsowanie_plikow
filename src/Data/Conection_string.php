<?php
$mysqli = new mysqli("localhost", "root", "", "xml");
switch ($QUERY) {
    case "Select":
        		$query = "SELECT * FROM xml ORDER by ID desc";
$result = $mysqli->query($query);

        break;
    case "Insert":
          
  
        break;
}
if ($mysqli->connect_errno) {
    header("Location: ../Index.php?FailedDB: Nie można się połączyć z bazą danych!");
    exit();
}
$result = $mysqli->query($query);
mysql_close($result);
?>