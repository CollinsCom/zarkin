<?
include("forma.php");
	
if($cual == "encuesta"){
?>
    <span class="tituloAdmin">Ver Resultados <?=$tituloForma?></span><br><br>
<div class="tituloCamposModificar">
        <div class="tituloMaxModificar" style="width:300px;">Pregunta</div>
        <div class="tituloMaxModificar">Fecha</div>
    </div>
    <div class="salto"></div>
    <?
	$q = mysql_query("SELECT * FROM $cual WHERE idEmpresa='$logged' ORDER BY fecha DESC");
	while($r = mysql_fetch_array($q)){
		extract($r);
	?>
    <div class="camposModificar">
        <div class="campoMaxModificar" style="width:300px;"><?=$titulo?></div>
        <div class="campoMaxModificar" ><?=$fecha?></div>
        <div class="campoMinModificar"><a href="#" onclick="javascript:adminm('mostrar', '<?=$cual?>', '<?=$id?>'); return false;">Ver Resultados</a></div>
    </div>
    <div class="salto"></div>
    

<?
	}
}
if($cual == "trivia"){
?>
    <span class="tituloAdmin">Ver Resultados <?=$tituloForma?></span><br><br>
<div class="tituloCamposModificar">
        <div class="tituloMaxModificar" style="width:300px;">Pregunta</div>
        <div class="tituloMaxModificar">Fecha</div>
    </div>
    <div class="salto"></div>
    <?
	$q = mysql_query("SELECT * FROM $cual WHERE id_page='$id_page' ORDER BY fecha DESC");
	while($r = mysql_fetch_array($q)){
		extract($r);
	?>
    <div class="camposModificar">
        <div class="campoMaxModificar" style="width:300px;"><?=$titulo?></div>
        <div class="campoMaxModificar" ><?=$fecha?></div>
        <div class="campoMinModificar"><a href="#" onclick="javascript:adminm('mostrar', '<?=$cual?>', '<?=$id?>'); return false;">Ver Resultados</a></div>
    </div>
    <div class="salto"></div>
    

<?
	}
}

?>
