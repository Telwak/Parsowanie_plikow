<?php
function Create_files_redirect_form1($Name_files)
{
	header("Location: ../Index.php?InformationParseXML=Plik " .$Name_files. ".csv został wygenerowany!");
	return;
}
function Error_files_redirect_form1($Name_files)
{
header("Location: ../Index.php?InformationParseXML=Error: Nie znaleziono pliku ". $Name_files .".xml");
 exit();
}

function Create_files_redirect_form2($Name_files)
{
    header("Location: ../Index.php?InformationDBFile=Wygenerowano plik! ".$Name_files.".csv" );
 exit();
}
function Create_files_redirect_form3($Name_files)
{
header("Location: ../Index.php?InformationXMLFile=Wygenerowano plik! ".$Name_files. ".xml");
 exit();
}
function Create_files_redirect_form4($Name_files)
{
		header("Location: ../Index.php?InformationXML_DB_File=Parsowanie zakończone sukcesem! ".$Name_files. ".xml");
		 exit();
}
function Error_files_redirect_form4($Name_files)
{
		header("Location: ../Index.php?InformationXML_DB_File=Error:Nie znaleziono pliku! ".$Name_files. ".xml");
		 exit();
}
function Error_DB()
{
		 header("Location: ../Index.php?FailedDB: Nie można się połączyć z bazą danych!");
		 exit();
}

?>