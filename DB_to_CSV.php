<?php
$Patch_file ="Rezultat_parsowania/" .$_GET["name_csv"].".csv";

	$mysqli = new mysqli("localhost", "root", "", "xml");
if ($mysqli->connect_errno) {
    header("Location: Index.php?InformationDBFile=Error: Nie można się połączyć z bazą danych!1");
    exit();
}

$query = "SELECT * FROM xml ORDER by ID desc";
$result = $mysqli->query($query);
//$row = $result->fetch_array(MYSQLI_NUM);

$file = fopen($Patch_file,"w");

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      fputcsv($file, $row);
    }

fclose($file);

    header("Location: Index.php?InformationDBFile=Wygenerowano plik! ".$_GET["name_csv"].".csv" );


?>