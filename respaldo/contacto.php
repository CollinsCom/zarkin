<?php

error_reporting(5);

$theName=$_POST['theName'];
$theCity=$_POST['theCity'];
$thePhone=$_POST['thePhone'];
$theMail=$_POST['theMail'];
$theComment=$_POST['theComment'];

if ( $_POST['sendMail'] == 'Enviar' ){
	mail ("contacto@collinscom.com", "Contacto Zarkin", "From: $theMail");
//	mail ("hugo@collinscom.com", "Contacto Zarkin", "Nombre: $theName\nCiudad: $theCity\nTelefono: $thePhone\n eMail: $theMail\nComentarios: $theComment", "From: $theMail");
	mail ("contacto@zarkin.com", "Contacto Zarkin", "Nombre: $theName\nCiudad: $theCity\nTelefono: $thePhone\n eMail: $theMail\nComentarios: $theComment", "From: $theMail");
}

?>

<html>
<head>
<title>::.:.Bienvenido a Zarkin.:.::</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="Description" content="Bienvenido a Tutto Pelle, la &uacute;nica cadena especialista en Muebles de Piel en M&eacute;xico">
<meta name="Keywords" content="Zarkin, Divano, Classici, Contemporanei, Complementi, Decoracion, Decoration, Decorazione, Mobile, Muebles de Piel, Leather Furniture, Sofas, Reclinables, Recliners, Multifuncionales, Multifunctionals, Modulares, Modulars, Rusticos, Rustic, Hi-Tek, Modernistas, Clasicos, Clasics, Transicionales, Modernist, Transitionals, Contemporary, diseno, design, Guadalajara, Mexico, Liverpool, Fabricas de Francia, Palacio de Hierro, Tutto Pelle, Sears, Masaje, Massage, Robotic">
<link href="css/tpstyle.css" rel="stylesheet" type="text/css">

