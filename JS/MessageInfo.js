  
var expressionDB = /FailedDB:/;
var regexDB = new RegExp(expressionDB);
var t = window.location.href ;
if (t.match(regexDB))
{
	  $( function() {
    $( "#dialog" ).dialog({
	my: "center",
    at: "center",
    modal: true,

   of: window});
  } );
  
}

function Change_Color() {
	

	  var expression = /Error:/;
var regex = new RegExp(expression);
var t = window.location.href ;
	

if (t.match(regex)) {

	$('#Information1').addClass('AlertErro');
	$('#Information2').addClass('AlertErro');
	$('#Information4').addClass('AlertErro');
	$('#Information6').addClass('AlertErro');
		setTimeout(Delete_Message, 2000);

} else
{
	$('#Information1').addClass('AlertSuc');
	$('#Information2').addClass('AlertSuc');
	$('#Information4').addClass('AlertSuc');
	$('#Information6').addClass('AlertSuc');
	setTimeout(Delete_Message, 2000);
	
}	
}

function Delete_Message()
{
	$('#Information1').hide(500);
	$('#Information2').hide(500);
	$('#Information4').hide(500);
	$('#Information6').hide(500);
}