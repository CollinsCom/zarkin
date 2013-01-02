<?php include("funciones.php");

if($cual == "coleccion"){
	$q = mysql_query("SELECT * FROM zarkin_imagen WHERE id = '$idi'");
	while($r = mysql_fetch_array($q)){
		$img = "../".$r['rutaImg'];
		if(is_file($img)){
			unlink($img);
		}
	}
	mysql_query("DELETE FROM zarkin_imagen WHERE id = '$idi'");
}
?>