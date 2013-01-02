<?php include("funciones.php");

if($cual == "categoria"){
	mysql_query("DELETE FROM zarkin_categoria WHERE id = '$idm'");
	
}
if($cual == "coleccion"){
	$q = mysql_query("SELECT * FROM zarkin_imagen WHERE idColeccion = '$idm'");
	while($r = mysql_fetch_array($q)){
		$img = "../".$r['rutaImg'];
		if(is_file($img)){
			unlink($img);
		}
	}
	$q = mysql_query("SELECT * FROM zarkin_coleccion WHERE id = '$idm'");
	while($r = mysql_fetch_array($q)){
		$img = "../".$r['rutaImgThumb'];
		if(is_file($img)){
			unlink($img);
		}
	}
	mysql_query("DELETE FROM zarkin_coleccion WHERE id = '$idm'");
	mysql_query("DELETE FROM zarkin_imagen WHERE idColeccion = '$idm'");
	
}
?>