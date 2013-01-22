<?php 

//***************************************************
//	Archivo de funciones para Zarkin
//	
//	*Este archivo contiene las funciones necesarias
//	para que funcione el sitio web, favor de no
//	borrar el contenido.
//***************************************************
 
	include_once('conexion.php');
	include_once('menu.php');
	
	define('_path','http://www.zarkin.com/');
?>

<?php
function get_head($titulo){
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<link rel="stylesheet" type="text/css" href="<?php echo _path; ?>css/style.css" />
				<link rel="shortcut icon" href="images/favicon.ico"/>
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js"></script>
				<script type="text/javascript" src="<?php echo _path; ?>js/jquery.shuffleLetters.js"></script>
				<script type="text/javascript" src="<?php echo _path; ?>js/jquery.tinyscrollbar.min.js"></script>
				<script type="text/javascript" src="<?php echo _path; ?>js/jquery.waitforimages.js"></script>
				<script type="text/javascript" src="<?php echo _path; ?>js/lib.js"></script>
				
				<script type="text/javascript" src="<?php echo _path; ?>js/vanadium/vanadium.js"></script>
				<link rel="stylesheet" type="text/css" href="<?php echo _path; ?>js/vanadium/style.css" />
				
				<script type="text/javascript" src="<?php echo _path; ?>js/jquery.lightbox-0.5.js"></script>
				<script type="text/javascript" src="<?php echo _path; ?>js/jquery.lightbox-0.5.2.js"></script>
				<link rel="stylesheet" type="text/css" href="<?php echo _path; ?>css/jquery.lightbox-0.5.css" media="screen" />
				<link rel="stylesheet" type="text/css" href="<?php echo _path; ?>css/jquery.lightbox-0.5.2.css" media="screen" />
				
				<!-- Ativando o jQuery lightBox plugin -->
				<script type="text/javascript">
					$(document).ready(function(){
						$('a.piel').lightBox();
						$('a.estilos').lightBox2();
					});
				</script>
				
				<title><?php echo $titulo; ?></title>
				
		</head>
<?php
}
?>



<?php
function fondo_animado($url){
?>
	<!-- PORTADA INDEX CON EFECTO -->
		<div class="bgtop">
				<img src="<?php echo _path.$url; ?>" class="bg top" alt=""  />
		</div>
		<div class="bgbot">
				<img src="<?php echo _path.$url; ?>" class="bg bot" alt="" />
		</div>
<?php
}
?>



<?php
function index(){
?>
		<body class="black">
			
				<?php fondo_animado('images/fondos/portada.jpg'); ?>
				
				<!-- PARA SELECCIONAR EL IDIOMA DEL SITIO -->
				<div class="idioma">
						<div class="logo"></div>
						<div class="links">
						<a href="<?php echo _path; ?>home" class="out">ENTRAR</a><!--|</span><a href="#" class="out">ITALIANO</a>-->
						</div>
				</div>
				
		</body>
		</html>
<?php
}
?>



<?php
function home(){
?>
	<body class="black">
			
				<?php fondo_animado('images/bg-home.jpg'); ?>
				
				<!-- HEADER -->
				<div class="barratop">
						<!--<div class="estilo"></div>-->
				</div>
				<div class="titulos">
					<?php
			echo '<img src="'._path.'images/titulos/siente-vive-piel.png" style="margin-top:-15px;" />'; 
			?>
						<div class="clear"></div>
				</div>
				
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				
				<!-- MENU -->
				<?php get_menu(); ?>
		</body>
		</html>
<?php
}
?>


