<?php
	session_start();
	if($_SESSION['user']){
		include_once('funciones.php');
		
		get_head('Zarkin | Administrator');
		get_header('Accounts');
		get_menu();
		new_account('Zarkin','Create Account');
		get_footer();
	}else{
		echo '<script>location.href="login.php"</script>';	
	}
?>