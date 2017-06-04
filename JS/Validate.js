function validateForm_XML__TO_DB() {
    var x = document.forms["XML_to_DB"]["xml_to_db"].value;
    if (x == "") {
$('#XML_TO_DB').addClass('error');
setTimeout(Remove, 2000);
    }
}
          
function validateForm_DV_CSV() {
    var x = document.forms["DB_CSV"]["name_csv"].value;
    if (x == "") {
$('#Name').addClass('error');
setTimeout(Remove, 2000);
    }
}
function validateForm_Parse_XML() {
    var x = document.forms["Parse_XML"]["Patch_XML"].value;
	 var y = document.forms["Parse_XML"]["Name_patch"].value;
	 
    if (x == "") {
$('#Patch_XML').addClass('error');
setTimeout(Remove, 2000);
    }else if(y == "")
	    {
$('#Name_patch').addClass('error');
setTimeout(Remove, 2000);
    } 
		

}
	function validateForm_Parse_XML1()
	{
	 var z = document.forms["DB_XML"]["name_db_xml"].value;

	if (z == "")
	{
	$('#Name_XML_DB').addClass('error');
setTimeout(Remove, 2000);	
	}
	}
function Remove()
{
	$('#Name').removeClass('error');
	$('#Patch_XML').removeClass('error');
	$('#Name_patch').removeClass('error');
	$('#Name_XML_DB').removeClass('error');
	$('#XML_TO_DB	').removeClass('error');

}
function ValidationRegex()
{
	
	var form_expression= /.xml|.csv/g;
	var regex_xml = new RegExp(form_expression);
	var regex_csv = new RegExp(form_expression);
	var regex_XML_DB = new RegExp(form_expression);
    var xml_to_db = document.forms["XML_to_DB"]["xml_to_db"].value;
	var xml_parse = document.forms["Parse_XML"]["CSV_XML_NAME"].value;
	var csv_parse = document.forms["Parse_XML"]["patch"].value;
	var csv_DB = document.forms["DB_CSV"]["name_csv"].value;
	var xml_DB = document.forms["DB_XML"]["name_db_xml"].value;
	
	if(xml_to_db.match(regex_XML_DB)||xml_parse.match(regex_xml) || csv_parse.match(regex_csv) || csv_DB.match(regex_csv) || xml_DB.match(regex_xml))
	{


		 $( "#Information_3" ).show( 400 );

	}
	else
	{
		$( "#Information_3" ).hide( 400 );
	}
	
}