<?
include("forma.php");
	
if($cual == "encuesta"){	

?>
    <span class="tituloAdmin">Ver Informaci&oacute;n <?=$tituloForma?></span><br><br>
    <div class="header">
  <? extract(mysql_fetch_array(mysql_query("SELECT SUM(hits) AS sinuser FROM encuesta_respuesta WHERE idEncuesta='$idm'")));
		
		
		$sel=mysql_query("SELECT * FROM encuesta_respuesta WHERE idEncuesta='$idm'");
		$conuser=0;
		while($as=mysql_fetch_array($sel)){
			$idres=$as['id'];
			$asd=mysql_fetch_array(mysql_query("SELECT COUNT(*) AS cuanto FROM usuario_respuesta WHERE idRespuesta='$idres'"));
			$cuantos=$asd['cuanto'];
			$conuser+=$cuantos;
			}
		$total=$sinuser+$conuser;
		
		
		
		$enc=mysql_query("SELECT * FROM encuesta_respuesta WHERE idEncuesta='$idm'");
		while($as=mysql_fetch_array($enc)){
			extract($as);
			$demas=mysql_num_rows(mysql_query("SELECT * FROM usuario_respuesta WHERE idRespuesta='$id'"));
			$tot=$hits+$demas;
			$poc=($tot/$total)*100;
			if($poc!=0){
			?>
			<div style="width:<?=$poc?>%; float:left; font-size:10px;text-align:right; color:#FFF; background-color:#3c4f86; padding:2px;"><?=$respuesta." ($tot)"?></div>
            <div style="clear:both; height:10px;"></div>
			<?
			}else{
				?>
			<div style="width:100%; float:left; font-size:10px;text-align:right; color:#000;padding:2px;"><?=$respuesta." ($tot)"?></div>
            <div style="clear:both; height:10px;"></div>
			<?
				
				}
			}?>
    </div>
    <div class="salto"></div>
<?
}
if($cual == "trivia"){	

?>
    <span class="tituloAdmin">Ver Informaci&oacute;n <?=$tituloForma?></span><br><br>
    <div class="header">
  <? extract(mysql_fetch_array(mysql_query("SELECT SUM(hits) AS sinuser FROM trivia_respuesta WHERE idEncuesta='$idm'")));
		extract(mysql_fetch_array(mysql_query("SELECT COUNT(*) AS conuser FROM trivia_respuesta WHERE idEncuesta='$idm'")));
		
		$totalw=$sinuser+$conuser;
		
		
		
		$encd=mysql_query("SELECT * FROM encuesta_respuesta WHERE idEncuesta='$idm'");
		while($ass=mysql_fetch_array($encd)){
			$idres=$ass['id'];
			$hits=$ass['hits'];
			$respuesta=$ass['respuesta'];
			$demais=mysql_num_rows(mysql_query("SELECT * FROM usuario_respuesta WHERE idRespuesta='$idres'"));
			$totaaa=$hits+$demais;
			$poc=($totaaa/$totalw)*100;
			if($poc!=0){
			?>
			<div style="width:<?=$poc?>%; float:left; font-size:10px;text-align:right; color:#FFF; background-color:#3c4f86; padding:2px;"><?=$respuesta." ($totaaa)"?></div>
            <div style="clear:both; height:10px;"></div>
			<?
			}else{
				?>
			<div style="width:100%; float:left; font-size:10px;text-align:left; color:#000;padding:2px;"><?=$respuesta." ($totaaa)"?></div>
            <div style="clear:both; height:10px;"></div>
			<?
				
				}
			}?>
    </div>
    <div class="salto"></div>
<?
}

?>
