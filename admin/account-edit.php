<?php
	session_start();
	if($_SESSION['user']){
		include_once('funciones.php');
		
		get_head('SimTraveler | Administrator');
		get_header('Accounts');
		get_menu();
		edit_account('SimTraveler','Edit Account');
		get_footer();
	}else{
		echo '<script>location.href="login.php"</script>';	
	}
?>