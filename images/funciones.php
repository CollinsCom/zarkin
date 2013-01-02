<?php 

//***************************************************
//	Archivo de funciones para <strong>Zarkin</strong>
//	
//	*Este archivo contiene las funciones necesarias
//	para que funcione el sitio web, favor de no
//	borrar el contenido.
//***************************************************
 
	include_once('conexion.php');
	include_once('menu.php');
	
	define('_path','http://sitios.collinscom.com/zarkin/');
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
            <link rel="stylesheet" type="text/css" href="<?php echo _path; ?>css/jquery.lightbox-0.5.css" media="screen" />
            
            <!-- Ativando o jQuery lightBox plugin -->
            <script type="text/javascript">
				$(function() {
					$('a.piel').lightBox();
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
        <div class="bienvenido">
        	<div class="viewport">
                <!--<span>Bienvenido al estilo de vida</span>-->
                <div class="clear10px"></div>
                <div class="clear10px"></div>
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
        
        <div class="cole-thumbs">
           <!-- <div class="cole-piel">
                <div class="thumb">
                    <a href="<?php /*echo _path; ?>images/pieles/pigmentada.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/01.jpg" alt="Piel Pigmentada" /></a>
                </div>
                <div class="thumb">
                    <a href="<?php echo _path; ?>images/pieles/semianilina.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/02.jpg" alt="Piel Semi-anilina" /></a>
                </div>
                <div class="clear"></div>
                <div class="pieles-nombre">
                    <p>Piel Pigmentada</p>
                    <p>Piel Semi-anilina</p>
                </div>
                
                <div class="clear"></div>
                <div class="thumb">
                    <a href="<?php echo _path; ?>images/pieles/anilina.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/03.jpg" alt="Piel Anilina" /></a>
                </div>
                <div class="thumb">
                    <a href="<?php echo _path; ?>images/pieles/nobuk.jpg" class="piel"><img src="<?php echo _path; */?>images/pieles/04.jpg" alt="Piel Nobuk" /></a>
                </div>
                <div class="clear"></div>
                <div class="pieles-nombre">
                    <p>Piel Anilina</p>
                    <p>Piel Nobuk</p>
                </div>-->
            </div>
        </div>
        
        
        <!-- CONTENIDO -->
        <div class="bienvenido" style="background:url(<?php echo _path; ?>images/bg-black4.png) repeat-x;">    
            <!-- VIEWPORT -->
            <div class="viewport">
            	<p>
                	Dependiendo de la calidad de la piel se pueden observar sus caracter&iacute;sticas en mayor o menor medida. La piel se somete a varios procesos que la transforman en piel para muebles, por eso es muy iportante dar mantenimiento preventivo a sus muebles de piel oportunamente para que permanezcan y duren como nuevos por mucho tiempo.
                </p>
                <div class="clear10px"></div>
            	<div class="clear10px"></div>
                <div class="clear10px"></div>
                <div class="clear10px"></div>
                
                <div style="width:50%; float:left; margin-bottom:20px; font-size:14px;">
                	<a href="<?php echo _path; ?>images/pieles/pigmentada.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/01.jpg" style="width:100px; height:100px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
                	<p>Tipo de piel anilina</p>
                </div>
                <div style="width:50%; float:left; margin-bottom:20px; font-size:14px;">
                	<a href="<?php echo _path; ?>images/pieles/semianilina.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/02.jpg" style="width:100px; height:100px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
                	<p>Tipo de piel pigmentada</p>
                </div>
                <div style="width:50%; float:left; margin-bottom:20px; font-size:14px;">
                	<a href="<?php echo _path; ?>images/pieles/anilina.jpg" class="piel" ><img src="<?php echo _path; ?>images/pieles/03.jpg" style="width:100px; height:100px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
                	<p>Tipo de piel nobuk</p>
                </div>
                <div style="width:50%; float:left; margin-bottom:20px; font-size:14px;">
                	<a href="<?php echo _path; ?>images/pieles/nobuk.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/04.jpg" style="width:100px; height:100px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
                	<p>Tipo de piel semi-anilina</p>
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
function cuidados(){
?>
    <body class="black">
        <?php fondo_animado('images/fondos/pieles.jpg'); ?>
        
        <!-- HEADER -->
        <div class="barratop"></div>
        <div class="barra"></div>
        <div class="titulos">
        	<?php
			echo '<img src="'._path.'images/titulos/cuidados-mantenimiento.png" style="margin-top:-15px;" />'; 
			?>
            <div class="clear"></div>
        </div>
        
        <div class="cole-thumbs">
            <div class="cole-piel">
                <div class="thumb">
                     <a href="<?php echo _path; ?>images/pieles/cuidados-piel-pigmentada.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/01.jpg" alt="Piel Pigmentada" /></a>
                </div>
                <div class="thumb">
                    <a href="<?php echo _path; ?>images/pieles/cuidados-piel-semianilina.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/02.jpg" alt="Piel Semi-anilina" /></a>
                </div>
                <div class="clear"></div>
                <div class="pieles-nombre">
                    <p>Piel Pigmentada</p>
                    <p>Piel Semi-anilina</p>
                </div>
                
                <div class="clear"></div>
                <div class="thumb">
                    <a href="<?php echo _path; ?>images/pieles/cuidados-anilina.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/03.jpg" alt="Piel Anilina" /></a>
                </div>
                <div class="thumb">
                    <a href="<?php echo _path; ?>images/pieles/cuidados-nobuk.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/04.jpg" alt="Piel Nobuk" /></a>
                </div>
                <div class="clear"></div>
                <div class="pieles-nombre">
                    <p>Piel Anilina</p>
                    <p>Piel Nobuk</p>
                </div>
            </div>
        </div>
        
        <!-- CONTENIDO -->
        <div class="bienvenido" style="background:url(<?php echo _path; ?>images/bg-black4.png) repeat-x;">
                
            <!-- VIEWPORT -->
            <div class="viewport"> </div>
            
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
            <!--<span>Pieles con acabados especiales</span>-->
            <!--<div class="clear10px"></div>
            <div class="clear10px"></div>
            <div class="clear10px"></div>-->
          
          
        		
            <!-- VIEWPORT -->
            <div class="viewport-pieles text-izq">
                
                <div class="overview">
                	<div class="clear10px"></div>
                	<p style="text-align:left; width:100% !important;">Todas las pieles de res poseen como caracter&iacute;stica la durabilidad y poca exigencia en cuidados. Sin embargo son prácticamente un elemento vivo y como tal, son sensibles a agentes agresivos. Por ello, nunca utilice en su mueble l&iacute;quidos antimanchas, aguarr&aacute;s u otros similares que puedan da&ntilde;arlo permanentemente. </p>
                     <!--<div class="cole-thumbs2">
                        <div class="thumb">
                             <a href="<?php /*echo _path; ?>images/pieles/acabados-piel-envejecida.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-envejecida.jpg" alt="Piel Pigmentada" /></a>
                        </div>
                        <div class="thumb">
                            <a href="<?php echo _path; ?>images/pieles/acabados-piel-brillante.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-brillante.jpg" alt="Piel Semi-anilina" /></a>
                        </div>
                        <div class="thumb">
                             <a href="<?php echo _path; ?>images/pieles/acabados-piel-granonatural-volumen.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-granonaturalv.jpg" alt="Piel Pigmentada" /></a>
                        </div>
                        <div class="thumb">
                            <a href="<?php echo _path; ?>images/pieles/acabados-piel-granonatural.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-granonatural.jpg" alt="Piel Semi-anilina" /></a>
                        </div>
                        <div class="thumb">
                             <a href="<?php echo _path; ?>images/pieles/acabados-piel-pullup.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-pullup.jpg" alt="Piel Pigmentada" /></a>
                        </div>
                        <div class="thumb">
                            <a href="<?php echo _path; ?>images/pieles/acabados-piel-anilina.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-anilinaperlada.jpg" alt="Piel Semi-anilina" /></a>
                        </div>
                        <div class="thumb">
                             <a href="<?php echo _path; ?>images/pieles/acabados-piel-bycast.jpg" class="piel"><img src="<?php echo _path;*/ ?>images/pieles/zoom-acabados-piel-bycast.jpg" alt="Piel Pigmentada" /></a>
                        </div>
                        <div class="clear"></div>-->
                        <div class="clear10px"></div>
                        <div class="clear10px"></div>
                        <div class="clear10px"></div>
                        <div class="clear10px"></div>
                    	<div class="clear10px"></div>
                        <div style="width:50%; float:left; margin-bottom:10px; font-size:14px;">
                            <a href="<?php echo _path; ?>images/pieles/envejecida.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-envejecida.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Envejecida" /></a>
                            <p>Tipo de piel envejecida</p>
                        </div>
                        <div style="width:50%; float:left; margin-bottom:10px; font-size:14px;">
                            <a href="<?php echo _path; ?>images/pieles/brillante.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-brillante.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
                            <p>Tipo de piel pigmentada</p>
                        </div>
                        <div style="width:50%; float:left; margin-bottom:10px; font-size:14px;">
                            <a href="<?php echo _path; ?>images/pieles/anilina.jpg" class="piel" ><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-granonaturalv.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
                            <p>Tipo de piel nobuk</p>
                        </div>
                        <div style="width:50%; float:left; margin-bottom:10px; font-size:14px;">
                            <a href="<?php echo _path; ?>images/pieles/nobuk.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-granonatural.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
                            <p>Tipo de piel semi-anilina</p>
                        </div>
                        <div style="width:50%; float:left; margin-bottom:10px; font-size:14px;">
                            <a href="<?php echo _path; ?>images/pieles/pigmentada.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-pullup.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
                            <p>Tipo de piel anilina</p>
                        </div>
                        <div style="width:50%; float:left; margin-bottom:10px; font-size:14px;">
                            <a href="<?php echo _path; ?>images/pieles/semianilina.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-anilinaperlada.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
                            <p>Tipo de piel pigmentada</p>
                        </div>
                        <div style="width:50%; float:left; margin-bottom:10px; font-size:14px;">
                            <a href="<?php echo _path; ?>images/pieles/anilina.jpg" class="piel" ><img src="<?php echo _path; ?>images/pieles/zoom-acabados-piel-bycast.jpg" style="width:100px; height:50px; float:left; margin-right:20px; border:solid #FFFFFF 1px;" alt="Piel Semi-anilina" /></a>
                            <p>Tipo de piel nobuk</p>
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
                    <p style="text-align:justify; width:100% !important;">En las fotograf&iacute;as mostramos diversas marcas de la naturaleza. Estos sellos no disminuyen la calidad al contrario, subrayan la autenticidad de la piel y demuestran la fortaleza de la piel natural.</p>
                    <div class="clear"></div>
                    <div class="cole-thumbs2" style="position:absolute; z-index:30;">
                        <div class="thumb">
                             <a href="<?php echo _path; ?>images/pieles/marcas-manchasabono.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-Marcas_ManchasAbono.jpg" alt="Piel Pigmentada" /></a>
                        </div>
                        <div class="thumb">
                            <a href="<?php echo _path; ?>images/pieles/marcas-pliegues.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas-pliegues.jpg" alt="Piel Semi-anilina" /></a>
                        </div>
                        <div class="thumb">
                             <a href="<?php echo _path; ?>images/pieles/marcas-venas.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas-venas.jpg" alt="Piel Pigmentada" /></a>
                        </div>
                        <div class="thumb">
                            <a href="<?php echo _path; ?>images/pieles/marcas-cicatrices.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas_cicatrices.jpg" alt="Piel Semi-anilina" /></a>
                        </div>
                        <div class="thumb">
                             <a href="<?php echo _path; ?>images/pieles/marcas-grietas.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas_grietas.jpg" alt="Piel Pigmentada" /></a>
                        </div>
                        <div class="thumb">
                            <a href="<?php echo _path; ?>images/pieles/marcas-callos.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas_callos.jpg" alt="Piel Semi-anilina" /></a>
                        </div>
                        <div class="thumb">
                             <a href="<?php echo _path; ?>images/pieles/marcas-mordeduras.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas-mordeduras.jpg" alt="Piel Pigmentada" /></a>
                        </div>
                        <div class="thumb">
                             <a href="<?php echo _path; ?>images/pieles/marcas-danos.jpg" class="piel"><img src="<?php echo _path; ?>images/pieles/zoom-marcas_danos.jpg" alt="Piel Pigmentada" /></a>
                        </div>
                        <div class="clear"></div>
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
/*function garantia(){
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
                        <span>Garant&iacute;a Limitada de 10 a&Ntilde;os</span>
                    <div class="clear10px"></div>

                    <p>La presente garant&iacute;a, que le rogamos lea atentamente, cubre todos los muebles <strong>Zarkin</strong> sujetos a un uso dom&eacute;stico normal. </p>
                    
                    <div class="clear10px"></div>
                    <div class="clear10px"></div>
                    <span>Registro de la garant&iacute;a</span><br />
                    <div class="clear10px"></div>
                    Registrar la garant&iacute;a es muy sencillo:<br /><br />
                    <ol>
                        <li>Ingrese en el sitio www.zarkin.com/garant&iacute;a e ingrese los datos que se le solicita.
                        <li>Para que esta garant&iacute;a sea v&aacute;lida, favor de registrarla en un plazo m&aacute;ximo de treinta (30) d&iacute;as a partir de la fecha de entrega.
                        <li>No retire la etiqueta que contiene la clave del mueble, pues la garant&iacute;a quedar&aacute; inv&aacute;lida. 
                    </ol>
                    
                    <p>
                    	<div class="clear10px"></div>
                        <div class="clear10px"></div>
                        <span>Plazos y duraci&oacute;n</span><br />
                        <div class="clear10px"></div>
                        
                        Cualquier solicitud de servicio que cubra esta garant&iacute;a debe realizarse a trav&eacute;s del establecimiento donde se haya efectuado la compra, para lo que es necesario presentar un recibo en el que figure la fecha de compra.<br/><br/> 
                        La solicitud de servicio debe realizarse inmediatamente despu&eacute;s de descubrir la existencia de un supuesto defecto y como muy tarde:<br />
                    <ul>
                        <li>A los treinta (30) d&iacute;as de que el defecto haya podido descubrirse a trav&eacute;s de un examen razonablemente minucioso por parte del comprador.</li>
                        <li>A los catorce (14) d&iacute;as de la compra, si se trata de defectos visibles advertidos en el momento de la entrega.</li>
                    </ul>
                    
                    </p>
                    
                    <p>
                        Siempre que el uso recibido haya sido dom&eacute;stico normal, su producto <strong>Zarkin</strong> est&aacute; protegido desde la fecha de compra:<br />
                    </p>
                    <ul>
                        <li>Durante un periodo de diez (10) a&ntilde;os, trat&aacute;ndose de defectos que afecten a la estructura del armaz&oacute;n interior (casco). </li>
                        <li>Durante un periodo de dos (2) a&ntilde;os, trat&aacute;ndose de defectos en el acojinado; los colchones y mecanismos de cama, las costuras, sistema de suspensi&oacute;n (cinchas), los embellecedores de madera y la tapicer&iacute;a. </li>
                        <li>Durante un periodo de un (1) a&ntilde;o, trat&aacute;ndose de defectos en los dispositivos el&eacute;ctricos y/o mec&aacute;nicos, y en herrajes mec&aacute;nicos. </li>
                        <li>Durante un periodo de dos (2) a&ntilde;os, si apareciesen peladuras o craquelaciones propias de la piel (provenientes de fabricaci&oacute;n). <strong>Zarkin</strong> garantiza que sus muebles est&aacute;n tapizados de piel 100% genuina.</li>
                        <li>Esta garant&iacute;a no cubre los da&ntilde;os consecuentes o fortuitos, incluida la p&eacute;rdida de tiempo, de uso o de dinero, y la responsabilidad de <strong>Zarkin</strong> no exceder&aacute; en ning&uacute;n caso el precio de compra del producto o su sustituci&oacute;n. Si no hay material id&eacute;ntico disponible en el momento de la reparaci&oacute;n, <strong>Zarkin</strong> se reserva el derecho de sustituirlos por materiales de igual calidad y valor.</li>
                    </ul>
                    
                    <div class="clear10px"></div>
                    <div class="clear10px"></div>
                    <span>Exclusiones y excepciones</span><br />
                    <div class="clear10px"></div>
                    Esta garant&iacute;a excluye espec&iacute;ficamente las reclamaciones por:<br />
                    
                    <ul>
                        <li>Arrugas o se&ntilde;ales de cicatrices en la piel, variaciones de textura o de color debidas a las variaciones naturales del cuero; &eacute;stas son pruebas de que s&oacute;lo se utiliza piel autentica.</li>
                        <li>Agrietamiento o peladura del </li>
                        <li>Da&ntilde;os producidos por quemaduras, cortes, animales u otros tipos de usos indebidos.</li>
                        <li>Da&ntilde;os producidos por una limpieza inadecuada y negligente.</li>
                        <li>El uso comercial, institucional o alquiler y dem&aacute;s usos con fines no residenciales.</li>
                        <li>Los da&ntilde;os causados por la exposici&oacute;n de la piel a la luz solar directa, el calor extremo, la luz brillante o condiciones similares y cualquier tipo de decoloraciones derivadas de esas acc</li>
                        <li>Los actos derivados del uso inapropiado o indebido o de actos de fuerza mayor.</li>
                        <li>Los da&ntilde;os ocurridos durante la manipulaci&oacute;n y el transporte del producto.</li>
                        <li>La venta de muebles en exposici&oacute;n o “tal y como est&aacute;n”. </li>
                        <li>Los muebles reparados previamente por los centros de reparaci&oacute;n no autorizados por <strong>Zarkin</strong>.</li>
                        <li>La interpretaci&oacute;n de la existencia de defectos debidos a una informaci&oacute;n err&oacute;nea o transmitida de forma negligente por el distribuidor.</li>
                        <li>El dise&ntilde;o y la estructura original del mueble no pueden ser alterados. </li>
                    </ul>
                    
                    <div class="clear10px"></div>
                    <div class="clear10px"></div>
                    <span>Esta garant&iacute;a no se considera v&aacute;lida:</span><br />
                    <div class="clear10px"></div>
                    <ul>
                        <li>Si no ha sido previamente registrada.</li>
                        <li>Para aquellas reclamaciones relativas a la piel o tela de la tapicer&iacute;a, que sean consecuencia de la utilizaci&oacute;n de productos qu&iacute;micos, productos de limpieza o acondicionadores no aprobados por <strong>Zarkin</strong>.</li>
                        <li>Si se retira la etiqueta de identificaci&oacute;n que hay bajo el mueble.</li>
                        <li>Si el comprador original trasmite esta garant&iacute;a a terceras personas o se traslada desde la direcci&oacute;n de entrega original.</li>
                        <li>Esta garant&iacute;a no cubre los costos de embalaje y transporte desde y hasta el emplazamiento del fabricante, el distribuidor o el lugar de reparaci&oacute;n establecido por <strong>Zarkin</strong>.</li>
                    </ul>
                    
                    
                    <div class="clear10px"></div>
                    <div class="clear10px"></div>
                    <span>Instrucciones para la solicitud de asistencia</span>
                    <div class="clear10px"></div>
                    <p>Las solicitudes de servicio de garant&iacute;a deben hacerse a trav&eacute;s del distribuidor donde se adquiri&oacute; originalmente el mueble, si no puede tener acceso al distribuidor original puede contactar al Centro de Atenci&oacute;n <strong>Zarkin</strong>.</p>
                    <p>Para hacer v&aacute;lida la garant&iacute;a debe ser previamente registrada en el sitio www.<strong>Zarkin</strong>.com/garant&iacute;as.</p>
                    <p>
                        Por favor tenga listos los siguientes datos:
                        <ul>
                            <li>Nombre, direcci&oacute;n, correo electr&oacute;nico y tel&eacute;fono.</li>
                            <li>Comprobante de compra, modelo del mueble, clave del mueble (se encuentra debajo de su mueble), n&uacute;mero de folio del registro de su garant&iacute;a.  </li>
                            <li>Explicaci&oacute;n del problema presentado (seg&uacute;n la naturaleza del problema, es posible que el representante del centro de servicio necesite que le brinde mas informaci&oacute;n).</li>
                            <li>Datos del distribuidor donde realiz&oacute; la compra del mueble. </li>
                            <li>Para determinar si existe un defecto, y realizar la reparaci&oacute;n, es posible que <strong>Zarkin</strong> requiera fotograf&iacute;as del defecto o una inspecci&oacute;n personal por parte del representante.</li>
                        </ul>
                    </p>
                    
                    <p>Despu&eacute;s que el Centro de Atenci&oacute;n a Clientes verifique que el mueble cumple con los requisitos para recibir el servicio de garant&iacute;a, se le enviar&aacute; un n&uacute;mero de autorizaci&oacute;n y se le dar&aacute; instrucciones dependiendo el caso, ya sea de env&iacute;o de su mueble al Centro de Servicio o se agendar&aacute; una cita para que acuda un t&eacute;cnico autorizado a realizar el servicio.</p>
                    <p><strong>Zarkin</strong> no se har&aacute; responsable de los cargos de transporte, de env&iacute;o o embalaje sin una autorizaci&oacute;n escrita previa de un representante de servicio.</p>                  
                    <p>Las reparaciones contempladas en esta garant&iacute;a son las &uacute;nicas que pueden ser objeto de reclamaci&oacute;n por supuestos defectos materiales o de fabricaci&oacute;n.</p>
                    <p><strong>Zarkin</strong> no ofrece m&aacute;s garant&iacute;as que las expuestas impl&iacute;cita o expl&iacute;citamente aqu&iacute;, a menos que las leyes establezcan otra cosa. Esta garant&iacute;a otorga al comprador derechos espec&iacute;ficos que pueden variar de un Estado a otro.</p>
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
}*/
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
                <p>
                	<?php
                    if($_GET['contacto']){
						if($_GET['contacto']==1){
							echo '<script>alert("Hemos recibido su mensaje. Gracias por contactarnos.")</script>';
						}else{
							echo '<script>alert("Error: el mensaje no se pudo enviar")</script>';
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
                   Guadalajara (33) 3811 8280 / Resto de la Rep&uacute;plica (55) 2623 0680
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
			
			
			$thumbs = "SELECT modelos.nombre FROM modelos WHERE modelos.categoria_id = ".$cat_id['id'].";";
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