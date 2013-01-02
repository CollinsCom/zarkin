<?php session_start();
if(!isset($_SESSION['loginAdmin'])){
	header("Location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../css/admin.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="../css/superfish.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.8.10.custom.css" media="screen">
<title>Zarkin</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript" src="../js/hoverIntent.js"></script>
<script type="text/javascript" src="../js/superfish.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.js"></script>

<script type="text/javascript">
$(function($){
	$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '&#x3c;Ant',
		nextText: 'Sig&#x3e;',
		currentText: 'Hoy',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
		'Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
		dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
		weekHeader: 'Sm',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['es']);});
jQuery(function(){
	jQuery('ul.sf-menu').superfish();
});

function loading(){
	if($("#forma").valid()){
		$('#info').hide();
		$('#loading').show();
	}
}


function admin(que, cual){
	$.ajax({
		type: "POST",
		url: "info.php",
		data: "que="+que+"&cual="+cual,
		success: function(msg){
			$("#info").html(msg);
			
		
			$('.date').datepicker({
				  dateFormat: 'yy-mm-dd',
				  closeText: 'X',
				  changeYear: true,
				  yearRange: "-2:+2"
			 });
			$("#forma").validate({
				rules: {
					contrasena2: {
						equalTo: "#contrasena"
					}
				}
			});
		}	
	});	
}

function adminm(que, cual, idm){
	$.ajax({
		type: "POST",
		url: "info.php",
		data: "que="+que+"&cual="+cual+"&idm="+idm,
		success: function(msg){
			$("#info").html(msg);
			

			$('.date').datepicker({
				  dateFormat: 'yy-mm-dd',
				  closeText: 'X',
				  changeYear: true,
				  yearRange: "-2:+2"
			 });
			$("#forma").validate({
				rules: {
					contrasena2: {
						equalTo: "#contrasena"
					}
				}
			});
		}	
	});	
}

function eliminar(cual, idm){
	$.ajax({
		type: "POST",
		url: "borrar.php",
		data: "cual="+cual+"&idm="+idm,
		success: function(msg){
			admin('eliminar', cual);
		}	
	});	
}

function eliminarImagen(cual, idm, idi){
	$.ajax({
		type: "POST",
		url: "borrarImagen.php",
		data: "cual="+cual+"&idm="+idm+"&idi="+idi,
		success: function(msg){
			adminm('mod', cual, idm);
		}	
	});	
}

var numero=0;
addCampos = function () { 
	var nDiv = document.createElement('div');
   	nDiv.id = 'file' + (++numero);
   	var nCampo = document.createElement('input');
   	nCampo.name = 'imageng[]';
   	nCampo.type = 'file';
   	a = document.createElement('a'); 
  
  	x2= document.createElement('div');
  	x2.innerHTML='<div class="imgAdmin"><input class="required" name="imageng[]" type="file"/></div><div class="salto"></div>';
	
  	br= document.createElement('div');
  	br.innerHTML='<div style=\'clear:both;\'></div>';
  
  	a.name = nDiv.id;
	a.setAttribute('style', 'float:left; padding-right:10px; padding-top:5px; text-decoration:none;');
   	a.href = '#';
   	a.onclick = elimCamp;
   	a.innerHTML = 'X';
   	nDiv.appendChild(a);
   	nDiv.appendChild(x2);
	nDiv.appendChild(br);
   	container = document.getElementById('imagenes');
   	container.appendChild(nDiv);
}

evento = function (evt) {
   return (!evt) ? event : evt;
}

elimCamp = function (evt){
   evt = evento(evt);
   nCampo = rObj(evt);
   div = document.getElementById(nCampo.name);
   div.parentNode.removeChild(div);
}

rObj = function (evt) { 
   return evt.srcElement ?  evt.srcElement : evt.target;
}
var osi=1;
function masresp(){
	var div="<div id='in"+osi+"'><input type='text' name='respuestas[]' class='required'/></div><a href='#' onclick=\"javascript:$('#in"+osi+"').remove();$(this).remove(); return false;\">Borrar</a><div class='clear5px'></div>";
	$("#masresp").append(div);
	osi++;
	$("#forma").validate();
	}
var osi2=1;
function masresp2(){
	var div="<div id='in"+osi2+"'><input type='text' name='respuestas[]' class='resp' /></div><a href='#' onclick=\"javascript:$('#in"+osi2+"').remove();$(this).remove(); return false;\">Borrar</a><div class='clear5px'></div>";
	$("#masresp").append(div);
	osi++;
	$("#forma").validate();
	}
</script>
</head>
<body>
<div class="contenedorAdmin">
  <div class="logoAdmin">
    	<img src="../images/logoZarkin.png" />
  </div>
    
    <div class="menus">
    	<ul class="sf-menu">
        	
            
            <li class="current">
						<a href="#">Categor&iacute;as</a>
						<ul>
                        	<li class="current"><a href="#" onclick="javascript:admin('crear', 'categoria'); return false;">Crear</a></li>
							<li><a href="#" onclick="javascript:admin('modificar', 'categoria'); return false;">Modificar</a></li>
                            <li><a href="#" onclick="javascript:admin('eliminar', 'categoria'); return false;">Eliminar</a></li>
						</ul>
			</li>
            <li class="current">
						<a href="#">Colecciones</a>
						<ul>
                        	<li class="current"><a href="#" onclick="javascript:admin('crear', 'coleccion'); return false;">Crear</a></li>
							<li><a href="#" onclick="javascript:admin('modificar', 'coleccion'); return false;">Modificar</a></li>
                            <li><a href="#" onclick="javascript:admin('eliminar', 'coleccion'); return false;">Eliminar</a></li>
						</ul>
			</li>
            
			<li>
				<a href="cerrarSesion.php">Cerrar Sesi&oacute;n</a>
			</li>
		</ul>
    </div>
  	<div class="salto"></div>
    <div id="loading"><img src="../images/loadingAdmin.gif" /></div>
    <div class="info" id="info">
    <?php
		echo "<span class='tituloAdmin'>".$_SESSION['error']."</span>";
		unset($_SESSION['error']);	
	?>
</div>
    <div class="salto"></div>
</div>
</body>
</html>