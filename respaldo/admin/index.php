<?php 
session_start();
if(isset($_SESSION['loginAdmin'])){
	header("Location:admin.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zarkin</title>
<link type="text/css" rel="stylesheet" href="../css/admin.css" />
</head>
<body>
<div class="gal-bg"></div>
    <div class="gal-bg-degradado"></div>
<div class="contenedor">
	<div class="logoSesion">
    	<a href="../index.php"><img src="../images/logoZarkin.png" /></a>
    </div>
  <div class="salto"></div>
	
    <div class="salto"></div>
    <?
	if(isset($_SESSION['errorSesion'])){
	?>
    <div class="errorSesion">
    	<?
		echo $_SESSION['errorSesion'];
		unset($_SESSION['errorSesion']);
		?>
</div>
    <div class="salto"></div>
    <?
	}
	?>
  	<div class="centroSesion">
    	<form name="login" action="login.php" method="post">
        <div>Usuario</div>
        <div class="salto"></div>
        <div><input type="text" name="usuario" size="30" /></div>
        <div class="salto"></div>
        <div>Contrase&ntilde;a</div>
        <div class="salto"></div>
        <div><input type="password" name="contrasena" size="30" /></div>
        <div class="salto"></div>
        <div><input type="submit" name="boton" value="Iniciar Sesi&oacute;n"/></div>
        <div class="salto"></div>
        </form>
    </div>
    <div class="salto"></div>
</div>
</body>
</html>
