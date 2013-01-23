<?php
	session_start();
	if($_SESSION['user']){
            include_once('funciones.php');

            if(isset($_GET['id'])){
                $link   = conectar();
                $query  = "DELETE FROM accounts WHERE id = ".$_GET['id'].";";
                $resultado = mysql_query($query,$link) or die(mysql_error());
                if($resultado){
                    echo '  <script type="text/javascript">
                                /*alert("The Account has been deleted.");*/
                                location.href="accounts.php?deleted=1";
                            </script>';
                }else{
                    echo '  <script type="text/javascript">
                                /*alert("An error occurred when deleting account..");*/
                                location.href="accounts.php?deleted=2";
                            </script>';
                }

            }
		
	}else{
		echo '<script>location.href="login.php"</script>';	
	}
?>