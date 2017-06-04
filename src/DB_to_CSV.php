<?php
$Patch_file ="../Rezultat_parsowania/" .$_GET["name_csv"].".csv";
$QUERY = "Select";
require 'Data/Conection_string.php';

$file = fopen($Patch_file,"w");

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      fputcsv($file, $row);
    }

fclose($file);

    header("Location: ../Index.php?InformationDBFile=Wygenerowano plik! ".$_GET["name_csv"].".csv" );


?>