<?php
function bienvenido(){
?>
	<?php fondo_animado('images/fondos/alterno.jpg'); ?>
		<body class="black">
				
				<!-- HEADER -->
				<div class="barratop"></div>
				<div class="barra"></div>
				<div class="titulos">
					<?php
			echo '<img src="'._path.'images/titulos/bienvenido.png" style="margin-top:-15px;" />'; 
			?>
						<div class="clear"></div>
				</div>
				
				
				<!-- CONTENIDO -->
				<div class="bienvenido" style="background:url(<?php echo _path; ?>images/bg-black5.png) repeat-x;" >
					<div class="viewport">
							<div class="clear10px"></div>
								<!--<div class="clear10px"></div>
								<div class="clear10px"></div>-->
								<p>Bienvenido a <strong>Zarkin</strong>, un mundo de calidad y distinci&oacute;n en piel.</p> 
								<p>Somos los especialistas en muebles tapizados en piel 100% genuina con m&aacute;s de 28 a&ntilde;os de experiencia en el mercado nacional e internacional.</p>
								<p>Cada mueble <strong>Zarkin</strong> es elaborado cuidadosamente utilizando materiales de la m&aacute;s alta calidad. Selectas pieles recubren obras de arte hechas a mano, que representan lo mejor del dise&ntilde;o internacional.</p>
							 <p> La belleza natural de nuestra colecci&oacute;n, es producto de la experiencia de nuestros artesanos que se esmeran para que cada pieza refleje un gusto exquisito por el dise&ntilde;o, la calidad y distinci&oacute;n.Al adquirir un mueble <strong>Zarkin</strong>, usted puede estar seguro de que obtendr&aacute; para su hogar una pieza &uacute;nica e irrepetible.</p>
								<p style="font-size:18px;">Proceso de Fabricaci&oacute;n</p>
								<a class="piel" href="<?php echo _path; ?>images/empresa01.png"><img src="<?php echo _path; ?>images/empresa-zoom01.jpg" style="float:left; margin: -5px 10px 10px 0; width:60px; height:60px; border:#FFFFFF solid 1px;" /></a>
								<a class="piel" href="<?php echo _path; ?>images/empresa02.jpg"><img src="<?php echo _path; ?>images/empresa-zoom02.jpg" style="float:left; margin: -5px 10px 10px 0; width:60px; height:60px; border:#FFFFFF solid 1px;" /></a>
								<a class="piel" href="<?php echo _path; ?>images/empresa03.jpg"><img src="<?php echo _path; ?>images/empresa-zoom03.jpg" style="float:left; margin: -5px 10px 10px 0; width:60px; height:60px; border:#FFFFFF solid 1px;" /></a>
								<a class="piel" href="<?php echo _path; ?>images/empresa04.jpg"><img src="<?php echo _path; ?>images/empresa-zoom04.jpg" style="float:left; margin: -5px 10px 10px 0; width:60px; height:60px; border:#FFFFFF solid 1px;" /></a>
								<a class="piel" href="<?php echo _path; ?>images/empresa05.jpg"><img src="<?php echo _path; ?>images/empresa-zoom05.jpg" style="float:left; margin: -5px 10px 10px 0; width:60px; height:60px; border:#FFFFFF solid 1px;" /></a>
								<a class="piel" href="<?php echo _path; ?>images/empresa06.jpg"><img src="<?php echo _path; ?>images/empresa-zoom06.jpg" style="float:left; margin: -5px 10px 10px 0; width:60px; height:60px; border:#FFFFFF solid 1px;" /></a>
								<a class="piel" href="<?php echo _path; ?>images/empresa07.jpg"><img src="<?php echo _path; ?>images/empresa-zoom07.jpg" style="float:left; margin: -5px 10px 10px 0; width:60px; height:60px; border:#FFFFFF solid 1px;" /></a>
								<a class="piel" href="<?php echo _path; ?>images/empresa08.jpg"><img src="<?php echo _path; ?>images/empresa-zoom08.jpg" style="float:left; margin: -5px 10px 10px 0; width:60px; height:60px; border:#FFFFFF solid 1px;" /></a>
			</div>
				</div>
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				
				<!-- MENU -->
				<?php get_menu(); ?>
		</body>
		</html>
<?php
}
?>


<?php
function grupo_zarkin(){
?>
	<body class="black">
			
				<?php fondo_animado('images/fondos/empresa.jpg'); ?>
				
				<!-- HEADER -->
				<div class="barratop"></div>
				<div class="barra"></div>
				<div class="titulos">
					GRUPO <span><strong>Zarkin</strong></span> 
						<div class="clear"></div>
				</div>
				
				<!-- CONTENIDO -->
				<div class="bienvenido">
					<div class="viewport">
								<!--<span>Grupo <strong>Zarkin</strong></span>-->
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div>                
								<p>Bienvenido a <strong>Zarkin</strong>, un mundo de calidad y distinci&oacute;n en piel. </p>
								<p>Somos los especialistas en muebles tapizados en piel 100% genuina con m&aacute;s de 28 a&ntilde;os de experiencia en el mercado nacional e internacional.</p>
								<p>Cada mueble <strong>Zarkin</strong> es elaborado cuidadosamente utilizando materiales de la m&aacute;s alta calidad. Selectas pieles recubren obras de arte hechas a mano, que representan lo mejor del dise&ntilde;o internacional.</p>
								<p>La belleza natural de nuestra colecci&oacute;n, es producto de la experiencia de nuestros artesanos que se esmeran para que cada pieza refleje un gusto exquisito por el dise&ntilde;o, la calidad y distinci&oacute;n.</p> 
								<p>Al adquirir un mueble <strong>Zarkin</strong>, usted puede estar seguro de que obtendr&aacute; para su hogar una pieza &uacute;nica e irrepetible.</p>

					</div>
				</div>
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				
				<!-- MENU -->
				<?php get_menu(); ?>
		</body>
		</html>

<?php
}
?>




