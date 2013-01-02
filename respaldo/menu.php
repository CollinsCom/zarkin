<div class="menu">
    	<div class="boton">
        	<a href="#" onclick="return false;" class="not">Colección</a>
            <div class="submenu">
            <? $sel=mysql_query("SELECT DISTINCT(col.idCategoria) FROM zarkin_categoria cat INNER JOIN zarkin_coleccion col ON cat.id=col.idCategoria ORDER BY cat.nombre DESC");
				$cuantos=mysql_num_rows($sel);
				while($as=mysql_fetch_array($sel)){
					extract($as);
					$nom=mysql_fetch_array(mysql_query("SELECT * FROM zarkin_categoria WHERE id='$idCategoria'"));
					$nombre=$nom['nombre'];
					$nombreurl=friendurl($nombre);
					if($cuantos==1){
						?>
						<div class="boton-l"><a href="<?=_path?>ver-categoria/idcategoria/<?=$idCategoria?>/zarkin/<?=$nombreurl?>/"><?=$nombre?></a></div>
						<?
						}else{
						?>
						<div class="boton-l"><a href="<?=_path?>ver-categoria/idcategoria/<?=$idCategoria?>/zarkin/<?=$nombreurl?>/"><?=$nombre?></a></div><span>|</span>	
						<?
						}
						$cuantos--;
					}
			?>
            </div>
        </div><span>|</span>
        <div class="boton">
            <a href="#" onclick="return false;" class="not">Empresa</a>
                <div class="submenu">
                    <div class="boton-l"><a href="<?=_path?>acerca-de-zarkin.php">Bienvenido</a></div><span>|</span>
                    <div class="boton-l"><a href="<?=_path?>grupo-zarkin.php">Grupo Zarkin</a></div>
                </div>
        	
        </div><span>|</span>
        <div class="boton">
        	<a href="#" onclick="return false;" class="not">Piel</a>
            <div class="submenu">
            	<div class="boton-l"><a href="<?=_path?>caracteristicas-de-la-piel.php">Características</a></div><span>|</span>
                <div class="boton-l"><a href="<?=_path?>tipos-de-piel.php">Tipos de piel y cuidados</a></div><span>|</span>
                <div class="boton-l"><a href="<?=_path?>acabados-especiales.php">Acabados especiales</a></div><span>|</span>
                <div class="boton-l"><a href="<?=_path?>marcas-naturales.php">Marcas naturales</a></div>
            </div>
        </div><span>|</span>
        <div class="boton">
        	<a href="<?=_path?>garantia.php">Garantía</a>
        </div><span>|</span>
        <div class="boton">
        	<a href="#" class="not">Prensa</a>
        </div><span>|</span>
        <div class="boton">
        	<a href="<?=_path?>contacto.php">Contáctanos</a>
        </div>
    </div>
    <div class="degradabot"></div>