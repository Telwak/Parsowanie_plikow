<?php
//require 'Data/Conection_string.php';
//$QUERY = "Insert";
$mysqli = new mysqli("localhost", "root", "", "xml");
if ($mysqli->connect_errno) {
    header("Location: ../Index.php?FailedDB: Nie można się połączyć z bazą danych!");
    exit();
}
$xmlDoc = new DOMDocument();

$xmlDoc->load("items.xml");
$xmlObject = $xmlDoc->getElementsByTagName('TEXT');
$itemCount = $xmlObject->length;

for ($i=0; $i < $itemCount; $i++){
  $title = $xmlObject->item($i)->getElementsByTagName('TEXT')->nodeValue;
  $sql   = "INSERT INTO `xml` (ID,TEXT) VALUES (null,'$title')";
	$result = $mysqli->query($sql);

  print "Finished Item $title n<br/>";
}
?>