<?php
function caracteristicas_piel(){
?>
		<body class="black">
				<?php fondo_animado('images/fondos/pieles.jpg'); ?>
				
				<!-- HEADER -->
				<div class="barratop"></div>
				<div class="barra"></div>
				<div class="titulos">
					<?php
			echo '<img src="'._path.'images/titulos/tipos-piel.png" style="margin-top:-15px;" />'; 
			?>
						<div class="clear"></div>
				</div>
				
				
				<!-- CONTENIDO -->
				<div class="bienvenido" style="background:url(<?php echo _path; ?>images/bg-black4.png) repeat-x;">    
						<!-- VIEWPORT -->
						<div class="viewport">
							<p>
									Dependiendo de la calidad de la piel se pueden observar sus caracter&iacute;sticas en mayor o menor medida. La piel se somete a varios procesos que la transforman en piel para muebles, por eso es muy importante dar mantenimiento preventivo a sus muebles de piel oportunamente para que permanezcan y duren como nuevos por mucho tiempo.
								</p>
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								
								<div style="width:50%; float:left; margin-bottom:20px; font-size:14px;">
									<a href="<?php echo _path; ?>images/pieles/pigmentada.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/01.jpg" style="width:100px; height:100px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel pigmentada" /></a>
									<div style="height:30px;"></div>
										<p>Piel pigmentada</p>
								</div>
								<div style="width:50%; float:left; margin-bottom:20px; font-size:14px;">
									<a href="<?php echo _path; ?>images/pieles/semianilina.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/02.jpg" style="width:100px; height:100px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel semi-anilina" /></a>
										<div style="height:30px;"></div>
									<p>Piel semi-anilina</p>
								</div>
								<div style="width:50%; float:left; margin-bottom:20px; font-size:14px;">
									<a href="<?php echo _path; ?>images/pieles/anilina.jpg" class="piel" ><img src="<?php echo _path; ?>images/pieles/03.jpg" style="width:100px; height:100px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel anilina" /></a>
										<div style="height:30px;"></div>
									<p>Piel anilina</p>
								</div>
								<div style="width:50%; float:left; margin-bottom:20px; font-size:14px;">
									<a href="<?php echo _path; ?>images/pieles/nobuk.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/04.jpg" style="width:100px; height:100px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Nobuk" /></a>
										<div style="height:30px;"></div>
									<p>Piel nobuk</p>
								</div>
								
						</div>
				</div>
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				
				<!-- MENU -->
				<?php get_menu(); ?>
		</body>
		</html>
<?php
}
?>




<?php
function acabados_especiales(){
?>
	<body class="black">
				<?php fondo_animado('images/fondos/pieles.jpg'); ?>
				
				<!-- HEADER -->
				<div class="barratop"></div>
				<div class="barra"></div>
				<div class="titulos">
					<?php
			echo '<img src="'._path.'images/titulos/acabados-especiales.png" style="margin-top:-15px;" />'; 
			?>
						<div class="clear"></div>
				</div>
						
				
				<!-- CONTENIDO -->
				<div class="bienvenido" style="background:url(<?php echo _path; ?>images/bg-black4.png) repeat-x;">
					
					
						
						<!-- VIEWPORT -->
						<div class="viewport-pieles text-izq">
								
								<div class="overview">
									<div class="clear10px"></div>
									<p style="text-align:left; width:100% !important;">Todas las pieles de res poseen como caracter&iacute;stica la durabilidad y poca exigencia en cuidados. Sin embargo, son pr&aacute;cticamente un elemento vivo y como tal, son sensibles a agentes agresivos. Por ello, nunca utilice en su mueble l&iacute;quidos anti-manchas, aguarr&aacute;s u otros similares que puedan da&ntilde;arlo permanentemente. </p>
												<div class="clear10px"></div>
												<div class="clear10px"></div>
												<div class="clear10px"></div>
												<div class="clear10px"></div>
											<div class="clear10px"></div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/envejecida.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-envejecida.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel envejecida" /></a>
														<p>Piel envejecida</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/brillante.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-brillante.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
														<p>Piel brillante</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/granonatural2.jpg" class="piel" ><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-granonaturalv.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="piel grano natural" /></a>
														<p>Piel grano natural</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/granonatural.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-granonatural.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel grano nautral" /></a>
														<p>Piel grano natural gran vol&uacute;men</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/pullup.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-pullup.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel pullup" /></a>
														<p>Piel pullup</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/perlada.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-anilinaperlada.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel anilina perlada" /></a>
														<p>Piel anilina perlada</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/bycast.jpg" class="piel" ><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-bycast.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
														<p>Piel by cast</p>
												</div>
										</div>
										
										<div class="clear"></div>	                          
								</div>
					</div>		
				</div>
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				
				<!-- MENU -->
				<?php get_menu(); ?>
		</body>
		</html>
<?php
}
?>


