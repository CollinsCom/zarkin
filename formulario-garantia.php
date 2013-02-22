<?php	
	define('_path','http://www.zarkin.com/');

	error_reporting(0);

	if($_POST['btnSubmit']){
			if(isset($_POST)){

			// echo "<pre>";
			// print_r($_POST);
			// echo "</pre>";
			extract($_POST);	

			#Conectamos con MySQL
			$conexion = mysql_connect("localhost","zarkin","zarkadmdb") or die ("Fallo en el establecimiento de la conexión");

			#Seleccionamos la base de datos a utilizar
			mysql_select_db("zarkin_db") or die("Error en la selección de la base de datos");
			mysql_set_charset('utf8',$conexion);

			# ################################### #
			// $sql = "INSERT INTO garantias (clave, modelo_mueble,   composicion,        color,        tienda,         pais_t,       estado_t,       ciudad_t,       fecha_compra,   fecha_entrega,   forma_entrega,      nombre_cliente, a_paterno,      a_materno,         edad,   sexo,        direccion,        pais_c,     estado_c,       ciudad_c,      cp,        tel,        correo,       estado_civil,     estudios,       profesion,         personas,      ninos,         ingresos,        destino,        factor_compra, factor_tienda,    conocio_producto, forma_pago, gama,                informacion,           trato,                 entrega,               profesionalidad,       calidad,              calidad_precio,         sugerencia) ";
			// $sql.= "VALUES ('".$clave."', '".$modeloMueble."', '".$composicion."', '".$color."', '".$nTienda."', '".$paisT."', '".$estadoT."', '".$ciudadT."', '".$fcompra."', '".$fentrega."', '".$formEntrega."', '".$nombre."', '".$apellidoP."', '".$apellidoM."', '".$edad."', '".$sex."', '".$direccion."', '".$pais."', '".$estadoC."', '".$ciudadC."', '".$cp."', '".$tel."', '".$email."', '".$estCivil."', '".$estudio."', '".$profesion."', '".$personas."', '".$ninos."', '".$ingresos."', '".$destino."', '".$factorC."', '".$factorI."', '".$destino."', '".$pago."', '".$satisfCliente1."', '".$satisfCliente2."', '".$satisfCliente3."', '".$satisfCliente4."', '".$satisfCliente5."', '".$satisfCliente6."', '".$satisfCliente7."', '".$satisfCliente8."')";

			$sql = "INSERT INTO garantias (clave, modelo_mueble,   composicion,        color,        tienda,         pais_t,       estado_t,       ciudad_t,       fecha_compra,   fecha_entrega,   forma_entrega,      nombre_cliente, a_paterno,      a_materno,         edad,   sexo,        tel,        correo,      factor_compra, conocio_producto,           informacion,           trato,                 entrega,               profesionalidad,       calidad) ";
			$sql.= "VALUES ('".$clave."', '".$modeloMueble."', '".$composicion."', '".$color."', '".$nTienda."', '".$paisT."', '".$estadoT."', '".$ciudadT."', '".$fcompra."', '".$fentrega."', '".$formEntrega."', '".$nombre."', '".$apellidoP."', '".$apellidoM."', '".$edad."', '".$sex."', '".$tel."', '".$email."', '".$factorC."', '".$conocioProducto."', '".$satisfCliente2."', '".$satisfCliente3."', '".$satisfCliente4."', '".$satisfCliente5."', '".$satisfCliente6."')";

			mysql_query($sql, $conexion) or die(mysql_error());
			# ################################### #

			#Cerramos la conexión con la base de datos
			mysql_close($conexion);
			header('Refresh: 0; url=http:///www.zarkin.com/home');
			echo "<script>alert('Tus datos han sido guardados correctamente, da click en aceptar y seras redireccionado al sitio www.zarkin.com');</script>";
			 
			// echo "<script>location.href='http://www.zarkin.com/home';</script>";
			}
			

	}
