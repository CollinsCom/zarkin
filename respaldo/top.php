<?php 
include "conexion.php";
//define("_path", "http://localhost/zarkin/");
define("_path", "http://sitios.collinscom.com/zarkinhtml/");

$GLOBALS['normalizeChars'] = array(
    'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 
    'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 
    'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 
    'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 
    'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 
    'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 
    'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f'
);

function friendurl($toClean) {
	$toClean     =    strtr($toClean, $GLOBALS['normalizeChars']);
    $toClean     =     str_replace('&', '-y-', $toClean);
    $toClean     =    trim(preg_replace('/[^\w\d_ -]/si', '', $toClean));
    $toClean     =     str_replace(' ', '-', $toClean);
    $toClean     =     str_replace('--', '-', $toClean);
    $toClean     =     strtolower($toClean);
    return strtr($toClean, $GLOBALS['normalizeChars']);
}
function fechaletra($fecha){
	list($ano,$mes,$dia)=split("-",$fecha);
	if($mes=="01"){$mess="Enero";}
	if($mes=="02"){$mess="Febrero";}
	if($mes=="03"){$mess="Marzo";}
	if($mes=="04"){$mess="Abril";}
	if($mes=="05"){$mess="Mayo";}
	if($mes=="06"){$mess="Junio";}
	if($mes=="07"){$mess="Julio";}
	if($mes=="08"){$mess="Agosto";}
	if($mes=="09"){$mess="Septiembre";}
	if($mes=="10"){$mess="Octubre";}
	if($mes=="11"){$mess="Noviembre";}
	if($mes=="12"){$mess="Diciembre";}
	$fechaNormal="$dia de $mess $ano";
	return $fechaNormal;
	}
function timeletra($timestamp){
	list($fecha,$hora)=split(" ",$timestamp);
	list($ano,$mes,$dia)=split("-",$fecha);
	if($mes=="01"){$mess="Enero";}
	if($mes=="02"){$mess="Febrero";}
	if($mes=="03"){$mess="Marzo";}
	if($mes=="04"){$mess="Abril";}
	if($mes=="05"){$mess="Mayo";}
	if($mes=="06"){$mess="Junio";}
	if($mes=="07"){$mess="Julio";}
	if($mes=="08"){$mess="Agosto";}
	if($mes=="09"){$mess="Septiembre";}
	if($mes=="10"){$mess="Octubre";}
	if($mes=="11"){$mess="Noviembre";}
	if($mes=="12"){$mess="Diciembre";}
	$fechaNormal="$dia de $mess $ano";
	return $fechaNormal;
	}
?>
