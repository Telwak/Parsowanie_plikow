<?php
//Form 4
require 'Model/Patch_MODEL.php';
require 'Model/redirect.php';
require 'Data/Conection_string.php';
//$Patch_file ="../Parsery/".$_GET["xml_to_db"].".xml";
$File = new XML($_GET["xml_to_db"]);
$Patch_file = $File ->get_File_full_patch_xml();

if(!file_exists($Patch_file))
{
Error_files_redirect_form4($_GET["xml_to_db"]);

}

$xmlDoc = new DOMDocument();
$xmlDoc->load($Patch_file);
$xmlObject = $xmlDoc->getElementsByTagName('item');
$itemCount = $xmlObject->length;

for ($i=0; $i < $itemCount; $i++){
  $title = $xmlObject->item($i)->getElementsByTagName('TEXT')->item(0)->childNodes->item(0)->nodeValue;
	$query = "INSERT INTO `xml` (ID,TEXT) VALUES (null,'$title')";
  $result = $mysqli->query($query);
  
}
Create_files_redirect_form4($_GET["xml_to_db"]);
	
?>