<?php
function marcas_naturales(){
?>
	<body class="black">
		<?php fondo_animado('images/fondos/pieles.jpg'); ?>
		
			<!-- HEADER -->
			<div class="barratop"></div>
				<div class="barra"></div>
				<div class="titulos">
					<?php
			echo '<img src="'._path.'images/titulos/marcas-naturales.png" style="margin-top:-15px;" />'; 
			?>
						<div class="clear"></div>
				</div>
			
				 
				
				<!-- CONTENIDO -->
			<div class="bienvenido" style="background:url(<?php echo _path; ?>images/bg-black4.png) repeat-x;">
				<!--<span>Marcas de la naturaleza</span>-->
					<div class="clear10px"></div>
					<div class="clear10px"></div>
					<div class="clear10px"></div>
					
	
						<!-- VIEWPORT -->
						<div class="viewport-pieles text-izq">
								<div class="overview">
										<p style="text-align:left; width:100% !important;">En las fotograf&iacute;as mostramos diversas marcas de la naturaleza. Estos sellos no disminuyen la calidad, al contrario, subrayan la autenticidad de la piel y demuestran la fortaleza de la piel natural.</p>
										<div class="clear"></div>
										
										<div class="clear10px"></div>
												<div class="clear10px"></div>
												<div class="clear10px"></div>
												<div class="clear10px"></div>
											<div class="clear10px"></div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/manchas.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas_manchas.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Manchas de abono" /></a>
														<p>Manchas de abono</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/pliegues.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas-pliegues.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Pliegues" /></a>
														<p>Pliegues de ensanche</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/venas.jpg" class="piel" ><img src="<?php echo _path; ?>images/pieles/zoom-marcas-venas.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Venas" /></a>
														<p>Venas y rasgaduras</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/cicatrices.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas_cicatrices.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Cicatrices" /></a>
														<p>Cicatrices</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/grietas.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas_grietas.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Grietas" /></a>
														<p>Grietas por roce</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/callos.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas_callos.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Callos" /></a>
														<p>Callos</p>
												</div>
												<div style="width:50%; height:50px; float:left; margin-bottom:10px; font-size:14px;">
														<a href="<?php echo _path; ?>images/pieles/danos.jpg" class="piel" ><img src="<?php echo _path; ?>images/pieles/zoom-marcas_danos.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Da&ntilde;os" /></a>
														<p>Da&ntilde;os por alambres de p&uacute;as</p>
												</div>
										</div>
										
										<div class="clear"></div>
								</div>
						</div>
				</div>
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				
				<!-- MENU -->
				<?php get_menu(); ?>
</body>
</html>
<?php
}
?>


<?php
function garantia(){
?>
		<body class="black">
				<?php fondo_animado('images/fondos/garantia.jpg'); ?>
				
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
				<div class="bienvenido">
				<!--<span>Marcas de la naturaleza</span>-->
				<div class="clear10px"></div>
				<div class="clear10px"></div>
				<div class="clear10px"></div>
				<div id="scrollbar1">				
					<!-- SCROLLBAR -->
					<div class="scrollbar">
						<div class="track">
							<div class="thumb">
								<div class="end"></div>
							</div>
						</div>
					</div>

				<!-- VIEWPORT -->
						<div class="viewport text-izq">
							<div class="overview">																			
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div>                                           
								<p>Felicidades usted ahora es poseedor de un mueble &uacute;nico e irrepetible, un <strong>Zarkin</strong>.</p>
								<p>Registrar su garant&iacute;a es muy sencillo:</p>
								
								<ol>
									<li>Ingrese <a href="#" style="color:#FFFFFF; "><strong>aqu&iacute;</strong></a> y complete los datos que se le solicita.</li>
									<li>Favor de no registrar la garant&iacute;a en un plazo mayor a treinta (30) d&iacute;as a partir de la fecha de entrega de su mueble.</li>
									<li>No retire la etiqueta que contiene la clave del mueble, pues la garant&iacute;a quedar&aacute; inv&aacute;lida.</li>
								</ol>									
								<p>Le rogamos lea atentamente los <a href="<?php echo _path; ?>archivos/condiciones.pdf" target="_blank" style="color:#FFFFFF; "><strong>t&eacute;rminos y condiciones</strong></a> de la presente garant&iacute;a antes de realizar su registro.</p>								
							</div>
						</div>
					</div>
				</div>
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				
				<!-- MENU -->
				<?php get_menu(); ?>
		</body>
		</html>
<?php
}
?>



