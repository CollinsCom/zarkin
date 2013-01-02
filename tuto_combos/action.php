<?php
	include_once("funciones.php");
	
	$link=conectar();

	function getCiudades(){
		global $link;
		$sql="select * from ciudades where id_estado=".$_POST["idestado"];
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