?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo _path; ?>css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo _path; ?>css/formulario.css" />
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js"></script>
	<script type="text/javascript" src="<?php echo _path; ?>js/jquery.shuffleLetters.js"></script>
	<script type="text/javascript" src="<?php echo _path; ?>js/jquery.tinyscrollbar.min.js"></script>
	<script type="text/javascript" src="<?php echo _path; ?>js/jquery.waitforimages.js"></script>
	<script type="text/javascript" src="<?php echo _path; ?>js/lib.js"></script>
	<script type="text/javascript" src="<?php echo _path; ?>js/modernizr.custom.70149.js"></script>
	
	<script type="text/javascript" src="<?php echo _path; ?>js/vanadium/vanadium.js"></script>
	<script src="http://html5form.googlecode.com/svn/trunk/jquery.html5form-min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo _path; ?>js/vanadium/style.css" />
	
	<script type="text/javascript" src="<?php echo _path; ?>js/jquery.lightbox-0.5.js"></script>
	<script type="text/javascript" src="<?php echo _path; ?>js/procesar.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo _path; ?>css/jquery.lightbox-0.5.css" media="screen" />

	<style type="text/css">@import "css/jquery.datepick.css";</style> 
	<script type="text/javascript" src="js/jquery.datepick.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.date').datepick({dateFormat: 'yyyy-mm-dd'});
		
		
		$('.labora').click(function(){
			$('.tr-labora').show();
		});
		$('.labora2').click(function(){
			$('.tr-labora').hide();
		});
		
		
		$('.exp').click(function(){
			$('.tr-exp').show();
		});
		$('.exp2').click(function(){
			$('.tr-exp').hide();
		});				
	});

	function tecla(event){
		if(event.keyCode == 13){
			validar();
		}
	}

	function validar(){
		if (chkb('garantia', 'factorC', 'Tiene que seleccionar de 2 a 4 factores de compra.')) {
			// if (chkb('garantia', 'factorI', 'Tiene que seleccionar de 2 a 3 factores importantes en una tienda.')){
				// document.forms["garantia"].submit();
				document.forms["garantia"].btnSubmit.click()
			// }
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
				echo '<img src="'._path.'images/titulos/garantia.png" style="margin-top:-15px;" alt="garantia" />'; 
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
					<div class="viewport" >
						<div class="clear10px"></div>
						<div class="clear10px"></div>
						<div class="clear10px"></div>
						<div class="clear10px"></div>   
						<form name="garantia" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="on" onkeydown="javascript:tecla(event);">
							<h3>DATOS PARA EL REGISTRO</h3>
							<fieldset>
								<legend>INFORMACIÓN DEL PRODUCTO (requerido)</legend>                        
								<h3>Introduzca la clave de identificación localizada en la etiqueta debajo del mueble</h3>
								
								<ul>
									<li>
										<label for="garantia">Clave</label><br />
										<input type="text" maxlength="8" placeholder="Clave del mueble" name="clave" value="" class=":only_on_blur :required :min_length;7 :max_length;8 :integer" autofocus>
									</li>
									<li>
										<label for="garantia">Modelo del Mueble</label><br />
										<input type="text" maxlength="15" placeholder="Ej. Pionini" name="modeloMueble" value="" class=":only_on_blur :required">
									</li>

									<li>
										<label for="garantia">Composici&oacute;n</label><br />
										<input type="text" placeholder="" name="composicion" value="" class=":only_on_blur :required">
									</li>
									<li>
										<label for="garantia">Color</label><br />
										<input type="text" placeholder="Ej. Chocolate" name="color" value="" class=":only_on_blur :required">
									</li>
								</ul>
							</fieldset>

							<div class="clear10px"></div>
							<div class="clear10px"></div>

							<fieldset>
								<legend>INFORMACIÓN DE COMPRA (requerido)</legend>
								
								<ul>
									<li>
										<label for="garantia">Nombre de la tienda</label><br />
										<input type="text" placeholder="Ej. tutto pelle" name="nTienda" value="" class=":only_on_blur :required">
									</li>
									<li style="visibility:hidden;">
										<label for="garantia">País</label><br />
										<input type="text" placeholder="" name="paisT" value="Mexico">
									</li>
									<li>
										<label for="garantia">Estado</label><br />
										<select id="estadoT" name="estadoT">
											<?php											

												$conexion = mysql_connect("localhost","zarkin","zarkadmdb") or die ("Fallo en el establecimiento de la conexión");
												#Seleccionamos la base de datos a utilizar
												mysql_select_db("zarkin_db") or die("Error en la selección de la base de datos");
												// mysql_set_charset('utf8',$conexion);

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
										<label for="garantia">Ciudad</label><br />
										<div id="loader-garantia1" style="float:right; display:none;"><img  style="height:20px; width:20px;" src="http://www.zarkin.com/images/ajax-loader.gif" alt="loader" /></div>
										<select id="ciudadT" disabled name="ciudadT" class=":only_on_blur :required">
										</select>
									</li>									

									<li>
										<label for="garantia">Fecha de Compra</label><br />
										<input type="text" id="date" name="fcompra" class=":only_on_blur :required date campoChico" value="<?php echo strftime( "%Y-%m-%d", time() ); ?>" /></td>
										<!-- <input type="date" name="fcompra" required><br /> -->
									</li>
									<li>
										<label for="garantia">Fecha de Entrega</label><br />
										<input type="text" id="date" name="fentrega" class=":only_on_blur :required date campoChico" value="<?php echo strftime( "%Y-%m-%d", time() ); ?>" /></td>
										<!-- <input type="date" name="" required><br /> -->
									</li>
								</ul>

							</fieldset>

							<div class="clear10px"></div>
							<div class="clear10px"></div>

							<fieldset>
								<legend>FORMA DE ENTREGA (requerido)</legend>				
								<h3>¿Cu&aacute;l ha sido la forma de entrega de su producto Zarkin?</h3>				
								<ul>
									<li class=":only_on_blur :required">
										<input type="radio" name="formEntrega" value="Lo ha recogido y montado el mismo" checked>
										<label for="garantia">Lo he recogido y montado yo mismo</label><br />
										<input type="radio" name="formEntrega" value="La entrega y el montaje han corrido a cargo del distribuidor">
										<label for="garantia">La entrega y el montaje han corrido a cargo del distribuidor</label><br />
										<input type="radio" name="formEntrega" value="El distribuidor ha realizado la entrega y él el montaje">
										<label for="garantia">El distribuidor ha realizado la entrega y él el montaje</label><br />
									</li>
								</ul>
							</fieldset>

							<div class="clear10px"></div>
							<div class="clear10px"></div>

							<fieldset>
								<legend>INFORMACIÓN DEL CLIENTE</legend>
								
								<ul>
									<li>
										<label for="garantia">Nombre</label><br />
										<input type="text" placeholder="Jorge" name="nombre" value="" class=":only_on_blur :required">
									</li>
									
									<li>
										<label for="garantia">Apellido Paterno</label><br />
										<input type="text" placeholder="Rojas" name="apellidoP" value="" class=":only_on_blur :required">
									</li>
									
									<li>
										<label for="garantia">Apellido Materno</label><br />
										<input type="text" placeholder="" name="apellidoM" value="">
									</li>

									<li>
										<label for="garantia">Edad</label><br />							
										<select name="edad">
											<option value="< 25">Menor de 25 años</option>
											<option value="26 a 50">26 a 50 años</option>
											<option value="51 a 75">51 a 75 años</option>
											<option value="> 75">Mayor de 75 años</option>
										</select>
									</li>

									<li>
										<label for="garantia">Sexo</label><br />
										<label for="garantia">M</label><input type="radio" name="sex" value="Masculino" checked>
										<label for="garantia">F</label><input type="radio" name="sex" value="Femenino" >
									</li>
									
									<!-- <li>
										<label for="garantia">Fecha de Nacimiento</label><br />
										<input type="text" id="date" name="fnacimiento" class=":required date campoChico" value="<?php echo strftime( "%Y-%m-%d", time() ); ?>" /></td>
										<input type="date" name="" required>
									</li>

									<li>
										<label for="garantia">Direcci&oacute;n</label><br />
										<input type="text" placeholder="" name="direccion" value="" class=":required" >
									</li> 

									<li style="display:none;">
										<label for="garantia">Pais</label><br />
										<input type="text" placeholder="México" name="pais" value="Mexico">
									</li>
									
									<li>
										<label for="garantia">Estado</label><br />
										<select id="estadoC" name="estadoC"> -->
											<?php
												// $conexion = mysql_connect("localhost","zarkin","zarkadmdb") or die("Error en la conexion a la base de datos");
												// mysql_select_db("zarkin_db", $conexion);												

												// $estados = "SELECT * FROM estados";
												// $res_estados = mysql_query($estados,$conexion) or die(mysql_error());

												// echo "<option value=''>--Seleccione Estado--</option>";
												// while($estado = mysql_fetch_assoc($res_estados)){
												// 	echo '<option value="'.$estado['id_estado'].'">'.utf8_encode($estado['nombre_estado']).'</option>';
												// }
											?>
										<!-- </select>
									</li>
									
									<li>
										<label for="garantia">Ciudad</label><br />
										<div id="loader-garantia2" style="float:right; display:none;"><img  style="height:20px; width:20px;" src="http://www.zarkin.com/images/ajax-loader.gif" alt="loader"/></div>
										<select id="ciudadC" disabled name="ciudadC" class=":required">
										</select>
									</li>
															
									<li>
										<label for="garantia">Codigo Postal</label><br />
										<input type="text" placeholder="45000" name="cp" value="" class=":required :length;5 :integer" >
									</li> -->
									
									<li>
										<label for="garantia">Telefono</label><br />
										<input type="text" placeholder="Ej. 3319278448" name="tel" class=":only_on_blur :required :lenght;10 :integer" >
									</li>
									
									<li>
										<label for="garantia">E-mail</label><br />
										<input type="text" placeholder="Ej. ejemplo@dominio.com" name="email" value="" class=":only_on_blur :required :email" >
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
									<!--<li>
										<label for="garantia">Estado Civil:</label><br /> 
										<select name="estCivil">
										  <option value="Soltero/a">Soltero/a</option>
										  <option value="Casado/a">Casado/a</option>
										  <option value="Divorciado/a">Divorciado/a</option>
										  <option value="Otro">Otro</option>
										</select>
									</li>
									
									<li>
										<label for="garantia">Nivel de Estudio:</label><br />
										<select name="estudio">
											<option value="Primaria">Primaria</option>
											<option value="Secundaria">Secundaria</option>
											<option value="Bachillerato">Bachillerato</option>
											<option value="Licenciatura">Licenciatura</option>
											<option value="Postgrado">Postgrado</option>
										</select>
									</li>
									
									<div class="clear10px"></div>
									
									<li>
										<label for="garantia">Profesi&oacute;n</label><br />
										<input type="text" placeholder="" name="profesion" value="" class=":required">
									</li>
									
									<li>
										<label for="garantia">¿Cu&aacute;ntas personas viven con usted?</label><br />
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
										<label for="garantia">¿Qu&eacute; edad tienen los ni&ntilde;os menores de 15 a&ntilde;os que viven con usted?</label><br />
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
										<label for="garantia">¿Cuáles son los ingresos de su hogar al mes?<br />
											<h6 style="">Moneda: D&oacute;lar estadounidense</h6></label>
										
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
									
									<div class="clear10px" />
									<div class="clear10px"></div>-->
									
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
									
									<!-- <li>
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
									</li> -->
									
									<div class="clear10px"></div>
									<div class="clear10px"></div>
									
									<li>
										<label for="garantia">¿Cómo conoció los productos Zarkin?</label><br />							
										<select name="conocioProducto">
										  <option value="Publicidad">Publicidad</option>
										  <option value="Revistas/Periódicos">Revistas/Periódicos</option>
										  <option value="Internet">Internet</option>
										  <option value="Familiares y/o amigos">Familiares y/o amigos</option>								  
										  <option value="Tiendas departamentales">Tiendas departamentales</option>
										  <option value="Otro">Otro</option>
										</select>
									</li>
									
									<!-- <li> 
										<label for="garantia">¿Cómo ha pagado su producto Zarkin?</label><br />
										<select name="pago">
										  <option value="Efectivo">Efectivo</option>
										  <option value="Cheque">Cheque</option>
										  <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
										  <option value="Financiamiento">Financiamiento</option>
										</select>
									</li>-->

								</ul>
							</fieldset>
	
								<div class="clear10px"></div>
								<div class="clear10px"></div>						 

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
										<!-- <tr>
											<th>La gama de modelos, versiones, cubiertas y colores ¿se adaptan satisfactoriamente a sus requisitos?</th>
											<td><input type="radio" name="satisfCliente1" value="3" class=":required" ></td>
											<td><input type="radio" name="satisfCliente1" value="2" class=":required" ></td>
											<td><input type="radio" name="satisfCliente1" value="1" class=":required" ></td>
										</tr> -->
										<tr>
											<th>¿Está satisfecho con la información que recibió acerca del producto?</th>
											<td><input type="radio" name="satisfCliente2" value="3" checked></td>
											<td><input type="radio" name="satisfCliente2" value="2" ></td>
											<td><input type="radio" name="satisfCliente2" value="1" ></td>
										</tr>
										<tr>
											<th>¿Está satisfecho con de grado de competencia, profesionalidad y trato del personal de ventas?</th>
											<td><input type="radio" name="satisfCliente3" value="3" checked></td>
											<td><input type="radio" name="satisfCliente3" value="2" ></td>
											<td><input type="radio" name="satisfCliente3" value="1" ></td>
										</tr>
										<tr>
											<th>¿Está satisfecho con los plazos de entrega?</th>
											<td><input type="radio" name="satisfCliente4" value="3" checked></td>
											<td><input type="radio" name="satisfCliente4" value="2" ></td>
											<td><input type="radio" name="satisfCliente4" value="1" ></td>
										</tr>
										<tr>
											<th>¿Está satisfecho con la profesionalidad de personal de entrega y con el estado del producto a la entrega?</th>
											<td><input type="radio" name="satisfCliente5" value="3" checked></td>
											<td><input type="radio" name="satisfCliente5" value="2" ></td>
											<td><input type="radio" name="satisfCliente5" value="1" ></td>
										</tr>
										<tr>
											<th>¿Está satisfecho con la calidad del producto?</th>
											<td><input type="radio" name="satisfCliente6" value="3" checked></td>
											<td><input type="radio" name="satisfCliente6" value="2" ></td>
											<td><input type="radio" name="satisfCliente6" value="1" ></td>
										</tr>
										<!-- <tr>
											<th>¿Qué opina sobre la relación calidad/precio de nuestro producto?</th>
											<td><input type="radio" name="satisfCliente7" value="3" class=":required" ></td>
											<td><input type="radio" name="satisfCliente7" value="2" class=":required" ></td>
											<td><input type="radio" name="satisfCliente7" value="1" class=":required" ></td>
										</tr> -->
										<!-- <tr>
											<th>¿Tiene alguna sugerencia para mejorar nuestro servicio?</th>
											<td colspan="3"><textarea name="satisfCliente8" row="3" maxlength="250" value="N/A" class=":required"></textarea></td>
										</tr> -->
									</tbody>
								</table>								
							</fieldset>
							<input type="submit" value="Submit" align="center" style="display:none;" name="btnSubmit">
							<input type="button" value="Enviar" align="center" onClick="validar()" style="position:relative; top:20px; left:40px; width:100px; height:30px; margin-bottom:50px;">
						</form>
						
					</div>
				</div>
			</div>
		</div>
		<a href="<?php echo _path; ?>home">
			<div class="logo-dos">			
			</div>
		</a>
		<a style="z-index:100; float:right; position:relative; right:50px; bottom: 25px; text-decoration:none; color:#FFFFFF; font-size:12px; font-family:'HelveticaNeue45Light'; " href="http://collinscom.com" target="_blank">Collinscom.com</a>
	</body>
</html>