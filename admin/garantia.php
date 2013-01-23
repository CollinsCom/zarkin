<?php
	session_start();
	if($_SESSION['user']){
		include_once('funciones.php');
		get_head('Zarkin | Garantía');
		get_header('Index');
		get_menu();
		get_garantia('Zarkin','Garantía',$_GET[id]);
		get_footer();
	}else{
		echo '<script>location.href="login.php"</script>';	
	}
?>