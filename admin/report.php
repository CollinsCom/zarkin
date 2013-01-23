<?php
	session_start();
	if($_SESSION['user']){
		include_once('funciones.php');
		
		if(isset($_GET['f1']) && isset($_GET['f2'])){
			$dates = array(
				"f1" => $_GET['f1'],
				"f2" => $_GET['f2']
			);
		}else{
                    $dates = array();
		}
		
		get_head('Zarkin | Administrator');
		get_header('Index');
		get_menu();
		get_report('Zarkin','Garantías',$dates);
        get_footer();
?>
<script type="text/javascript">
    $(document).ready(function(){
        
        $( ".datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
        
    });
</script>
<?php
	}else{
		echo '<script>location.href="login.php"</script>';	
	}
?>