<?php
function faq(){
?>
		<body class="black">
				<?php fondo_animado('images/fondos/faq.jpg'); ?>
				
				<!-- HEADER -->
				<div class="barratop"></div>
				<div class="barra"></div>
				<div class="titulos">
						<?php 
			echo '<img src="'._path.'images/titulos/faq.png" style="margin-top:-15px;" />'; 
			?>
						<div class="clear"></div>
				</div>
				
		<!-- CONTENIDO -->
				<div class="bienvenido">
				<!--<span>Marcas de la naturaleza</span>-->
						<div class="clear10px"></div>
						<div class="clear10px"></div>
						<div class="clear10px"></div>
						<div id="scrollbar1">
						
								<!-- SCROLLBAR -->
								<div class="scrollbar">
										<div class="track">
												<div class="thumb">
														<div class="end"></div>
												</div>
										</div>
								</div>
		
						<!-- VIEWPORT -->
								<div class="viewport text-izq">
										<div class="overview">
																																									 
												<p style="font-size:18px;">1 - ¿Por qu&eacute; comprar un mueble de piel?</p>
												<p>Los muebles de piel ofrecen la sensaci&oacute;n de suavidad natural de "la piel sobre piel", ya que es de origen natural, la piel contiene poros y transpira, abriga en el invierno y es fresca en el verano. La piel se acomoda a una forma y aunque se estire, no pierde su estructura b&aacute;sica. Se amolda al cuerpo y se hace m&aacute;s confortable con el uso.</p>
												<p>La piel tiene sus propias marcas que la caracterizan, las cuales convierten a su mueble inigualable en su tipo, es decir, su belleza es &uacute;nica. Las caracter&iacute;sticas f&iacute;sicas de cada piel son un sello que denota su autenticidad haciendo de su sala una pieza &uacute;nica e irrepetible. La piel de calidad emite un aroma fresco y limpio, que s&oacute;lo la piel genuina posee. La piel es de f&aacute;cil cuidado y mantenimiento.</p>
												<div class="clear10px"></div>  
												
												<p style="font-size:18px;">2 - Diferencias entre Piel y Vinil</p>
												<p>La piel es el material de tapicer&iacute;a que m&aacute;s perdura, es naturalmente resistente al fuego, no se quema ni se derrite f&aacute;cilmente y es muy dif&iacute;cil de perforar. La piel embellece con los años y el uso, es m&aacute;s suave y c&oacute;moda .La piel  tiene alta resistencia contra rasguños o rasgaduras y la humedad nunca permanece sobre su superficie.</p>
											 <p>El mueble de vinil con el paso del tiempo, se deteriora cambiando su color y se rompe f&aacute;cilmente, como no es un producto natural, es un gasto no una inversi&oacute;n.</p>
										<div class="clear10px"></div>          
												
												<p style="font-size:18px;">3 - ¿Cu&aacute;nta vida tiene un mueble de piel?</p>
												<p>Los muebles tapizados 100% en piel tienen un promedio de durabilidad hasta cuatro veces mayor que los tapizados con cualquier otro material.
												El mueble de vinil con el paso del tiempo, se deteriora cambiando su color y se rompe f&aacute;cilmente, como no es un producto natural, es un gasto no una inversi&oacute;n.</p>
												<div class="clear10px"></div> 
												
												<p style="font-size:18px;">4 - ¿D&oacute;nde puedes comprar un mueble Zarkin?</p>
												<p>Puedes encontrar nuestros muebles en todas las sucursales de Tutto Pelle, Liverpool, Palacio de Hierro, Sear, Frey y las m&aacute;s prestigiosas boutiques del pa&iacute;s.</p>
												<div class="clear10px"></div> 
												
												
												<p style="font-size:18px;">5 - ¿C&oacute;mo hacer valida mi garant&iacute;a?</p>
												<p>Para hacer valida tu garant&iacute;a debes ingresar en el sitio www.zarkin.com/garant&iacute;a  e ingrese los datos que se le solicita.
												Para que esta garant&iacute;a sea v&aacute;lida, favor de registrarla en un plazo m&aacute;ximo de treinta (30) d&iacute;as a partir de la fecha de entrega.
												Es importante no retirar la etiqueta que contiene la clave del mueble, pues la garant&iacute;a quedar&aacute; inv&aacute;lida. </p>
												<div class="clear10px"></div> 
												
												<p style="font-size:18px;">6 - ¿Necesitas apoyo con tu mueble?</p>
												<p>Comun&iacute;cate al centro de atenci&oacute;n <strong>Zarkin</strong>, a los tel&eacute;fonos: <br />
												Guadalajara: (33) 3811 8280<br />
												Resto de la Rep&uacute;blica: (55) 2623 0680<br />  
												O al correo electr&oacute;nico: contacto@zarkin.com<br /> 
												De 8:00 am a 18:00 pm</p>
												
								
										
										
										</div>
								</div>
						</div>
				</div>
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				
				<!-- MENU -->
				<?php get_menu(); ?>
		</body>
		</html>
<?php
}
?>



