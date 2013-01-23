<?php
	session_start();
	if($_SESSION['user']){
		include_once('funciones.php');
		
		get_head('Sim Traveler | Administrator');
		get_header('Custumer View');
		get_menu();
		if($_GET['phone_number']){
			customer_view('Sim Traveler','Customer View',$_GET['phone_number']);
		}
		get_footer();

	}else{
		echo '<script>location.href="login.php"</script>';	
	}
?>