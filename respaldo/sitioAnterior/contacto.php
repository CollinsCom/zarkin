<?PHP

error_reporting (5);

$theName = $_POST['theName'];
$thePhone = $_POST['thePhone'];
$theeMail = $_POST['theeMail'];
$theComment = $_POST['theComment'];

if ( $_POST['send'] == "Enviar" ){

//	mail ("hugo@collinscom.com", "Contacto Zarkin", "Nombre: $theName\nTelefono: $thePhone\neMail: $theeMail\nComentarios: $theComment", "From: $theeMail");
	mail ("diana.martinez@zarkin.com", "Contacto Zarkin", "Nombre: $theName\nTelefono: $thePhone\neMail: $theeMail\nComentarios: $theComment", "From: $theeMail");
	$msgGracias = "Agradecemos su preferencia, recibir&aacute; nuestra respuesta a la brevedad.";
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Contacto Zarkin</title>

<style type="text/css">
<!--

h1 {font-family:Arial, Helvetica, sans-serif; font-size:12px; font-stretch:condensed; font-weight:bold; text-align:right; padding:0px 10px;}
h2 {font-family:Geneva, Arial, Helvetica, sans-serif; font-size:12px; text-align:center; color:#FF0000;}
p {font-family:Geneva, Arial, Helvetica, sans-serif; font-size:14px; text-align:right; margin:0px;}

-->
</style>

<script type="text/javascript">
<!--

function verify() {
	var themessage = "Por favor completa los campos: \n\n";
	if (document.contZarkin.theName.value=="") {
	themessage = themessage + "- Nombre. \n";
}
	if (document.contZarkin.thePhone.value=="") {
	themessage = themessage + "- Tel&eacute;fono. \n";
}
	if (document.contZarkin.theeMail.value=="") {
	themessage = themessage + "- eMail. \n";
}
	if (document.contZarkin.theComment.value=="") {
	themessage = themessage + "- Comentarios. \n";
}

//alert if fields are empty and cancel form submit
if (themessage == "Por favor completa los campos: \n\n") {
contacto.submit();
}

else {
	alert(themessage);
return false;
   }
}


//-->
</script>

</head>

<body>

<div style="width:720px; height:auto; margin:0px auto;">

<form action="contacto.php" method="post" name="contZarkin" onSubmit="return verify();">
	<table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">

		<tr><td colspan="2"><img src="imagenes/headerContactForm.jpg" border="0"></td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td colspan="2"><p>Calle 14 #2690 Zona Industrial C.P. 44940 Guadalajara, Jal.<br>(33) 3812 7435, (33) 3812 7546</p></td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td colspan="2"><h2><?PHP echo $msgGracias ?></h2></td></tr>

		<tr>
		<td width="360"><h1>Nombre: </h1></td>
		<td width="360"><input name="theName" type="text" size="40"></td>
		</tr>

		<tr>
		<td width="360"><h1>Tel&eacute;fono: </h1></td>
		<td width="360"><input name="thePhone" type="text" size="40"></td>
		</tr>

		<tr>
		<td width="360"><h1>eMail: </h1></td>
		<td width="360"><input name="theeMail" type="text" size="40"></td>
		</tr>

		<tr>
		<td width="360" valign="top"><h1>Comentarios: </h1></td>
		<td width="360"><textarea name="theComment" cols="38" rows="8"></textarea></td>
		</tr>

		<tr>
		<td width="360">&nbsp;</td>
		<td width="360"><input type="submit" name="send" value="Enviar">&nbsp;<input type="reset" value="Cancelar"></td></tr>

	</table>

</form>

</div>

</body>
</html>
