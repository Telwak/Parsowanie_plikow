<?php
$Patch_file ="../Rezultat_parsowania/" .$_GET["name_csv"].".csv";
$QUERY = "Select";
require 'Data/Conection_string.php';

$query = "SELECT * FROM xml ORDER by ID desc";
$result = $mysqli->query($query);

$file = fopen($Patch_file,"w");

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      fputcsv($file, $row);
    }

fclose($file);

$result = $mysqli->query($query);
mysql_close($result);

    header("Location: ../Index.php?InformationDBFile=Wygenerowano plik! ".$_GET["name_csv"].".csv" );


?>