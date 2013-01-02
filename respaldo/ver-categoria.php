<? include "top.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?=_path?>css/style.css" />
<link rel="shortcut icon" href="<?=_path?>images/favicon.ico"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js"></script>
<script type="text/javascript" src="<?=_path?>js/jquery.waitforimages.js"></script>
<script type="text/javascript" src="<?=_path?>js/lib.js"></script>
<title>Zarkin</title>
</head>

<body class="black">
	<div class="bgtop">
		<img src="<?=_path?>images/bg-coleccion.jpg" class="bg top" alt="" />
	</div>
    <div class="bgbot">
		<img src="<?=_path?>images/bg-coleccion.jpg" class="bg bot" alt="" />
	</div>
    <div class="logo-dos">
    	<a href="<?=_path?>home.php"></a>
    </div>
    <div class="cole-thumbs">
    <? 
	extract($_GET);
	$sel=mysql_query("SELECT * FROM zarkin_coleccion WHERE idCategoria='$idcategoria'");
	while($as=mysql_fetch_array($sel)){
		extract($as);
		$titulo=friendurl($titulo);
		?>
		<div class="thumb">
        	<a href="<?=_path?>ver-coleccion/idcoleccion/<?=$id?>/zarkin/<?=$titulo?>/"><img src="<?=_path?><?=$rutaImgThumb?>" alt="" /></a>
        </div>
		<?
		}
	?>  
    </div>
    <? include "menu.php";?>
</body>
</html>