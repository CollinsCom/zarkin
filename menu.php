
<?php
function get_menu(){
	define('_base','');
?>
	<div class="menu">
    
    	<!-- COLECCION -->
		<div class="boton">
			<a href="#" onclick="return false;" class="not">Colección</a>
			<div class="submenu">
				<div class="boton-l"><a href="<?php echo _base; ?>/colecciones/casual">Casual</a></div><span>|</span>
        <div class="boton-l"><a href="<?php echo _base; ?>/colecciones/contemporaneo">Contempor&aacute;neo</a></div><span>|</span>
        <div class="boton-l"><a href="<?php echo _base; ?>/colecciones/transicional">Transicional</a></div><span>|</span>
        <div class="boton-l"><a href="<?php echo _base; ?>/colecciones/hi-tek">Hi-Tek</a></div><span>|</span>
        <div class="boton-l"><a href="<?php echo _base; ?>/colecciones/american-style">American Style</a></div><span>|</span>
        <div class="boton-l"><a href="<?php echo _base; ?>/colecciones/clasico">Cl&aacute;sico</a></div><span>|</span>
        <div class="boton-l"><a href="<?php echo _base; ?>/colecciones/complementos">Complementos</a></div><span>|</span>
        <div class="boton-l"><a href="<?php echo _base; ?>/colecciones/recamaras">Rec&aacute;maras</a></div><span>|</span>
        <div class="boton-l"><a href="<?php echo _base; ?>/colecciones/relax">Relax</a></div><span>|</span>
        <div class="boton-l"><a href="<?php echo _base; ?>/colecciones/mesas">Mesas</a></div><span>|</span>
				<div class="boton-l"><a href="<?php echo _base; ?>/colecciones/masaje">Masaje</a></div>
			</div>
		</div>
        <span>|</span>
		
        <!-- ESTILOS Y TENDENCIAS -->
		<div class="boton" style="width: 70px;">
			<a href="#" onclick="return false;" class="not">Interiorismo</a>
			<div class="submenu">
				<div class="boton-l"><a href="#" class="not">Estilos y tendencias</a></div><span>|</span>
				<div class="boton-l"><a href="#" class="not">Consejos de interiorismo</a></div>
			</div>
		</div>
		<span>|</span>
        
        
        <!-- PIEL -->
		<div class="boton">
			<a href="#" onclick="return false;" class="not">Piel</a>
				<div class="submenu">
					<div class="boton-l"><a href="<?php echo _base; ?>/piel/caracteristicas">Tipos y cuidados</a></div><span>|</span>
					<div class="boton-l"><a href="<?php echo _base; ?>/piel/acabados-especiales">Acabados Especiales</a></div><span>|</span>
					<div class="boton-l"><a href="<?php echo _base; ?>/piel/marcas-naturales">Marcas Naturales</a></div>
				</div>
		</div>
        <span>|</span>
        
        
        <!-- EMPRESA -->
		<div class="boton">
			<a href="<?php echo _base; ?>/empresa">Empresa</a>
		</div>
        <span>|</span>
		
        
        <!-- GARANTIA -->
		<div class="boton">
			<a href="<?php echo _base; ?>/garantia">Garant&iacute;a</a>
		</div>
        <span>|</span>
        
        <!-- PREGUNTAS FRECUENTES -->
		<div class="boton">
			<a href="<?php echo _base; ?>/faq" class="not">FAQ</a>
		</div>
        <span>|</span>
		
        <!-- CONTACTO -->
		<div class="boton">
			<a href="<?php echo _base; ?>/contacto">Contacto</a>
		</div>
	</div>
    
    <div id="sociales">
    	<a href="https://www.facebook.com/pages/Zarkin/228687550482143" target="_blank" title="Facebook"><img src="<?php echo _path; ?>images/facebook.png" /></a>
        <a href="https://twitter.com/zarkinmx" title="Twitter" target="_blank"><img src="<?php echo _path; ?>images/twitter.png" /></a>
    </div>
    
    <a style="z-index:100; position:absolute; bottom:25px; right:50px; text-decoration:none; color:#FFFFFF; font-size:12px; font-family:'HelveticaNeue45Light'; " href="http://collinscom.com" target="_blank">Collinscom.com</a>
    
    <!-- PARA EL DEGRADADO DEL MENU -->
	<div class="degradabot"></div>

<?php
}
?>


<?php 
function nombre_categoria($categoria){
	switch ($categoria){
		case 'casual':
			$categoria = 'coleccion-casual.png';
			break;
		case 'contemporaneo':
			$categoria = 'coleccion-contemporaneo.png';
			break;
		case 'transicional':
			$categoria = 'coleccion-transicional.png';
			break;
		case 'hi-tek':
			$categoria = 'coleccion-hitek.png';
			break;
		case 'american-style':
			$categoria = 'coleccion-american-style.png';
			break;
		case 'clasico':
			$categoria = 'coleccion-clasico.png';
			break;
		case 'complementos':
			$categoria = 'coleccion-complementos.png';
			break;
		case 'recamaras':
			$categoria = 'coleccion-recamaras.png';
			break;
		case 'relax':
			$categoria = 'coleccion-relax.png';
			break;
		case 'mesas':
			$categoria = 'coleccion-mesas.png';
			break;
		case 'masaje':
			$categoria = 'coleccion-masaje.png';
			break;
	}
	
	return $categoria;
}
?>


<?php 
/*function nombre_categoria($categoria){
	switch ($categoria){
		case 'casual':
			$categoria = 'CASUAL';
			break;
		case 'contemporaneo':
			$categoria = 'CONTEMPOR&Aacute;NEO';
			break;
		case 'transicional':
			$categoria = 'TRANSICIONAL';
			break;
		case 'hi-tek':
			$categoria = 'HI-TEK';
			break;
		case 'american-style':
			$categoria = 'AMERICAN STYLE';
			break;
		case 'clasico':
			$categoria = 'CL&Aacute;SICO';
			break;
		case 'complementos':
			$categoria = 'COMPLEMENTOS';
			break;
		case 'recamaras':
			$categoria = 'REC&Aacute;MARAS';
			break;
		case 'relax':
			$categoria = 'RELAX';
			break;
		case 'mesas':
			$categoria = 'MESAS';
			break;
		case 'masaje':
			$categoria = 'MASAJE';
			break;
		case 'expo':
			$categoria = 'EVENTOS';
			break;
	}
	
	return $categoria;
}*/
?>
