<?php	
	define('_path','http://localhost/!Collins/zarkin/');

	error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo _path; ?>css/formulario.css" />
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js"></script>
	<script type="text/javascript" src="<?php echo _path; ?>js/jquery.shuffleLetters.js"></script>
	<script type="text/javascript" src="<?php echo _path; ?>js/jquery.tinyscrollbar.min.js"></script>
	<script type="text/javascript" src="<?php echo _path; ?>js/jquery.waitforimages.js"></script>
	<script type="text/javascript" src="<?php echo _path; ?>js/lib.js"></script>
	
	<script type="text/javascript" src="<?php echo _path; ?>js/vanadium/vanadium.js"></script>
	<script src="http://html5form.googlecode.com/svn/trunk/jquery.html5form-min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo _path; ?>js/vanadium/style.css" />
	
	<script type="text/javascript" src="<?php echo _path; ?>js/jquery.lightbox-0.5.js"></script>
	<script type="text/javascript" src="<?php echo _path; ?>js/procesar.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo _path; ?>css/jquery.lightbox-0.5.css" media="screen" />

	<script type="text/javascript">
	function tecla(event){
		if(event.keyCode == 13){
			validar();
		}
	}

	function validar(){
		if (chkb('garantia', 'factorC', 'Tiene que seleccionar de 2 a 4 factores de compra.')) {
			if (chkb('garantia', 'factorI', 'Tiene que seleccionar de 2 a 3 factores importantes en una tienda.')){
				// document.forms["garantia"].submit();
				document.forms["garantia"].btnSubmit.click()
			}
		}		
	}

	function chkb(frm,fld,textAlert){
		var t="";var s=",  ";var flag=0;
		for(var i=0;i<document[frm].elements["_"+fld].length;i++)
			{			
			if(document[frm].elements["_"+fld][i].checked)
				{
				if(flag>0){t+=s+document[frm].elements["_"+fld][i].value;flag+=1;}				
				else{t+=document[frm].elements["_"+fld][i].value;flag+=1;}
				}
			}	
			
		document[frm].elements[fld].value=t;
		//valido genero
		if (flag<2 || flag>4)
		{ 
			 alert(textAlert);
			 document[frm].elements[fld].focus();
			 return false;
		}
		return true;
	}	
	</script>
	
	<title>Garant&iacute;a - Prueba</title>
		
