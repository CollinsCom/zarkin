<?php
	session_start();
	if($_SESSION['user']){
		include_once('funciones.php');
		
		get_head('SimTraveler | Administrator');
		get_header('Index');
		get_menu();
		get_customers('SimTraveler','All customers');
		get_footer();
	}else{
		echo '<script>location.href="login.php"</script>';	
	}
?>