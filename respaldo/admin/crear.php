<?
include("forma.php");
if($cual == "coleccion"){
?>
    <span class="tituloAdmin">Agregar <?=$tituloForma?></span><br><br>
    <form action="agregar.php" method="post" enctype="multipart/form-data" id="forma" name="<?=$cual?>" onsubmit="javascript:loading();">
    <div class="izqAdmin">T&iacute;tulo <span class="rojo">*</span> </div>
    <div class="derAdmin"><input name="titulo" type="text" class="required"/></div>
    <div class="salto"></div>
    
    <div class="izqAdmin">Categoría <span class="rojo">*</span> </div>
    <div class="derAdmin"><select name="idCategoria" class="required">
    <option value="">Seleccionar...</option>
    <? 
	$se=mysql_query("SELECT * FROM zarkin_categoria ORDER BY nombre ASC");
	while($as=mysql_fetch_array($se)){
		extract($as);
	?>
	<option value="<?=$id?>"><?=$nombre?></option>
	<?
		}
	?>
    </select></div>
    <div class="salto"></div>
    <div class="izqAdmin">Descripción <span class="rojo">*</span> </div>
    <div class="derAdmin"><textarea name="descripcion" rows="8"></textarea></div>
    <div class="salto"></div>
    <div class="izqAdmin">Imagen Thumb (130x130) <span class="rojo">*</span> </div>
    <div class="derAdmin"><input name="thumb" type="file" class="required"/></div>
    <div class="salto"></div>
    <div class="izqAdmin">Imágenes (1100x750)<span class="rojo">*</span> </div>
    <div class="derAdmin"><input name="imageng[]" type="file" class=""/>
    <div class="salto"></div>
    <a href="#" onclick="javascript:addCampos();return false;">Más Imágenes</a>
    <div class="salto"></div>
    <div id="imagenes"></div>
    </div>
    <div class="salto"></div>
    <div class="salto"></div>    <div class="izqAdmin"><input name="cual" type="hidden" value="<?=$cual?>" /><input name="boton" type="submit" value="Agregar" /></div>
    </form>
<?
}
if($cual == "categoria"){
?>
    <span class="tituloAdmin">Crear <?=$tituloForma?></span><br><br>
    <form action="agregar.php" method="post" enctype="multipart/form-data" id="forma" name="<?=$cual?>" onsubmit="javascript:loading();">
    <div class="izqAdmin">T&iacute;tulo <span class="rojo">*</span> </div>
    <div class="derAdmin"><input name="titulo" type="text" class="required"/></div>
    <div class="salto"></div>
    <div class="izqAdmin"><input name="cual" type="hidden" value="<?=$cual?>" /><input name="boton" type="submit" value="Crear" /></div>
    </form>
<?
}

?>