</head>
<body class="black">

		<!-- HEADER -->
		<div class="barratop"></div>
		<div class="barra"></div>
		<div class="titulos">	
			<?php 
				echo '<img src="'._path.'images/titulos/garantia.png" style="margin-top:-15px;" />'; 
			?>		
			<div class="clear"></div>
		</div>
		
	<!-- CONTENIDO -->
		<div>
			<div class="clear10px"></div>
			<div class="clear10px"></div>
			<div class="clear10px"></div>
			<div>			
				<div>
					<div class="viewport">										  
						<div class="clear10px"></div>
						<div class="clear10px"></div>
						<div class="clear10px"></div>
						<div class="clear10px"></div>   
						<form name="garantia" method="post" action="formulario-garantia.php" autocomplete="on" onkeydown="javascript:tecla(event);">
							<h3>DATOS PARA EL REGISTRO</h3>
							<fieldset>
								<legend>INFORMACIÓN DEL PRODUCTO (requerido)</legend>                        
								<h3>Introduzca la clave de identificación localizada en la etiqueta debajo del mueble</h3>
								
								<ul>
									<li>
										<label for="clave">Clave</label><br />
										<input type="text" minlength="7" maxlength="8" placeholder="Clave del mueble" name="clave" value="" required autofocus>
									</li>
									<li>
										<label for="modeloMueble">Modelo del Mueble</label><br />
										<input type="text" maxlength="8" placeholder="Ej. Pionini" name="modeloMueble" value="" required>
									</li>

									<li>
										<label for="composicion">Composici&oacute;n</label><br />
										<input type="text" placeholder="Ej. " name="composicion" value="" required>
									</li>
									<li>
										<label for="color">Color</label><br />
										<input type="text" placeholder="Ej. Chocolate" name="color" value="" required>
									</li>
								</ul>
							</fieldset>

							<div class="clear10px"></div>
							<div class="clear10px"></div>

							<fieldset>
								<legend>INFORMACIÓN DE COMPRA (requerido)</legend>
								
								<ul>
									<li>
										<label for="nombreTienda">Nombre de la tienda</label><br />
										<input type="text" placeholder="Ej. tutto pelle" name="nTienda" value="" required>
									</li>
									<li style="visibility:hidden;">
										<label for="paisT">País</label><br />
										<input type="text" placeholder="" name="paisT" value="Mexico">
									</li>
									<li>
										<label for="estadoT">Estado</label><br />
										<select id="estadoT" name="estadoT">
											<?php
												$conexion = mysql_connect("localhost","root","toor") or die("Error en la conexion a la base de datos");
												mysql_select_db("zarkin", $conexion);												

												$estados = "SELECT * FROM estados";
												$res_estados = mysql_query($estados,$conexion) or die(mysql_error());

												echo "<option value=''>--Seleccione Estado--</option>";
												while($estado = mysql_fetch_assoc($res_estados)){
													echo '<option value="'.$estado['id_estado'].'">'.utf8_encode($estado['nombre_estado']).'</option>';
												}
											?>
										</select>										
									</li>
									<li>
										<label for="ciudadT">Ciudad</label><br />
										<div id="loader-garantia1" style="float:right; display:none;"><img  style="height:20px; width:20px;" src="http://www.zarkin.com/images/ajax-loader.gif" /></div>
										<select id="ciudadT" disabled name="ciudadT" required>
										</select>
									</li>									

									<li>
										<label for="fcompra">Fecha de Compra</label><br />
										<input type="date" placeholder="01/01/1900" name="fcompra" value="01/01/1900" required><br />
									</li>
									<li>
										<label for="fentrega">Fecha de Entrega</label><br />
										<input type="date" placeholder="01/01/1900" name="fentrega" value="01/01/1900" required><br />
									</li>
								</ul>

							</fieldset>

							<div class="clear10px"></div>
							<div class="clear10px"></div>

							<fieldset>
								<legend>FORMA DE ENTREGA (requerido)</legend>								
								<ul>
									<h3>¿Cu&aacute;l ha sido la forma de entrega de su producto Zarkin?</h3>
									
									<li>
										<input type="radio" name="formEntrega" value="Lo he recogido y montado el mismo" required >
										<label for="opcion1">Lo he recogido y montado yo mismo</label><br />
										<input type="radio" name="formEntrega" value="La entrega y el montaje han corrido a cargo del distribuidor" required>
										<label for="opcion2">La entrega y el montaje han corrido a cargo del distribuidor</label><br />
										<input type="radio" name="formEntrega" value="El distribuidor ha realizado la entrega y él el montaje" required>
										<label for="opcion3">El distribuidor ha realizado la entrega y yo el montaje</label><br />
									</li>
								</ul>
							</fieldset>

							<div class="clear10px"></div>
							<div class="clear10px"></div>

							<fieldset>
								<legend>INFORMACIÓN DEL CLIENTE</legend>
								
								<ul>
									<li>
										<label for="nombre">Nombre</label><br />
										<input type="text" placeholder="Jorge" name="nombre" value="" required>
									</li>
									
									<li>
										<label for="apellidoP">Apellido Paterno</label><br />
										<input type="text" placeholder="Rojas" name="apellidoP" value="" required>
									</li>
									
									<li>
										<label for="apellidoM">Apellido Materno</label><br />
										<input type="text" placeholder="" name="apellidoM" value="">
									</li>
									
									<li>
										<label for="fnacimiento">Fecha de Nacimiento</label><br />
										<input type="date" placeholder="01/01/1900" name="fnacimiento" value="01/01/1900" required>
									</li>
									
									<li>
										<label for="sex">Sexo</label><br />
										<label for="sex">M</label><input type="radio" name="sex" value="Masculino" required>
										<label for="sex">F</label><input type="radio" name="sex" value="Femenino" required>
									</li>
									
									
									<li>
										<label for="direccion">Direcci&oacute;n</label><br />
										<input type="text" placeholder="" name="direccion" value="" required >
									</li>
									
									<li style="display:none;">
										<label for="pais">Pais</label><br />
										<input type="text" placeholder="México" name="pais" value="Mexico">
									</li>
									
									<li>
										<label for="estadoC">Estado</label><br />
										<select id="estadoC" name="estadoC">
											<?php
												$conexion = mysql_connect("localhost","root","toor") or die("Error en la conexion a la base de datos");
												mysql_select_db("zarkin", $conexion);												

												$estados = "SELECT * FROM estados";
												$res_estados = mysql_query($estados,$conexion) or die(mysql_error());

												echo "<option value=''>--Seleccione Estado--</option>";
												while($estado = mysql_fetch_assoc($res_estados)){
													echo '<option value="'.$estado['id_estado'].'">'.utf8_encode($estado['nombre_estado']).'</option>';
												}
											?>
										</select>	
									</li>
									
									<li>
										<label for="ciudadC">Ciudad</label><br />
										<div id="loader-garantia2" style="float:right; display:none;"><img  style="height:20px; width:20px;" src="http://www.zarkin.com/images/ajax-loader.gif" /></div>
										<select id="ciudadC" disabled name="ciudadC" required>
										</select>
									</li>
															
									<li>
										<label for="cp">Codigo Postal</label><br />
										<input type="text" placeholder="45000" name="cp" value="" maxlenght="5" required >
									</li>
									
									<li>
										<label for="tel">Telefono</label><br />
										<input type="tel" placeholder="Ej. 3319278448" name="tel" value="" lenght="10"required >
									</li>
									
									<li>
										<label for="email">E-mail</label><br />
										<input type="email" placeholder="Ej. ejemplo@dominio.com" name="email" value="" required >
									</li>
								</ul>

							</fieldset> 

							<div class="clear10px"></div>
							<div class="clear10px"></div>

							<fieldset>
								<legend>INFORMACIÓN DE MERCADO</legend>
								<h3>Para ofrecerle un mejor servicio, le agradecemos responda las siguientes preguntas.<br /> 
									Sus respuestas servirán solamente para elaborar datos estadísticos y serán confidenciales.</h3>

								<ul>
									<li>
										<label for="estCivil">Estado Civil:</label><br /> 
										<select name="estCivil">
										  <option value="Soltero/a">Soltero/a</option>
										  <option value="Casado/a">Casado/a</option>
										  <option value="Divorciado/a">Divorciado/a</option>
										  <option value="Otro">Otro</option>
										</select>
									</li>
									
									<li><label for="estudios">Nivel de Estudio:</label><br /><select name="personas"><option value="1">Primaria</option><option value="2">Secundaria</option><option value="3">Bachillerato</option><option value="4">Licenciatura</option><option value="5">Postgrado</option></select></li>
									
									<div class="clear10px"></div>
									
									<li>
										<label for="profesion">Profesi&oacute;n</label><br />
										<input type="text" placeholder="" name="profesion" value="" required>
									</li>
									
									<li>
										<label for="personas">¿Cu&aacute;ntas personas viven con usted?</label><br />
										<select name="personas">
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6+</option>
										</select>
									</li>
									
									<div class="clear10px"></div>
									<div class="clear10px"></div>
									
									<li>
										<label for="ninos">¿Qu&eacute; edad tienen los ni&ntilde;os menores de 15 a&ntilde;os que viven con usted?</label><br />
										<select name="ninos">
										  <option value="1">1 niño</option>
										  <option value="2">2 niños</option>
										  <option value="3">3 niños</option>
										  <option value="4">4 niños</option>
										  <option value="0">Ninguno</option>
										</select>
									</li>
									
									<div class="clear10px"></div>
									<div class="clear10px"></div>
									
									<li>
										<label for="ingresos">¿Cuáles son los ingresos de su hogar al mes?<br />
											<span><h6 style="">Moneda: D&oacute;lar estadounidense</h6></span></label>
										
										<select name="ingresos">
										  <option value="<$25,000">Menos de $25,000</option>
										  <option value="$25,000-$50,000">$25,000 - $50,000</option>
										  <option value="$50,000-$100,000">$50,000 - $100,000</option>
										  <option value=">$100,000">M&aacute;s de $100,000</option>
										</select>
									</li>
									
									<div class="clear10px"></div>
									<div class="clear10px"></div>
									
									<li>
										<label for="destino">¿Cu&aacute;l de los siguientes destinos coincide con el que pretende darle a su compra?</label><br />
										<select name="destino">
										  <option value="Primera Casa">Primera Casa</option>
										  <option value="Casa de campo">Casa de campo</option>
										  <option value="Oficina">Oficina</option>
										  <option value="Otro">Otro</option>
										</select>
									</li>
									
									<div class="clear10px"></div>
									<div class="clear10px"></div>
									
									<li>
										<div id="factoresCompra">
											<label for="factorC"><h3>Por favor indique de 2 a 4 factores que más han influido en la compra de su producto Zarkin:</h3></label><br />
											<input name="factorC" value="" type="hidden">
											<label for="opcion1"><input type="checkbox" name="_factorC" id="genero_1" value="Marca">Marca</label><br />									
											<label for="opcion2"><input type="checkbox" name="_factorC" id="genero_2" value="Comodidad">Comodidad</label><br />
											<label for="opcion3"><input type="checkbox" name="_factorC" id="genero_3" value="Calidad">Calidad</label><br />
											<label for="opcion4"><input type="checkbox" name="_factorC" id="genero_4" value="Diseño">Diseño</label><br />
											<label for="opcion5"><input type="checkbox" name="_factorC" id="genero_5" value="Publicidad">Publicidad</label><br />									
											<label for="opcion6"><input type="checkbox" name="_factorC" id="genero_6" value="Promociones">Promociones</label><br />
											<label for="opcion7"><input type="checkbox" name="_factorC" id="genero_7" value="Mantenimiento y Limpieza">Mantenimiento y Limpieza</label><br />
											<label for="opcion8"><input type="checkbox" name="_factorC" id="genero_8" value="Mecanismo y Funcionamiento">Mecanismo y Funcionamiento</label><br />
											<label for="opcion9"><input type="checkbox" name="_factorC" id="genero_9" value="Relación Calidad/Precio">Relación Calidad/Precio</label><br />
											<label for="opcion10"><input type="checkbox" name="_factorC" id="genero_10" value="">Otro</label><br />
										</div>
									</li>

									<div class="clear10px"></div>
									<div class="clear10px"></div>
									
									<li>
										<div id="factoresImport">
											<label for="factorI"><h3>Por favor indique de 2 a 3 factores que considera más importante en una tienda de muebles:</h3></label><br />
											<input name="factorI" value="" type="hidden">
											<label for="opcion1"><input type="checkbox" name="_factorI" value="Que tenga un diseñador de interiores para consulta" >Que tenga un diseñador de interiores para consulta</label><br />									
											<label for="opcion2"><input type="checkbox" name="_factorI" value="Catálogos Folletos" >Catálogos Folletos</label><br />
											<label for="opcion3"><input type="checkbox" name="_factorI" value="Página Web" >Página Web</label><br />
											<label for="opcion4"><input type="checkbox" name="_factorI" value="Información sobre el mantenimiento del producto" >Información sobre el mantenimiento del producto</label><br />
											<label for="opcion1"><input type="checkbox" name="_factorI" value="Personal muy bien capacitado" >Personal muy bien capacitado</label><br />									
											<label for="opcion2"><input type="checkbox" name="_factorI" value="Publicidad sobre promociones y ofertas" >Publicidad sobre promociones y ofertas</label><br />
											<label for="opcion3"><input type="checkbox" name="_factorI" value="Otro" >Otro</label><br />
										</div>
									</li>
									
									<div class="clear10px"></div>
									<div class="clear10px"></div>
									
									<li>
										<label for="destino">¿Cómo conoció los productos Zarkin?</label><br />							
										<select name="destino">
										  <option value="Publicidad">Publicidad</option>
										  <option value="Revistas/Periódicos">Revistas/Periódicos</option>
										  <option value="Internet">Internet</option>
										  <option value="Familiares y/o amigos">Familiares y/o amigos</option>								  
										  <option value="Tiendas departamentales">Tiendas departamentales</option>
										  <option value="Otro">Otro</option>
										</select>
									</li>
									
									<li>
										<label for="pago">¿Cómo ha pagado su producto Zarkin?</label><br />
										<select name="pago">
										  <option value="Efectivo">Efectivo</option>
										  <option value="Cheque">Cheque</option>
										  <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
										  <option value="Financiamiento">Financiamiento</option>
										</select>
									</li>
								</fieldset>
	
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								</ul>

							<fieldset class="satisfaccion">
								<legend>SATISFACCIÓN DEL CLIENTE</legend>
								<table>
									<colgroup>
										<col >
										<col class="opcion" span="3">											
									</colgroup>
									<thead>
										<tr>
											<th></th>
											<th>Muy satisfactoria</th>
											<th>Satisfactoria</th>
											<th>Poco satisfactoria</th>
										</tr>
									</thead>
									<tbody>										
										<tr>
											<th>La gama de modelos, versiones, cubiertas y colores ¿se adaptan satisfactoriamente a sus requisitos?</th>
											<td><input type="radio" name="satisfCliente1" value="3" required ></td>
											<td><input type="radio" name="satisfCliente1" value="2" required ></td>
											<td><input type="radio" name="satisfCliente1" value="1" required ></td>
										</tr>
										<tr>
											<th>¿Está satisfecho con la información que recibió acerca del producto?</th>
											<td><input type="radio" name="satisfCliente2" value="3" required ></td>
											<td><input type="radio" name="satisfCliente2" value="2" required ></td>
											<td><input type="radio" name="satisfCliente2" value="1" required ></td>
										</tr>
										<tr>
											<th>¿Está satisfecho con de grado de competencia, profesionalidad y trato del personal de ventas?</th>
											<td><input type="radio" name="satisfCliente3" value="3" required ></td>
											<td><input type="radio" name="satisfCliente3" value="2" required ></td>
											<td><input type="radio" name="satisfCliente3" value="1" required ></td>
										</tr>
										<tr>
											<th>¿Está satisfecho con los plazos de entrega?</th>
											<td><input type="radio" name="satisfCliente4" value="3" required ></td>
											<td><input type="radio" name="satisfCliente4" value="2" required ></td>
											<td><input type="radio" name="satisfCliente4" value="1" required ></td>
										</tr>
										<tr>
											<th>¿Está satisfecho con la profesionalidad de personal de entrega y con el estado del producto a la entrega?</th>
											<td><input type="radio" name="satisfCliente5" value="3" required ></td>
											<td><input type="radio" name="satisfCliente5" value="2" required ></td>
											<td><input type="radio" name="satisfCliente5" value="1" required ></td>
										</tr>
										<tr>
											<th>¿Está satisfecho con la calidad del producto?</th>
											<td><input type="radio" name="satisfCliente6" value="3" required ></td>
											<td><input type="radio" name="satisfCliente6" value="2" required ></td>
											<td><input type="radio" name="satisfCliente6" value="1" required ></td>
										</tr>
										<tr>
											<th>¿Qué opina sobre la relación calidad/precio de nuestro producto?</th>
											<td><input type="radio" name="satisfCliente7" value="3" required ></td>
											<td><input type="radio" name="satisfCliente7" value="2" required ></td>
											<td><input type="radio" name="satisfCliente7" value="1" required ></td>
										</tr>
										<tr>
											<th>¿Tiene alguna sugerencia para mejorar nuestro servicio?</th>
											<td colspan="3"><textarea name="satisfCliente8" row="3" maxlength="250" required></textarea></td>
										</tr>
									</tbody>
								</table>								
							</fieldset>
							<input type="submit" value="Submit" align="center" style="display:none;" name="btnSubmit">
							<input type="button" value="Enviar" align="center" onClick="validar()">
						</form>

						<?php
							if(isset($_POST)){

								// echo "<pre>";
								// print_r($_POST);
								// echo "</pre>";
							// extract($_POST);	

							#Conectamos con MySQL
							$conexion = mysql_connect("localhost","root","toor")
							or die ("Fallo en el establecimiento de la conexión");

							#Seleccionamos la base de datos a utilizar
							mysql_select_db("zarkin")
							or die("Error en la selección de la base de datos");

							# ################################### #
							$sql = "INSERT INTO garantias (clave, modelo_mueble,   composicion,        color,        tienda,         pais_t,       estado_t,       ciudad_t,       fecha_compra,   fecha_entrega,   forma_entrega,      nombre_cliente, a_paterno,      a_materno,         fecha_nacimiento,   sexo,        direccion,        pais_c,     estado_c,       ciudad_c,      cp,        tel,        correo,       estado_civil,     estudios,       profesion,         personas,      ninos,         ingresos,        destino,        factor_compra, factor_tienda,    conocio_producto, forma_pago, gama,                informacion,           trato,                 entrega,               profesionalidad,       calidad,              calidad_precio,         sugerencia) ";
							$sql.= "VALUES ('".$clave."', '".$modeloMueble."', '".$composicion."', '".$color."', '".$nTienda."', '".$paisT."', '".$estadoT."', '".$ciudadT."', '".$fcompra."', '".$fentrega."', '".$formEntrega."', '".$nombre."', '".$apellidoP."', '".$apellidoM."', '".$fnacimiento."', '".$sex."', '".$direccion."', '".$pais."', '".$estado."', '".$ciudad."', '".$cp."', '".$tel."', '".$email."', '".$estCivil."', '".$estudios."', '".$profesion."', '".$personas."', '".$ninos."', '".$ingresos."', '".$destino."', '".$factorC."', '".$factorI."', '".$destino."', '".$pago."', '".$satisfCliente1."', '".$satisfCliente2."', '".$satisfCliente3."', '".$satisfCliente4."', '".$satisfCliente5."', '".$satisfCliente6."', '".$satisfCliente7."', '".$satisfCliente8."')";
							
							mysql_query($sql, $conexion) or die(mysql_error());
							# ################################### #

							#Cerramos la conexión con la base de datos
							mysql_close($conexion);
							}
						?>					
					</div>
				</div>
			</div>
		</div>
		<div class="logo-dos">
			<a href="<?php echo _path; ?>home"></a>
		</div>

		<a style="z-index:100; float:right; position:relative; right:50px; bottom: 25px; text-decoration:none; color:#FFFFFF; font-size:12px; font-family:'HelveticaNeue45Light'; " href="http://collinscom.com" target="_blank">Collinscom.com</a>

	</body>
</html>