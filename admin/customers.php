<?php
	session_start();
	if($_SESSION['user']){
		include_once('funciones.php');
		
		get_head('Zarkin | Administrator');
		get_header('Index');
		get_menu();
		get_customers('Zarkin','All customers');
		get_footer();
	}else{
		echo '<script>location.href="login.php"</script>';	
	}
?>