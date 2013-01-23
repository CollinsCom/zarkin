<?php
    session_start();
    include_once('funciones.php');
    if(isset($_POST['signup'])){
        signup();
        
    }else{
	if($_SESSION['user']){
		
                if(!isset($_GET['error'])){
                    $error = 0;
                }else{
                    $error = $_GET['error'];
                }
                
		get_head('SimTraveler | Administrator');
		get_header('Shipping');
		get_menu();
		customer_add('New Customer','Customer Information',$error);
		get_footer();
	}else{
		echo '<script>location.href="login.php"</script>';	
	}
    }
?>