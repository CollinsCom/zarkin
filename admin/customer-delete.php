<?php
	session_start();
	if($_SESSION['user']){
            include_once('funciones.php');

            if(isset($_GET['phone_number'])){
                $link   = conectar();
                $query  = "DELETE FROM users WHERE phone_number = ".$_GET['phone_number'].";";
                $resultado = mysql_query($query,$link) or die(mysql_error());
                if($resultado){
                    echo '  <script type="text/javascript">
                                alert("The customer has been deleted.");
                                location.href="customers.php";
                            </script>';
                }else{
                    echo '  <script type="text/javascript">
                                alert("An error occurred when deleting customer..");
                                location.href="customer-view.php?phone_number='.$_GET['phone_number'].'";
                            </script>';
                }

            }
		
	}else{
		echo '<script>location.href="login.php"</script>';	
	}
?>