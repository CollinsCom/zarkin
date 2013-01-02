<?
include("forma.php");

if($cual == "categoria"){	
	$q = mysql_query("SELECT * FROM zarkin_categoria WHERE id = '$idm'");
	while($r = mysql_fetch_array($q)){
		extract($r);
	}
?>
    <span class="tituloAdmin">Modificar <?=$tituloForma?></span><br><br>
    <form action="actualizar.php" method="post" enctype="multipart/form-data" id="forma" name="<?=$cual?>" onsubmit="javascript:loading();">
    <div class="izqAdmin">T&iacute;tulo <span class="rojo">*</span> </div>
    <div class="derAdmin"><input name="nombre" type="text" class="required" value="<?=$nombre?>"/></div>
    <div class="salto"></div>
    <div class="izqAdmin"><input name="cual" type="hidden" value="<?=$cual?>" /><input name="idm" type="hidden" value="<?=$idm?>" /><input name="boton" type="submit" value="Modificar" /></div>
    </form>
<?
}
if($cual=="coleccion"){
	$q = mysql_query("SELECT * FROM zarkin_coleccion WHERE id = '$idm'");
	while($r = mysql_fetch_array($q)){
		extract($r);
	}
?>
    <span class="tituloAdmin">Modificar <?=$tituloForma?></span><br><br>
    <div class="tituloCamposModificar"><span class="rojo">Es necesario eliminar las im&aacute;genes deseadas antes de realizar cualquier modificaci&oacute;n.</span></div>
    <div class="salto"></div>
    <div class="tituloCamposModificar">
    <?
    $q1 = mysql_query("SELECT * FROM zarkin_imagen WHERE idColeccion = '$idm'");
	while($r1 = mysql_fetch_array($q1)){
		$idi = $r1['id'];
		$img = "../".$r1['rutaImg'];
	?>
    	<div class="imgModificar"><img src="<?=$img?>" width="150"/><br /><a href="#" onclick="javascript:if (confirm('Desea realmente eliminar la imagen?')){eliminarImagen('<?=$cual?>', '<?=$idm?>', '<?=$idi?>');} return false;">Eliminar</a></div>
    <?
	}
	?>
    </div>
    <div class="salto"></div>
    <form action="actualizar.php" method="post" enctype="multipart/form-data" id="forma" name="<?=$cual?>" onsubmit="javascript:loading();">
    <div class="izqAdmin">T&iacute;tulo <span class="rojo">*</span> </div>
    <div class="derAdmin"><input name="titulo" type="text" class="required" value="<?=$titulo?>"/></div>
    <div class="salto"></div>
    
    <div class="izqAdmin">Categoría <span class="rojo">*</span> </div>
    <div class="derAdmin"><select name="idCategoria" class="required">
    <option value="">Seleccionar...</option>
    <? 
	$se=mysql_query("SELECT * FROM zarkin_categoria ORDER BY nombre ASC");
	while($as=mysql_fetch_array($se)){
		extract($as);
		if($id==$idCategoria){$sel="selected";}
	?>
	<option value="<?=$id?>" <?=$sel?>><?=$nombre?></option>
	<?
	$sel="";
		}
	?>
    </select></div>
    <div class="salto"></div>
    <div class="izqAdmin">Descripción <span class="rojo">*</span> </div>
    <div class="derAdmin"><textarea name="descripcion" rows="8"><?=$descripcion?></textarea></div>
    <div class="salto"></div>
    <div class="izqAdmin">Imagen Thumb (130x130) <span class="rojo">*</span> </div>
    <div class="derAdmin"><input name="thumb" type="file" class=""/>
    <br /><img src="../<?=$rutaImgThumb?>" />
    </div>
    <div class="salto"></div>
    <div class="izqAdmin">Imágenes (1100x750)<span class="rojo">*</span> </div>
    <div class="derAdmin"><input name="imageng[]" type="file" class=""/>
    <div class="salto"></div>
    <a href="#" onclick="javascript:addCampos();return false;">Más Imágenes</a>
    <div class="salto"></div>
    <div id="imagenes"></div>
    </div>
    <div class="salto"></div>
    <div class="salto"></div>
    <div class="izqAdmin"><input name="cual" type="hidden" value="<?=$cual?>" /><input name="idm" type="hidden" value="<?=$idm?>" /><input name="boton" type="submit" value="Modificar" /></div>
    </form>
<?
	}
?>