<?php
function contacto(){
?>
	<body class="black">
				<?php fondo_animado('images/fondos/contacto.jpg'); ?>
			
				<!-- HEADER -->
			<div class="barratop"></div>
				<div class="barra"></div>
				<div class="titulos">
					<?php
			echo '<img src="'._path.'images/titulos/contacto.png" style="margin-top:-15px;" />'; 
			?>
						<div class="clear"></div>
				</div>
			
				<!-- CONTENIDO -->
				<div class="bienvenido">
					<div class="viewport">
								<!--<span>Cont&aacute;ctanos</span>-->
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								<p>
									<?php
										if($_GET){
						if($_GET['contacto']){
							if($_GET['contacto']==1){
								echo '<script>alert("Hemos recibido su mensaje. Gracias por contactarnos.")</script>';
							}else{
								echo '<script>alert("Error: el mensaje no se pudo enviar")</script>';
							}
						}
					}
					?>
									<form method="post" action="<?php echo _path; ?>send-email.php">
											<label>Nombre:</label><br />
												<input type="text" id="nombre" name="nombre" class=":required" /><br />
												<label>Ciudad:</label><br />
												<input type="text" id="ciudad" name="ciudad" class=":required" /><br />
												<label>Correo:</label><br />
												<input type="text" id="correo" name="correo" class=":required :email :only_on_blur" /><br />
												<label>Comentario:</label><br />
												<textarea id="comentario" name="comentario" class=":required" ></textarea><br />
												<input type="submit" value="Enviar" name="enviar" id="enviar" />
										</form>
										<br />
									 Guadalajara (33) 3811 8280 / Resto de la Rep&uacute;blica (55) 2623 0680
								</p>
					</div>
			</div>
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
		
			<!-- MENU -->
			<?php get_menu(); ?>
		</body>
		</html>
<?php
}
?>


<?php
function colecciones($categoria){
?>
	<body class="black">
				<?php 
		if($categoria != 'expo'){ 
			fondo_animado('images/fondos/coleccion.jpg'); 
		}else{
			fondo_animado('coleccion/expo/expo-2009/2009_01.jpg'); 
		}	
		?>
				
				<!-- HEADER -->
			<div class="barratop"></div>
				
				<!-- CONTENIDO -->
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				<div class="titulos">
					<!--COLECCI&Oacute;N <span><?php //echo $categoria_titulo = nombre_categoria($categoria); ?></span>-->
						<?php 
			$imgCategoria = nombre_categoria($categoria);
			echo '<img src="'._path.'images/titulos/'.$imgCategoria.'" style="margin-top:-15px;" />'; 
			?>
						<div class="clear"></div>
				</div>
				
				<?php
					$link = conectar();
			
			$cat = "SELECT id FROM categorias WHERE categorias.nombre = '".$categoria."';";
			$resultado_cat = mysql_query($cat,$link);
			
			$cat_id = mysql_fetch_assoc($resultado_cat);
			
			
			$thumbs = "SELECT modelos.nombre FROM modelos WHERE modelos.categoria_id = ".$cat_id['id']." ORDER by modelos.id ASC;";
			$resultado = mysql_query($thumbs,$link);
			
			echo '<div class="cole-thumbs">';
			
			while($thumb = mysql_fetch_assoc($resultado)){
				$zoom = explode('_', $thumb['nombre']);
				
				echo '<div class="thumb">';
				echo '<a href="'._path.'galeria/'.$categoria.'/'.$thumb['nombre'].'"><img src="'._path.'coleccion/'.$categoria.'/zoom/'.$zoom[0].'_zoom.jpg" alt="" /></a>';
				echo '</div>';
			}
			
			echo '</div>';
			
		?>
				
				<!-- MENU -->
			<?php get_menu(); ?>
		</body>
		</html>
<?php
}
?>



