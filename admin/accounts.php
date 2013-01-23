<?php
	session_start();
	if($_SESSION['user']){
		include_once('funciones.php');
		
		get_head('Zarkin | Administrator');
		get_header('Accounts');
		get_menu();
		accounts('Zarkin','Accounts');
		get_footer();
	}else{
		echo '<script>location.href="login.php"</script>';	
	}
?>