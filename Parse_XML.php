<?php
$Parsery = "Parsery/";
$Parsery_out = "Rezultat_parsowania/";
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
header("Location: Index.php?InformationParseXML=Error: Nie znaleziono pliku". $_GET["patch"] .".xml");

}

    function createCsv($xml,$f)
    {

        foreach ($xml->children() as $item) 
        {

           $hasChild = (count($item->children()) > 0)?true:false;
	
   		 
        if( ! $hasChild)
        {
           $put_arr = array($item->getName(),$item); 
           fputcsv($f, $put_arr ,',','"');

        }
        else
        {
         createCsv($item, $f);
header("Location: Index.php?InformationParseXML=Plik " .$_GET["CSV_XML_NAME"]. ".csv został wygenerowany!");
        }
	
     }

    }

			
?>