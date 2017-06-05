<?php
//Form 1
require 'Model/redirect.php';

$Parsery = "../Parsery/";
$Parsery_out = "../Rezultat_parsowania/";
$filexml = $Parsery.$_GET["patch"]. ".xml";
$name_csv = $Parsery_out.$_GET["CSV_XML_NAME"].".csv";



    if (file_exists($filexml)) 
           {
       $xml = simplexml_load_file($filexml);
       $f = fopen($name_csv, 'w');
       createCsv($xml, $f);
       fclose($f);
    }
	
		else{
Error_files_redirect_form1($_GET["patch"]);
}

    function createCsv($xml,$f)
    {
require 'Data/Conection_string.php';
        foreach ($xml->children() as $item) 
        {

           $hasChild = (count($item->children()) > 0)?true:false;
	
   		 	

        if( ! $hasChild)
        {
           $put_arr = array($item->getName(),$item); 
           fputcsv($f, $put_arr ,',','"');
$query = "INSERT INTO `xml` (ID,TEXT) VALUES (null,'$item')";
			  $result = $mysqli->query($query);

        }
        else
        {
         createCsv($item, $f);
        }
Create_files_redirect_form1($_GET["patch"]);
	
     }

    }

			
?>