<?php include("funciones.php");

$fecha =  date( 'Y-m-d');
include("forma.php");
if($cual == "categoria"){
		
				mysql_query("INSERT INTO zarkin_categoria (nombre) VALUES ('$titulo')");
				$_SESSION['error']=$tituloForma.' Cread@ Exitosamente.';

}
if($cual=="coleccion"){
	
	mysql_query("INSERT INTO zarkin_coleccion (titulo,descripcion,idCategoria) VALUES ('$titulo','$descripcion','$idCategoria')");
	$idColeccion=mysql_insert_id();
	if (isset ($_FILES["thumb"])){
			$tmp_name = $_FILES["thumb"]["tmp_name"];
			$name = $_FILES["thumb"]["name"];
			$prefijo = substr(md5(uniqid(rand())),0,6);
	
			if($tmp_name != ""){
				$ext = getExtension($name);
				$ext = strtolower($ext);
				
				if (($ext == "jpg") || ($ext == "jpeg") || ($ext == "png") || ($ext == "gif")){
					$destino =  "contenido/".$prefijo."_thumb.".$ext;
					$destinoa =  "../contenido/".$prefijo."_thumb.".$ext;
					
					copy($tmp_name,$destinoa);
					
					list($ancho, $alto) = getimagesize($destinoa);
					if(($ancho != 130) || ($alto!=130)){
						smart_resize_image( $destinoa, $width = 130, $height = 130, $proportional = false, $output = 'file', $delete_original = true, $use_linux_commands = false,  $quality = 100);
					}
				
					mysql_query("UPDATE zarkin_coleccion SET rutaImgThumb = '$destino' WHERE id='$idColeccion' ");
				}	
			}
		}
	if (isset ($_FILES["imageng"])){
		$num=count($_FILES['imageng']['name']);
		
		for($i=0;$i<$num;$i++){
			$tmp_name = $_FILES["imageng"]["tmp_name"][$i];
			$name = $_FILES["imageng"]["name"][$i];
			$prefijo = substr(md5(uniqid(rand())),0,6);
	
			if($tmp_name != ""){
				$ext = getExtension($name);
				$ext = strtolower($ext);
				
				if (($ext == "jpg") || ($ext == "jpeg") || ($ext == "png") || ($ext == "gif")){
					$destino =  "contenido/".$prefijo."_coleccion.".$ext;
					$destinoa =  "../contenido/".$prefijo."_coleccion.".$ext;
					
					copy($tmp_name,$destinoa);
					
					list($ancho, $alto) = getimagesize($destinoa);
					if(($ancho != 1100) || ($alto!=750)){
						smart_resize_image( $destinoa, $width = 1100, $height = 750, $proportional = false, $output = 'file', $delete_original = true, $use_linux_commands = false,  $quality = 100);
					}
				
					mysql_query("INSERT INTO zarkin_imagen (rutaImg,idColeccion) VALUES ('$destino','$idColeccion')");
				}	
			}
		}
	}
	$_SESSION['error']=$tituloForma.' Cread@ Exitosamente.';
	
	}
header("Location:admin.php");

?>