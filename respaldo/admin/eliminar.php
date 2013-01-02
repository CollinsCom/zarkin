<?
include("forma.php");
if($cual == "categoria"){
?>
    <span class="tituloAdmin">Eliminar <?=$tituloForma?></span><br><br>
    <div class="tituloCamposModificar">
    	<div class="tituloMaxModificar">T&iacute;tulo</div>
        
    </div>
    <div class="salto"></div>
    <?
	$q = mysql_query("SELECT * FROM zarkin_categoria ORDER BY nombre ASC");
	while($r = mysql_fetch_array($q)){
		extract($r);
		
	?>
    <div class="camposModificar">
    	<div class="campoMaxModificar"><?=$nombre?></div>
        <div class="campoMinModificar"><a href="#" onclick="javascript:if (confirm('Desea realmente eliminar la categoria <?=$nombre?>?')){eliminar('<?=$cual?>', '<?=$id?>');} return false;">Eliminar</a></div>
    </div>
    <div class="salto"></div>
<?
	}
}
if($cual == "coleccion"){
?>
    <span class="tituloAdmin">Eliminar <?=$tituloForma?></span><br><br>
    <div class="tituloCamposModificar">
    	<div class="tituloMaxModificar">T&iacute;tulo</div>
        
    </div>
    <div class="salto"></div>
    <?
	$q = mysql_query("SELECT * FROM zarkin_coleccion ORDER BY titulo ASC");
	while($r = mysql_fetch_array($q)){
		extract($r);
		
	?>
    <div class="camposModificar">
    	<div class="campoMaxModificar"><?=$titulo?></div>
        <div class="campoMinModificar"><a href="#" onclick="javascript:if (confirm('Desea realmente eliminar la coleccion <?=$nombre?>?')){eliminar('<?=$cual?>', '<?=$id?>');} return false;">Eliminar</a></div>
    </div>
    <div class="salto"></div>
<?
	}
}
?>
