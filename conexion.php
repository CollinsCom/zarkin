<?php
	function conectar(){
		
		//CONEXION SERVIDOR DE PRUEBAS
		
		$conexion = mysql_connect("localhost","zarkin","zarkadmdb") or die("Error en la conexion a la base de datos");
		mysql_select_db("zarkin_db", $conexion);
		mysql_set_charset('utf8',$conexion);
		
		// CONEXION LOCAL 
		
		/*$conexion = mysql_connect("localhost","root","") or die("Error en la conexion a la base de datos");
		mysql_select_db("zarkin", $conexion);*/
		
		if($conexion){
			return $conexion;
		}else{
			echo 'No se pudo establecer la conexion con la base de datos';
		}
	}
?>