<?php
function galeria($categoria, $modelo){
?>
	<body class="black">
			
				<?php
			$titulo_mod = explode('_',$modelo);
			
					$link = conectar();
			
			$mod = "SELECT modelos.id FROM modelos WHERE modelos.nombre ='".$modelo."';";		
			$resultado_mod = mysql_query($mod,$link);
			
			$mod_id = mysql_fetch_assoc($resultado_mod);
			
			$imagenes = "SELECT imagenes.ruta FROM imagenes WHERE imagenes.modelo_id ='".$mod_id['id']."';";
			$resultado_img = mysql_query($imagenes,$link); echo $imagenes;
			
			$fondo = mysql_fetch_assoc($resultado_img);
		?>
		
		<?php
			if($categoria != 'expo'){ 
				fondo_animado('coleccion/'.$categoria.'/'.$fondo['ruta']); 
			}else{
				fondo_animado('coleccion/'.$categoria.'/'.$modelo.'/'.$fondo['ruta']); 
			}
		?>
				
				<!-- HEADER -->
			<div class="barratop"></div>
		
				</div>
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				<div class="titulos">
						<!--<?php  $categoria_titulo = nombre_categoria($categoria); ?>?></span>-->
						
						<?php
			if($categoria == 'complementos'){
				echo '<img src="'._path.'images/titulos/c'.$titulo_mod[0].'.png" style="margin-top:-15px;" />'; 
			}else{
				echo '<img src="'._path.'images/titulos/'.$titulo_mod[0].'.png" style="margin-top:-15px;" />'; 
			}
			
			?>
						<a href="<?php echo _path.'colecciones/'.$categoria; ?>" class="updown"><span style="font-size:18px;"></span>VOLVER</a>
				</div>
				<div class="flechader">
						<a href="" class="next nex"></a>
				</div>
				<div class="flechaizq">
						<a href="" class="next pre"></a>
				</div>
				<script type="text/javascript">
			var fotos=new Array();
			
			<?php
			if($categoria != 'expo'){
				while($galeria = mysql_fetch_assoc($resultado_img)){
					echo 'fotos.push("'._path.'coleccion/'.$categoria.'/'.$galeria['ruta'].'");';
				}
				echo 'fotos.push("'._path.'coleccion/'.$categoria.'/'.$fondo['ruta'].'");';
			}else{
				while($galeria = mysql_fetch_assoc($resultado_img)){
					echo 'fotos.push("'._path.'coleccion/'.$categoria.'/'.$modelo.'/'.$galeria['ruta'].'");';
				}
				echo 'fotos.push("'._path.'coleccion/'.$categoria.'/'.$modelo.'/'.$fondo['ruta'].'");';
			}
			?>
			if((fotos.length) == 1){
				$('.flechader').hide();
				$('.flechaizq').hide();
			}else{
				$('.flechaizq').hide();
			}
	
				</script>
				
		<!-- MENU -->
			<?php get_menu(); ?>
		</body>
		</html>
<?php
}
?>

<?php
function estilos_tendencias(){
?>
		<body class="black">
				
				<?php fondo_animado('images/fondos/interiorismo.jpg'); ?>
				
				<!-- HEADER --> 
				<div class="barratop">
						<!--<div class="estilo"></div>-->
				</div>
				<div class="titulos">
						<?php
						echo '<img src="'._path.'images/titulos/estilo-tendencias.png" style="margin-top:-15px;/>'; 
						?>
						<div class="clear"></div>
				</div>
				
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				
				<!-- CONTENIDO -->
				<div class="bienvenido" style="padding-bottom:0px;">
				<!--<span>Marcas de la naturaleza</span>-->
					<div id="menu-estilos">
						<div>
							<ul>
								<li style="width:125px;"><a href="images/estilos/contemporaneo.jpg" class="estilos">Contemporáneo</a></li> <span>|</span>
								<li style="width:95px;"><a href="images/estilos/minimalista.jpg" class="estilos">Minimalista</a></li><span>|</span>
								<li style="width:55px;"><a href="images/estilos/hitek.jpg" class="estilos">Hi-tek</a></li><span>|</span>
								<li style="width:125px;"><a href="images/estilos/american.jpg" class="">American Style</a></li><span>|</span>
								<li style="width:65px;"><a href="images/estilos/clasico.jpg" class="estilos">Clásico</a></li><span>|</span>
								<li style="width:55px;"><a href="images/estilos/etnico.jpg" class="estilos">Étnico</a></li><span>|</span>
								<li style="width:65px;"><a href="images/estilos/vintage.jpg" class="">Vintage</a></li>
							</ul>
						</div>
					</div>
					<!-- <div class="clear10px"></div>
					<div class="clear10px"></div>
					<div class="clear10px"></div> -->
					<div id="scrollbar1">				
						<!-- SCROLLBAR -->
					<div class="scrollbar">
						<div class="track">
							<div class="thumb">
								<div class="end"></div>
							</div>
						</div>
					</div>

				<!-- VIEWPORT -->
						<div class="viewport text-izq" style="margin-left:10px;">			
							<!-- style="height: 220px; width: 555px; margin:5px 50px;"-->
							<div class="overview">																			
								<!-- <div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div> -->
								
								<p>La forma de adornar o distribuir los espacios en un hogar, departamento u oficina se logra con la colocación de diversos objetos, los cuales trabajan de forma armónica para crear una sensación agradable a la vista y un ambiente funcional de acuerdo a la forma y estilo de vida de cada persona.</p>
								<p>Para crear estos espacios únicos es necesario poner en practica la creatividad para analizar el entorno, formas, composiciones, colores, establecer una dirección conceptual, indagar en aspectos de la psicología ambiental, arquitectura, diseño de producto, apoyándonos en gran parte de los estilos o influencias que cada uno hace propios. Hay estilos de mayor preferencia como son el estilo contemporáneo, minimalista, Hi-tek, vintage, étnico, conutry deccor y clásico.</p>                                         
								<p><strong></strong></p>
								<p></p>
							</div>							
						</div>
											
				</div>
				<div id="pleca-tmb">
						<div>
							<img id="flecha-izq" src="images/flecha_izq.png" alt="flecha" />									
							<div>
								<img id="tmb-estilos" src="images/estilos-tbm.jpg" alt="ejemplo de estilos" />
							</div>
							<img id="flecha-der" src="images/flecha_der.png" alt="flecha" />
						</div>
					</div>
				</div>
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>

				<!-- MENU -->
				<?php get_menu(); ?>

				
		</body>
		</html>
<?php
}
?>

