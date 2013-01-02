<?php
session_start();
extract($_POST);

if($usuario == "zarkin" && $contrasena=="zarkin2011"){	
	$_SESSION['loginAdmin'] = "exito";
	header("Location: admin.php");
}else{
	$_SESSION['errorSesion'] = "Usuario y/o Contrase&ntilde;a Incorrectos<br>Intente de Nuevo";
	header("Location: index.php");
}
?>