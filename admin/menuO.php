<?php
include_once('funciones.php');


function get_menu(){
?>
	<!-- Begin left panel -->
	<!--<a href="javascript:;" id="show_menu">&raquo;</a>
	<div id="left_menu">
            <a href="javascript:;" id="hide_menu">&laquo;</a>
            <ul id="main_menu">
                <li><a href="report.php" ><img src="images/icon_report.png" alt="Home" />Reports</a></li>
                <li>
                    <a id="" href=""><img src="images/icon_order.png" alt="Pages"/>Orders</a>
                    <ul>
                        <li><a href="index.php">All orders</a></li>
                        <li><a href="index.php?view=Recharge">Recharges</a></li>
                        <li><a href="index.php?view=Purchase">Purchases</a></li>
                    </ul>
                </li>
                <li>
                    <a id="" href=""><img src="images/icon_customer.png" alt="Pages"/>Customers</a>
                    <ul>
                        <li><a href="customers.php">All customers</a></li>
                        <li><a href="customer-add.php">New customer</a></li>
                    </ul>
                </li>
                <li>
                    <a id="" href=""><img src="images/icon_code.png" alt="Pages"/>TopUP Codes</a>
                    <ul>
                        <li><a href="codes.php">All codes</a></li>
                        <li><a href="codes.php?state=used">Used codes</a></li>
                        <li><a href="codes.php?state=allocated">Allocated codes</a></li>
                    </ul>
                </li>
                <li>
                    <a id="" href=""><img src="images/icon_account.png" style="width:24px;" alt="Pages"/>Accounts</a>
                    <ul>
                        <li><a href="accounts.php">Accounts</a></li>
                        <li><a href="new-account.php">New Account</a></li>
                    </ul>
                </li>
            </ul>
            <br class="clear"/>
	</div>-->
	<!-- End left panel -->
<?php
	$link = conectar();
	
	$query_titulos = "SELECT DISTINCT pages.title, pages.icon FROM pages INNER JOIN privileges ON privileges.page_id = pages.id INNER JOIN accounts ON privileges.account_id = accounts.id WHERE accounts.name = '".$_SESSION['user']."';";
	$resultado_titulos = mysql_query($query_titulos,$link) or die(mysql_error());
	
	?>
    <a href="javascript:;" id="show_menu">&raquo;</a>
	<div id="left_menu">
            <a href="javascript:;" id="hide_menu">&laquo;</a>
            <ul id="main_menu">
				<?php
				$principio = 1;
                while($titulo = mysql_fetch_object($resultado_titulos)){
                    
					$query = "SELECT pages.name, pages.url FROM pages INNER JOIN privileges ON privileges.page_id = pages.id INNER JOIN accounts ON privileges.account_id = accounts.id WHERE pages.title = '".$titulo->title."' AND accounts.name = '".$_SESSION['user']."' ORDER BY pages.id;";
					
					$resultado = mysql_query($query,$link) or die(mysql_error());
					
					
					echo '<li>';
					if($principio == 1) { 
						echo '<a href="#" ></a>'; 
						$principio = 0;
						echo '</li><li>';
					}
					echo '<a href="#" ><img src="'.$titulo->icon.'" alt="" style="width:24px;" />'.$titulo->title.'</a>';
					if($resultado){
						echo '<ul>';
						while($page = mysql_fetch_object($resultado)){
							echo '<li><a href="'.$page->url.'">'.$page->name.'</a></li>';
						}
						echo '</ul>';
					}
					echo '</li>';
                    
                }
				?>
            </ul>
            <br class="clear"/>
	</div>
                <?php
	
}

				/*<li>
                    <a id="" href=""><img src="images/icon_order.png" alt="Pages"/>Orders</a>
                    <ul>
                        <li><a href="index.php">All orders</a></li>
                        <li><a href="index.php?view=Recharge">Recharges</a></li>
                        <li><a href="index.php?view=Purchase">Purchases</a></li>
                    </ul>
                </li>*/
?>
