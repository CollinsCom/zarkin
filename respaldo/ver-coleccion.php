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
<? extract($_GET);
	$sel=mysql_query("SELECT * FROM zarkin_coleccion WHERE id='$idcoleccion'");
	while($as=mysql_fetch_array($sel)){
		extract($as);
		}
?>
<? 
	$sel=mysql_query("SELECT * FROM zarkin_imagen WHERE idColeccion='$idcoleccion' ORDER BY id ASC LIMIT 0,1");
	while($as=mysql_fetch_array($sel)){
		extract($as);
		$idactual=$id;
		}
?>
	<div class="bgtop">
		<img src="<?=_path?><?=$rutaImg?>" class="bg top" alt="" />
	</div>
    <div class="bgbot">
		<img src="<?=_path?><?=$rutaImg?>" class="bg bot" alt="" />
	</div>
    <div class="barratop">

    </div>
    <div class="logo-dos">
    	<a href="<?=_path?>home.php"></a>
    </div>
    <div class="titulos">
    <? 
		$sel=mysql_query("SELECT * FROM zarkin_categoria WHERE id='$idCategoria'");
		while($as=mysql_fetch_array($sel)){
			extract($as);
			$nombreurl=friendurl($nombre);
			}
	?>
    	<?=$nombre?>
     	<div class="clear"></div>
       	<span><?=$titulo?></span>
        <a href="<?=_path?>ver-categoria/idcategoria/<?=$idCategoria?>/zarkin/<?=$nombreurl?>/" class="updown">Regresar</a>
    </div>
    <? 
		$sel=mysql_query("SELECT * FROM zarkin_imagen WHERE idColeccion='$idcoleccion' ORDER BY id ASC");
		$num=mysql_num_rows($sel);
		?>
        <script type="text/javascript">
		var fotos=new Array();
		<?
		while($as=mysql_fetch_array($sel)){
			extract($as);
			?>
			fotos.push("<?=_path?><?=$rutaImg?>");
			<?
			}
		?>
        </script>
		<?
		if($num>1){
			$sel=mysql_query("SELECT * FROM zarkin_imagen WHERE idColeccion='$idcoleccion' AND id>$idactual ORDER BY id ASC LIMIT 0,1");
			while($as=mysql_fetch_array($sel)){
				extract($as);
				?>
				<div class="flechader">
                    <a href="<?=_path?><?=$rutaImg?>" class="next nex"></a>
                </div>
				<?
				}
            $sel=mysql_query("SELECT * FROM zarkin_imagen WHERE idColeccion='$idcoleccion' AND id>$idactual ORDER BY id DESC LIMIT 0,1");
			while($as=mysql_fetch_array($sel)){
				extract($as);
				?>
				<div class="flechaizq">
                    <a href="<?=_path?><?=$rutaImg?>" class="next pre"></a>
                </div>
				<?
				}
			?>	
			<?
			}
	?>
    <? include "menu.php";?>
</body>
</html>