<body>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="mainTable">
	<tr>
	<td width="10" background="images/interface/shadowLeft.jpg"></td>
	<td width="780" valign="top">
		<table align="center" width="780" border="0" cellspacing="0" cellpadding="0" style="height: 100%;">
			<tr>
			<td style="height: 120px;">
				<table width="780" border="0" cellspacing="0" cellpadding="0">
              		<tr>
                	<td width="250"><a href="interface.html" target="_self"><img src="images/interface/topFrame_02.jpg" border="0"></a></td>
                	<td width="280" background="images/interface/topFrame_03.jpg" style="height: 120px;">&nbsp;</td> 
                	<td width="250" background="images/interface/topFrame_04.jpg" style="height: 120px;">&nbsp;</td>
              		</tr>
            	</table>
			</td>
			</tr>
			<tr>
			  <td style="height: 300px;">
			  	<table width="780" height="0%" border="0" cellpadding="0" cellspacing="0">
					<tr>
					<td width="230" height="100%">
						<table border="0" cellpadding="0" cellspacing="0">
							<tr>
							<td width="15" background="images/interface/sbml_06.jpg">&nbsp;</td>
							<td width="200">
								<table width="200" border="0" cellpadding="0" cellspacing="0">
									<tr>
									<td background="images/interface/sbml_07.jpg" style="height: 50px"></td>
									</tr>
									<tr>
									<td><a href="nuestrosProductos.php" target="_self"><img src="images/interface/sbml_10.jpg" border="0"></a></td>
									</tr>
									<tr>
									<td><a href="caracPiel.php" target="_self"><img src="images/interface/sbml_11.jpg" border="0"></a></td>
									</tr>
									<tr>
									<td><a href="conocenos.php" target="_self"><img src="images/interface/sbml_12.jpg" border="0"></a></td>
									</tr>
									<tr>
									<td><a href="contacto.php" target="_self"><img src="images/interface/sbml_13.jpg" border="0"></a></td>
									</tr>
									<tr>
									<td><a href="garantia.php" target="_self"><img src="images/interface/sbml_14.jpg" border="0"></a></td>
									</tr>
									<tr>
									<td><img src="images/interface/sbml_15.jpg"></td>
									</tr>
								</table>
							</td>
							<td width="15" background="images/interface/sbml_08.jpg">&nbsp;</td>
							</tr>
						</table>					
					</td>
					<td width="550" background="images/interface/bgF_07.jpg"><img src="images/contacto/imgPortContacto.jpg" width="550" height="300"></td>
					</tr>
				</table>
			  </td>
			</tr>
			<tr>
			<td style="height: auto; background-color:#000000">
				<table width="780" border="0" cellpadding="0" cellspacing="0" style="height: 100%">
					<tr>
					<td width="230" bgcolor="#ebdfd1" valign="top">
						<table width="230" border="0" cellpadding="0" cellspacing="0">
							<tr>
							<td background="images/interface/sbql_07.jpg" style="height: 20px;">&nbsp;</td>
							</tr>
                            <!--<tr>
							<td><a href="http://168.144.188.88/zarkin/registro.producto/" target="_blank"><img src="images/interface/sbql_09.jpg" border="0"></a></td>
							</tr>-->
							<tr>
							<td><a href="lineaZarkin-HumanTouch/home.html" target="_blank"><img src="images/interface/sbql_11.jpg" border="0"></a></td>
							</tr>
							<tr>
							<td background="images/interface/sbql_13.jpg" style="height: 20px;">&nbsp;</td>
							</tr>
							<tr>
							<td><a href="http://www.tuttopelle.com.mx/lics.php" target="_blank"><img src="images/interface/sbql_14.jpg" border="0"></a></td>
							</tr>
							<tr>
							<td background="images/interface/sbql_13.jpg" style="height: 20px;">&nbsp;</td>
							</tr>
						</table>
					</td>
					<td width="550" bgcolor="#FFFFFF" valign="top">
						<table width="550" border="0" cellpadding="0" cellspacing="0">
							<tr>
							<td background="images/interface/mainFrame_08.jpg" style="height: 20px;">&nbsp;</td>
							</tr>
							<tr>
							<td>
								<table width="550" border="0" cellpadding="0" cellspacing="0">
									<tr>
									<td width="160" valign="top"><div class="txtContenido">Calle 14 No. 2690, Zona Industrial, C.P. 44940 Guadalajara, Jal.<br><br><b>(33) 3812 7435,<br> 3812 7546</b></div></td>
									<td width="370" valign="top">
										<div class="txtContenido">En <strong>Zarkin</strong> queremos conocer su opini&oacute;n.<br>Por favor, utilice nuestro <strong>formulario de contacto</strong> para hacernos llegar sus dudas y/o comentarios.</div>
										<form action="contacto.php" method="post" name="fContacto" id="fContacto">
											<table width="100%" border="0" cellpadding="0" cellspacing="0">
												<tr>
												<td width="100"><div class="txtContacto">Nombre:</div></td>
												<td><input name="theName" type="text" id="theName" size="30" maxlength="50"></td>
												</tr>
												<tr>
												<td><div class="txtContacto">Ciudad:</div></td>
												<td><input name="theCity" type="text" size="30" id="theCity" maxlength="30"></td>
												</tr>
												<tr>
												<td><div class="txtContacto">Tel&eacute;fono:</div></td>
												<td><input name="thePhone" type="text" id="thePhone" size="30" maxlength="12"></td>
												</tr>
												<tr>
												<td><div class="txtContacto">e-Mail:</div></td>
												<td><input name="theMail" type="text" id="theMail" size="30" maxlength="50"></td>
												</tr>
												<tr>
												<td valign="top"><div class="txtContacto">Comentarios:</div></td>
												<td><textarea name="theComment" id="theComment" cols="28" rows="5"></textarea><hr></td>
												</tr>
												<tr>
												<td>&nbsp;</td>
												<td><input name="sendMail" type="submit" id="sendMail" value="Enviar"><input name="Reset" type="reset" value="Cancelar"></td>
												</tr>
												<tr>
												<td>&nbsp;</td>
												<td><hr></td>
												</tr>
											</table>
										</form>
									</td>
									<td width="20">&nbsp;</td>
									</tr>
							  </table>
							</td>
							</tr>
						</table>
					  </td>
					</tr>
				</table>
			  </td>
			</tr>
		    <tr>
			<td style="height: 20px;">
				<table width="780" bgcolor="#b1926e" border="0" cellpadding="0" cellspacing="0" style="height: 20px;">
					<tr>
					<td align="left" width="50%"><img src="images/interface/creditos_01.jpg"></td>
					<td align="right" width="50%"><a href="http://www.collinscom.com" target="_blank"><img src="images/interface/creditos_02.jpg" border="0"></a></td>
					</tr>
				</table>
			</td>
		    </tr>
		</table>
	</td>
	<td width="10" background="images/interface/shadowRight.jpg"></td>
	</tr>
</table>

</body>
</html>
