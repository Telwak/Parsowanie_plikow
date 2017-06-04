<?php
require 'Data/Conection_string.php';
$Patch_file ="../Parsery/".$_GET["xml_to_db"].".xml";
if(!file_exists($Patch_file))
{
		header("Location: ../Index.php?InformationXML_DB_File=Error:Nie znaleziono pliku! ".$_GET["xml_to_db"]. ".xml");
		return;
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
	
	
		header("Location: ../Index.php?InformationXML_DB_File=Parsowanie zakończone sukcesem! ".$_GET["xml_to_db"]. ".xml");
	
?>