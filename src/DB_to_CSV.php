<?php
//Form 2
require 'Model/redirect.php';
require 'Model/Patch_MODEL.php';
require 'Data/Conection_string.php';

$File = new CSV($_GET["name_csv"]);
$Patch_file = $File ->get_File_full_patch_csv();

$query = "SELECT * FROM xml ORDER by ID desc";
$result = $mysqli->query($query);

$file = fopen($Patch_file,"w");

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      fputcsv($file, $row);
    }

fclose($file);

$result = $mysqli->query($query);
mysqli_close($result);
Create_files_redirect_form2($_GET["name_csv"]);
    

?>