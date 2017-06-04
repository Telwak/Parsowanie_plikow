<?php
$QUERY = "Select";
require 'Data/Conection_string.php';
$xml_name = "./Rezultat_parsowania/".$_GET["name_db_xml"].".xml"; 
$xml = new DOMDocument();
$xml->version  = "1.0";
$xml->encoding = "UTF-8";
   
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$xml->appendChild( $xml->createElement("ID", $row['ID']) );    
$xml->appendChild( $xml->createElement("TEXT", $row['TEXT']) );
}
$xml->save($xml_name);
	header("Location: ../Index.php?InformationXMLFile=Wygenerowano plik! ".$_GET["name_db_xml"]. ".xml");
?>