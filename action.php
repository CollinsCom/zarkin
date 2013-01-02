<?php
	//include_once("funciones.php");
	
	function conectar(){

		$link = mysql_connect("localhost","zarkin","zarkadmdb") or die('no se puede conectar a la base de datos');
		mysql_select_db('zarkin_db') or die('no se puede conectar a la base de datos');
		mysql_set_charset('utf8',$link);

		if($link){ return $link; }
	}

	$link=conectar();

	function getCiudades(){
		global $link;
		$sql="select * from municipios where estado_id=".$_POST["idestado"];
		mysql_set_charset('utf8',$link);
		$result=mysql_query($sql,$link);
		$resp="";
		if($result){
			if(mysql_num_rows($result)>0){
				$resp.="<option value=''>- Seleccione Ciudad -</option>";
				while($r=mysql_fetch_object($result)){
					$resp.="<option value='".$r->id."'>".$r->nombre."</option>";
				}
			}else $resp="<option value=''>No hay resultados</option>";
		}else $resp="ERROR";
		echo $resp;
	}

	if($_POST){
		switch($_POST["tarea"]){
		case "listCiudad":getCiudades();
				break;
		}
	}
?>