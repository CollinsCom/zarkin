<?php
	session_start();
	if($_SESSION['user']){
		include_once('funciones.php');
		get_head('Zarkin | Garantías');
		get_header('Index');
		get_menu();
		get_orders('Garantías','Garantías');
		get_footer();
	}else{
		echo '<script>location.href="login.php"</script>';	
	}
?>