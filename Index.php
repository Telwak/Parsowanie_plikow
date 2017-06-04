<!doctype html>
<html>
     <head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="STIMED-master\src\stimed.js"></script>
<script src="STIMED-master\js.js"></script>
<script src="JS\Validate.js"></script>
<script src="JS\scroll_efect.js"></script>
<script src="JS\MessageInfo.js"></script>
    <LINK href="CSS/scroll.css" rel="stylesheet" type="text/css">

    <LINK href="CSS/style.css" rel="stylesheet" type="text/css">
	
</head>
     <body onload  = "Change_Color()">
	 <?php
 
	 if (!is_dir("Parsery/")) {
    mkdir("Parsery/");         
}else if(!is_dir("Rezultat_parsowania/"))
{
    mkdir("Rezultat_parsowania/");         
}
	 ?>
</head>
<body>
<a href="#" title="Do góry!" id="scroll-to-top"><img src="img/back-to-top-2.png" alt="strzałka do góry" /></a>

<div style="display:none;" id="dialog" title="Uwaga!">
 <p>Nie można połączyć się z bazą danych! Sprawdż połączenie.</p>
</div>
	 <div style="display:none" id = "Information_3" class="alert alert-success" >
	Uwaga: Nie musisz podawać rozszerzenia pliku
	 </div>
	
</br></br>
	<form name ="Parse_XML"  action="src/Parse_XML.php" method="get">	</br>
	<h4><span class="label label-default">XML_TO_CSV:</span></h4></br></br>
  Ścieżka: <input onkeyup = "ValidationRegex()" id = "Patch_XML" type="text" name="patch" required><br>
  Nazwa pliku wyjściowego: <input onkeyup = "ValidationRegex()" id ="Name_patch" type="text" name="CSV_XML_NAME" required ><br><br>
  <input onclick = "validateForm_Parse_XML()" type="submit" value="Generuj"  class="btn btn-primary"></br></br>
  <div id ="Information1" >
    <?php
  echo(@$_GET["InformationParseXML"]);
  ?>
  </div>
</form>

</br></br>
<form name = "DB_CSV" action="src/DB_to_CSV.php" method="get">
</br>
<h4><span class="label label-default">DB_TO_CSV:</span></h4></br>	</br>
  Nazwa pliku: <input onkeyup = "ValidationRegex()" id = "Name" type="text" name="name_csv" required></br></br>
  <input onclick="validateForm_DV_CSV()" type="submit" value="Generuj" class="btn btn-primary"><br><br>
  <div  id ="Information2" >
  <?php
  echo(@$_GET["InformationDBFile"]);
  ?>


</div>
</form>
</br></br>

<form name = "DB_XML" action="src/DB_to_XML.php" method="get">
</br>
<h4><span class="label label-default">DB_TO_XML:</span></h4></br>	</br>
  Nazwa pliku: <input onkeyup = "ValidationRegex()" id = "Name_XML_DB" type="text" name="name_db_xml" required></br></br>
  <input onclick="validateForm_Parse_XML1()" type="submit" value="Generuj" class="btn btn-primary"><br><br>
  <div  id ="Information4" >
  <?php
  echo(@$_GET["InformationXMLFile"]);
  ?>
</div>
</form>
</br></br>
<form name = "XML_to_DB" action="src/XML_TO_DB.php" method="get">
</br>
<h4><span class="label label-default">XML_TO_DB:</span></h4></br>	</br>
  Nazwa pliku: <input onkeyup = "ValidationRegex()" id = "XML_TO_DB_NAME" type="text" name="xml_to_db" required></br></br>
  <input onclick="validateForm_XML__TO_DB()" type="submit" value="Generuj" class="btn btn-primary"><br><br>
  <div  id ="Information6" >
  <?php
  echo(@$_GET["InformationXML_DB_File"]);
  ?>
</div>
</form>
</br></br>
<div id="footer">
Tomasz Telwak 2017r, Zadanie rekrutacyjne.
</div>
 </body>
</html>