<?php
function interiorismo(){
?>
		<body class="black">				
				<?php fondo_animado('images/fondos/interiorismo.jpg'); ?>				
				<!-- HEADER -->
				<div class="barratop">
						<!--<div class="estilo"></div>-->
				</div>
				<div class="titulos">
						<?php
						echo '<img src="'._path.'images/titulos/consejos-interiorismo.png" style="margin-top:-15px; />'; 
						?>
						<div class="clear"></div>
				</div>
				
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>				
				<!-- CONTENIDO -->
				<div class="bienvenido" style="padding-bottom:0px;">
				<!--<span>Marcas de la naturaleza</span>-->
					<!-- <div id="menu-interiorismo">
						<div>
							<ul>
								<li><a href="images/estilos/contemporaneo.jpg" class="estilos">Contemporáneo</a></li>
								<li><a href="images/estilos/minimalista.jpg" class="estilos">|  Minimalista</a></li>
								<li><a href="images/estilos/hitek.jpg" class="estilos">|  Hi-tek</a></li>
								<li><a href="images/estilos/country.jpg" class="estilos">|  Conutry Deccor</a></li>
								<li><a href="images/estilos/clasico.jpg" class="estilos">|  Clásico</a></li>
								<li><a href="images/estilos/etnico.jpg" class="estilos">|  Étnico</a></li>
								<li><a href="images/estilos/vintage.jpg" class="estilos">|  Vintage</a></li>
							</ul>
						</div>
					</div> -->
					<!-- <div class="clear10px"></div>
					<div class="clear10px"></div>
					<div class="clear10px"></div> -->
					<div id="scrollbar1" style="width:660px;">
						<!-- SCROLLBAR -->
						<!-- <div class="scrollbar" style="width:660px;">
							<div class="track">
								<div class="thumb">
									<div class="end"></div>
								</div>
							</div>
						</div> -->
						<!-- VIEWPORT -->
						<div class="viewport" style="margin:0;">
							<div class="overview">																			
								<!-- <div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div>
								<div class="clear10px"></div> -->								
								<p>Si vas a estrenar, cambiar o innovar tu casa u oficina necesitas tener una visión general de lo que quieres antes de conseguir los elementos necesarios para lograr ambientes bien armonizados.</p>
								<p>Tomas en cuenta las siguientes ideas para lograr el cambio perfecto de tu espacio:</p>                                         
								<!--<p><strong></strong></p>
								<p></p>-->
							</div>							
						</div>											
					</div>
					<div id="pleca-tmb-interiorismo">
						<div>									
							<div id="menu-interiorismo">
								<!-- <div> -->
									<a class="estilos" href="images/interiorismo/CasaUoficina.jpg" >Tu casa u oficina con elegancia y buen gusto</a>
									<a class="estilos" href="images/interiorismo/noImage.jpg" >La simplicidad es más en la decoración</a>
									<a class="estilos" href="images/interiorismo/noImage.jpg" >Selecciona Líneas en el mobiliario</a>
									<a class="estilos" href="images/interiorismo/noImage.jpg" >Espacios luminosos</a>
									<a class="estilos" href="images/interiorismo/CombinacionTexturas.jpg" >Utiliza la combinación de texturas</a>
									<a class="estilos" href="images/interiorismo/noImage.jpg" >Orden total en cada ambiente</a>
									<a class="estilos" href="images/interiorismo/PiezaDiseño.jpg" >Pieza de diseño o una obra de arte</a>
									<a class="estilos" href="images/interiorismo/noImage.jpg" >Gama de colores</a>
									<a class="estilos" href="images/interiorismo/DetallesLuminosos.jpg" >Enfatiza en detalles luminosos</a>
									<a class="estilos" href="images/interiorismo/noImage.jpg" >El protagonismo del mobiliario</a>
								<!-- </div> -->
								<img id="tmb-interiorismo" src="images/interiorismo-tbm.jpg" alt="ejemplo de estilos" />
							</div>
						</div>
					</div>
				</div>
				<div class="logo-dos">
						<a href="<?php echo _path; ?>home"></a>
				</div>
				<!-- MENU -->
				<?php get_menu(); ?>				
		</body>
		</html>
<?php
}
?>