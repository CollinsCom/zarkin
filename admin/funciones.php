<?php
/* 
	Archivo de funciones para el proyecto de administración
	de proyectos.
	Creado por Luis Escobar
	luis.multis@gmail.com
*/

// Desactivar toda notificación de error
error_reporting(1);
ini_set('error_reporting', E_ERROR);
// Notificar solamente errores de ejecución
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

<?php  
	include_once('funciones_estilos.php');
	include_once('../conexion.php');
	include_once('menu.php');
	include_once('http_request.php');
?>

<?php
function get_orders($titulo,$titulo2,$view){
	$link = conectar();
	
	if($view == 'Recharge'){
		$query_orders = "SELECT * FROM orders WHERE type = 'Recharge'";
								$action = 'index.php?view=Recharge';
	}elseif($view == 'Purchase'){
		$query_orders = "SELECT * FROM orders WHERE type = 'Purchase'";
								$action = 'index.php?view=Purchase';
	}else{
		$query_orders = "SELECT * FROM orders WHERE 1";
								$action = 'index.php';
	}
				
				
				if(isset($_GET['f1']) && isset($_GET['f2'])){
						$query_orders.= " AND date BETWEEN '".$_GET['f1']."' AND '".$_GET['f2']."'";
				}
		
	$resultado = mysql_query($query_orders,$link) or die(mysql_error());
	
	?>
		<!-- Begin content -->
		
		<div id="content">
		<div class="inner">
			<h1><?php echo $titulo; ?></h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
				<div class="header"><span><?php echo $titulo2; ?></span></div>
				<br class="clear"/>
				<div class="content">
																		<div id="mensaje"></div>
																		<div id="date_filter">
																				<label>Select a date range</label>
																				<form method="get" action="<?php echo $action; ?>">
																						<table border="0" class="range">
																								<tr>
																										<td><input type="text" id="f1" name="f1" class="datepicker :required" value="<?php echo date("Y-m-d");?>" style="width:90px;" /></td>
																										<td><input type="text" id="f2" name="f2" class="datepicker :required" value="<?php echo date("Y-m-d");?>" style="width:90px;" /></td>
																										<td colspan="2"><input type="submit" id="btn_date" value="Search" /></td>
																								</tr>
																						</table>
																				</form>
																		</div>
									<?php
										/*if($_GET['cambio-status']==1){
						mensaje('success', 'El video ha sido aprobado con exitosamente.');
					}elseif($_GET['cambio-status']==2){
						mensaje('success', 'El video ha sido eliminado con exitosamente.');
					}*/
					?>
										<table id="listado" class="data" style="width:100%; float:left;">
												<thead>
														<tr>
															<th><strong>Order Number</strong></th>
																<th><strong>Date</strong></th>
																<th><strong>Amount</strong></th>
																<th><strong>Description</strong></th>
																<th><strong>Type</strong></th>
																<th><strong>Phone Number</strong></th>
																<th><strong>Status</strong></th>
																<th><strong>More</strong></th>
														</tr>
												</thead>
												<tbody>
												<?php
												while($order = mysql_fetch_assoc($resultado)){
							extract($order);
												?>
														<tr>
															<td><?php echo $order_number; ?></td>
															<td><?php echo cambioFecha($date); ?></td>
																<td><?php echo '$'.number_format($amount,2,'.',','); ?></td>
																<td><?php if($type == "Purchase"){ echo substr($description,6); }else{ echo $description; } ?></td>
																<td><?php echo $type; ?></td>
																<td style="width:90px;"><?php echo $phone; ?></td>
																<td style="width:90px;">
																		<?php
																				if($type != "Purchase"){
																						echo $status;
																				}else{
																						$selected = ($status == 'Shipped') ? "selected=selected" : "";
																		?>
																						<select name="status" onchange="change_status(<?= $order_number;?>,this);">
																								<option value="Pending Shipment" <?= $selected;?> >Pending Shipment</option>
																								<option value="Shipped" <?= $selected;?> >Shipped</option>
																						</select>
																		<?php } ?>
																</td>
																<td style="width:90px;">
																		<?php 
																				if($type=="Purchase"){
																		?>
																		<a href="billing.php?order=<?php echo $order_number; ?>"><img src="images/icon_billing.png" title="Billing information" /></a>&nbsp;
																		<?php 
																				}else{
																						echo '&nbsp;';
																				}
																		?>
																</td>
																
														</tr> 
												<?php
												}
												?>
												</tbody>
												<tfoot>
														<tr>
															<th><strong>Order Number</strong></th>
																<th><strong>Date</strong></th>
																<th><strong>Amount</strong></th>
																<th><strong>Description</strong></th>
																<th><strong>Type</strong></th>
																<th><strong>Phone Number</strong></th>
																<th><strong>Status</strong></th>
																<th><strong>More</strong></th>
														</tr>
												</tfoot>
										</table>
										<div style="clear:both;"></div>
						</div>
			</div>
			<!-- End one column tab content window -->	
		<?php	
}
?>

<?php
	function get_report($titulo,$titulo2,$dates){
		$link = conectar();
		/* Get Reports */
		//$query = "SELECT amount,COUNT(*) AS cant FROM orders WHERE TYPE = 'Recharge' AND amount NOT IN(1)";
		$query = "SELECT * FROM garantias";
		$title = "Garantías";        
		//$query.= " GROUP BY amount";

		$result = mysql_query($query,$link) or die(mysql_error());
		$cant = mysql_affected_rows();
		$lista = array();

		while ($reg = mysql_fetch_array($result)) {
			if (array_key_exists($reg['amount'], $lista)) {
				$lista[$reg['amount']] += 1;
			}
			else {
				$lista[$reg['amount']] = 1;
			}
		}
		asort($lista); // arsort() si se quiere en onrden inverso
		$elements = "";
		foreach ($lista as $key => $value) {
		//['10', 11],
		$elements.= "['$".$key." USD Recharge',".$value."],";
				
	}
	$elements = substr($elements, 0, -1);
?>
				<script type="text/javascript" src="http://www.google.com/jsapi"></script>
				<script type="text/javascript">
					google.load('visualization', '1', {packages: ['corechart']});
				</script>
				<script type="text/javascript">
						function drawVisualization() {
							// Create and populate the data table.
							var data = google.visualization.arrayToDataTable([
								['Order Value', 'Count'],
								<?php
										echo $elements;
								?>
							]);

							// Create and draw the visualization.
							new google.visualization.PieChart(document.getElementById('visualization')).
									draw(data,{is3D: true,title:"<?php echo $title;?>"});
						}
						google.setOnLoadCallback(drawVisualization);
				</script>
				<!-- Begin content -->
	<div id="content">
		<div class="inner">
			<h1><?php echo $titulo; ?></h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
				<div class="header"><span><?php echo $titulo2; ?></span></div>
				<br class="clear"/>
				<div class="content">
					<div id="date_filter">
						<!-- <label>Select a date range</label>
							<form method="get" action="report.php">
								<table border="0" class="range">
									<tr>
										<td><input type="text" id="f1" name="f1" class="datepicker :required" value="<?php echo date("Y-m-d");?>" style="width:90px;" /></td>
										<td><input type="text" id="f2" name="f2" class="datepicker :required" value="<?php echo date("Y-m-d");?>" style="width:90px;" /></td>
										<td colspan="2"><input type="submit" id="btn_date" value="Search" /></td>
									</tr>
								</table>
							</form>
						</div> -->
						<?php 
						$link = mysql_connect ('localhost', 'zarkin', 'zarkadmdb') OR die ('No se pudo conectar a la base de datos: ' . mysql_error() );
						mysql_query("set names 'utf8'");
						mysql_select_db ('zarkin_db') OR die ('No se pudo seleccionar la base de datos: ' . mysql_error() );

						$query = "SELECT *FROM garantias AS g LEFT JOIN municipios AS m ON g.ciudad_t=m.id LEFT JOIN estados AS e ON m.estado_id=e.id_estado";

						$resultado = mysql_query($query,$link) or die(mysql_error());
					?>
					<div class="clear25px"></div>
					<table class="data" id="listado">
						<tr style="background-color:#E10079;">
			    		<th><strong>Nombre del cliente</strong></th>
			    		<th><strong>Edad</strong></th>
			    		<th><strong>Modelo del mueble</strong></th>
			    		<th><strong>Color</strong></th>					    	
			        <th><strong>Tienda</strong></th>
			        <th><strong>Estado</strong></th>
			        <th><strong>Ciudad</strong></th>
			        <th><strong>Factor de Compra</strong></th>
			        <th><strong>Como nos conocio</strong></th>
				    </tr>
					    <?php
							    while($garantia=mysql_fetch_assoc($resultado)){
									extract($garantia);
									// echo '<pre>';
									// print_r($garantia);
									// echo '</pre>';
									echo '<tr>';
										echo '<td>'.$nombre_cliente.' '.$a_paterno.' '.$a_materno.'</td>';
										echo '<td>'.$edad.'</td>';
										echo '<td>'.$modelo_mueble.'</td>';
										echo '<td>'.$color.'</td>';
										echo '<td>'.$tienda.'</td>';
										echo '<td>'.$nombre_estado.'</td>';
										echo '<td>'.$nombre.'</td>';
										echo '<td>'.$factor_compra.'</td>';
										echo '<td>'.$conocio_producto.'</td>';
									echo '</tr>';
								}
						?>
					</table>
						<!-- <div id="visualization" style="width: 600px; height: 400px;"></div> -->						
						<?php 
						// echo "Total recharges ".$cant; 
						?>
				</div>
			</div>
			<!-- End one column tab content window -->
				<?php
}

function get_admin($titulo,$titulo2){
		$link = conectar();
		$query_orders = "SELECT * FROM admin;";
		$resultado = mysql_query($query_orders,$link) or die(mysql_error());
		
		?>
				<!-- Begin content -->
	<div id="content">
		<div class="inner">
			<h1><?php echo $titulo; ?></h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
				<div class="header"><span><?php echo $titulo2; ?></span></div>
				<br class="clear"/>
				<div class="content">
										<table id="listado" class="data" style="width:100%; float:left;">
												<thead>
														<tr>
															<th><strong>Username</strong></th>
																<th><strong>Profile</strong></th>
																<th><strong>More</strong></th>
														</tr>
												</thead>
												<tbody>
												<?php
												while($customer = mysql_fetch_assoc($resultado)){
							extract($customer);
												?>
														<tr>
															<td><?php echo $username; ?></td>
															<td><?php echo $admin_profile = ( $profile == 1 ) ? "Administrator" : "Other"; ?></td>
																<td style="width:90px;">
																		<a href="user-delete.php?id=<?php echo $id;?>" id="delete"><img src="images/icon_delete.png" title="Delete" /></a>&nbsp;
																</td>
														</tr> 
												<?php
												}
												?>
												</tbody>
												<tfoot>
														<tr>
															<th><strong>Username</strong></th>
																<th><strong>Profile</strong></th>
																<th><strong>More</strong></th>
														</tr>
												</tfoot>
										</table>
										<div style="clear:both;"></div>
						</div>
			</div>
			<!-- End one column tab content window -->	
		<?php
		
}

function get_customers($titulo,$titulo2){
	$link = conectar();
	$query_orders = "SELECT * FROM users WHERE 1;";
	$resultado = mysql_query($query_orders,$link) or die(mysql_error());
	
	?>
				<!-- Begin content -->
	<div id="content">
		<div class="inner">
			<h1><?php echo $titulo; ?></h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
				<div class="header"><span><?php echo $titulo2; ?></span></div>
				<br class="clear"/>
				<div class="content">
										<table id="listado" class="data" style="width:100%; float:left;">
												<thead>
														<tr>
															<th><strong>Phone Number</strong></th>
																<th><strong>Company</strong></th>
																<th><strong>Full Name</strong></th>
																<th><strong>Country</strong></th>
																<th><strong>Email</strong></th>
																<th><strong>More</strong></th>
														</tr>
												</thead>
												<tbody>
												<?php
												while($customer = mysql_fetch_assoc($resultado)){
							extract($customer);
												?>
														<tr>
															<td><?php echo $phone_number; ?></td>
															<td><?php echo $company; ?></td>
																<td><?php echo $fname.' '.$lname; ?></td>
																<td><?php echo $country; ?></td>
																<td><?php echo $email; ?></td>
																<td style="width:90px;">
																	<a href="customer-view.php?phone_number=<?php echo $phone_number; ?>"><img src="images/icon_view.png" title="Ver" /></a>&nbsp;
																				<a href="customer-delete.php?phone_number=<?php echo $phone_number; ?>" id="delete"><img src="images/icon_delete.png" title="Delete" /></a>&nbsp;
																</td>
														</tr> 
												<?php
												}
												?>
												</tbody>
												<tfoot>
														<tr>
															<th><strong>Phone Number</strong></th>
																<th><strong>Company</strong></th>
																<th><strong>Full Name</strong></th>
																<th><strong>Country</strong></th>
																<th><strong>Email</strong></th>
																<th><strong>More</strong></th>
																
														</tr>
												</tfoot>
										</table>
										<div style="clear:both;"></div>
						</div>
			</div>
			<!-- End one column tab content window -->	
		<?php	
}

function user_add($titulo,$titulo2,$error){
		?>
		<!-- Begin content -->
	<div id="content">
		<div class="inner">
			<h1><?php echo $titulo; ?></h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
														<div class="header"><span><?php echo $titulo2; ?></span></div>
				<br class="clear"/>
				<div class="content">
																		<div id="mensaje" >
																				<?php
																						if($error == 1){
																								mensaje("error", "An error occurred when saving data.");
																						}elseif($error == 2){
																								mensaje("error", "This user is already in the database.");
																						}
																				?>
																		</div>
																		<form method="post" action="user-add.php">
																				<table class="formulario">
																								<tr>
																								<td>Username:</td>
																								<td><input type="text" id="username" name="username" class=":required :only_on_blur" /></td>
																						</tr>
																						<tr>
																								<td>Password:</td>
																								<td><input type="password" id="password" name="password" class=":required :only_on_blur" /> </td>
																						</tr>
																						<tr>
																								<td>Profile:</td>
																								<td>
																										<select id="profile" name="profile">
																												<option value="1">Administrator</option>
																												<option value="2">Other</option>
																										</select>
																								</td>
																						</tr>
																						<tr>
																								<td></td>
																								<td><input type="submit" id="signup" name="signup" value="Create User" /> </td>
																						</tr>
																				</table>
																		</form>
																</div>
														</div>
<?php   
}

function customer_add($titulo,$titulo2,$error){
?>
				<!-- Begin content -->
	<div id="content">
		<div class="inner">
			<h1><?php echo $titulo; ?></h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
														<div class="header"><span><?php echo $titulo2; ?></span></div>
				<br class="clear"/>
				<div class="content">
																		<div id="mensaje" >
																				<?php
																						if($error == 1){
																								mensaje("error", "An error occurred when saving data.");
																						}elseif($error == 2){
																								mensaje("error", "This Phone Number is already signing up.");
																						}
																				?>
																		</div>
																		<form method="post" action="customer-add.php">
																				<table class="formulario">
																								<tr>
																								<td>Phone Number:</td>
																								<td><input type="text" id="phone_number" name="phone_number" class=":required :number :only_on_blur" /></td>
																						</tr>
																						<tr>
																								<td>PIN:</td>
																								<td><input type="text" id="pin" name="pin" class=":required :number :only_on_blur" /> </td>
																						</tr>
																						<tr>
																								<td>Company:</td>
																								<td><input type="text" id="company" name="company" /></td>
																						</tr>
																						<tr>
																								<td>First Name:</td>
																								<td><input type="text" id="fname" name="fname" class=":required" /></td>
																						</tr>
																						<tr>
																								<td>Last Name:</td>
																								<td><input type="text" id="lname" name="lname" class=":required" /> </td>
																						</tr>
																						<tr>
																								<td>Address:</td>
																								<td><input type="text" id="address" name="address" class=":required" /> </td>
																						</tr>
																						<tr>
																								<td>Address Line 2:</td>
																								<td><input type="text" id="address2" name="address2" /> </td>
																						</tr>
																						<tr>
																								<td>City:</td>
																								<td><input type="text" id="city" name="city" class=":required" /> </td>
																						</tr>
																						<tr>
																								<td>State:</td>
																								<td><input type="text" id="state" name="state" class=":required" /> </td>
																						</tr>
																						<tr>
																								<td>ZIP:</td>
																								<td><input type="text" id="zip" name="zip" /> </td>
																						</tr>
																						<tr>
																								<td>Country:</td>
																								<td><input type="text" id="country" name="country" class=":required" /> </td>
																						</tr>
																						<tr>
																								<td>Email:</td>
																								<td><input type="text" id="email" name="email" class=":required :email :only_on_blur" /> </td>
																						</tr>
																						 <tr>
																								<td></td>
																								<td><input type="submit" id="signup" name="signup" value="Sing Up" /> </td>
																						</tr>
																				</table>
																		</form>
																</div>
														</div>
<?php
}
?>
												
<?php
function signup(){
/*	pr($_POST);exit;*/
	extract($_POST);
	
	$existe = validar_usuario($phone_number,$pin);
	
	if(!$existe){
		$link = conectar();
		$query_agregar = "INSERT INTO users (phone_number,pin,company,fname,lname,address,address2,city,state,zip,country,email) VALUES ('".$phone_number."','".$pin."','".$company."','".$fname."','".$lname."','".$address."','".$address2."','".$city."','".$state."','".$zip."','".$country."','".$email."');";
	
		$resultado = mysql_query($query_agregar,$link) or die($query_agregar.' | '.mysql_error());
		
		if($resultado){
			header("Location: customers.php");
		}else{
			header("Location: customers-add.php?error=1");
		}
	}else{
		header("Location: customer-add.php?error=2");	
	}
	
}
?>

<?php
function validar_usuario($phone,$pin){
	$link = conectar();
	$query = "SELECT * FROM users WHERE phone_number =".$phone;
	mysql_query($query,$link);
	
	if(mysql_affected_rows()){
		return 1;
	}else{
		return 0;
	}
	
}

function check_user($username){
		$link = conectar();
	$query = "SELECT * FROM admin WHERE username = '".$username."'";
	mysql_query($query,$link);
	
	if(mysql_affected_rows()){
		return 1;
	}else{
		return 0;
	}
}

function customer_view($titulo,$titulo2,$phone_number){
	$link = conectar();
	$query_customers = "SELECT * FROM users WHERE phone_number =".$phone_number.";";
	$resultado = mysql_query($query_customers,$link) or die(mysql_error());
	
	$customer = mysql_fetch_assoc($resultado);
	extract($customer);
	
	?>
		<!-- Begin content -->
	<div id="content">
		<div class="inner">
			<h1><?php echo $titulo2; ?></h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
				<div class="header"><span><?php echo $fname.' '.$lname; ?></span></div>
				<br class="clear"/>
				<div class="content">
										<table style="width:100%;" class="data">
											<tr>
													<td><strong>Phone Number</strong></td>
														<td><?php echo $phone_number; ?></td>
												</tr>
												<tr>
													<td><strong>PIN</strong></td>
														<td><?php echo $pin; ?></td>
												</tr>
												<tr>
													<td><strong>Company</strong></td>
														<td><?php echo $company; ?></td>
												</tr>
												<tr>
													<td><strong>Email</strong></td>
														<td><?php echo $email; ?></td>
												</tr>
												<tr>
														<td><strong>Address</strong></td>
														<td><?php echo $address.' '.$address2; ?></td>
												</tr>
												<tr>
														<td><strong>City</strong></td>
														<td><?php echo $city; ?></td>
												</tr>
												<tr>
														<td><strong>State</strong></td>
														<td><?php echo $state; ?></td>
												</tr>
												<tr>
														<td><strong>Country</strong></td>
														<td><?php echo $country; ?></td>
												</tr>
												<tr>
														<td><strong>ZIP</strong></td>
														<td><?php echo $zip; ?></td>
												</tr>
										</table>
										
										<div style="clear:both;"></div>
						</div>
			</div>
						
						
						<div class="onecolumn">
							<div class="header"><span>Billing History</span></div>
								<br class="clear"/>
								<div class="content">
										<table style="width:100%;">
										<?php 
												$billing_history = file_get_contents('https://www.ekit.com/ekit/api/billing_history?phone_number='.$phone_number.'&month=all&secret_key=secret_key');
												echo $billing_history;
										?>
									 </table>
										<div style="clear:both;"></div>
								</div>
						</div>

						<div class="onecolumn">
							<div class="header"><span>Calling History</span></div>
								<br class="clear"/>
								<div class="content">
										<table style="width:100%;">
										<?php 
																										//$phone_number = '2095341171';
												$calling_history = file_get_contents('https://www.ekit.com/ekit/api/calling_history?phone_number='.$phone_number.'&month=all&secret_key=secret_key');
												echo $calling_history;
										?>
									 </table>
										<div style="clear:both;"></div>
								</div>
						</div>
						<!-- End one column tab content window -->	
<?php	
}
?>



<?php
function billing_information($titulo,$titulo2,$order){
	$link = conectar();
	$query = "SELECT * FROM billings WHERE order_number =".$order.";";
	$resultado = mysql_query($query,$link) or die(mysql_error());
	
	
	$billing = mysql_fetch_assoc($resultado);
	extract($billing);
				
				/* Get comments */
				$c_query = "SELECT * FROM comments WHERE order_num =".$order.";";
	$c_resultado = mysql_query($c_query,$link) or die(mysql_error());
	
	?>
		<!-- Begin content -->
	<div id="content">
		<div class="inner">
			<h1><?php echo $titulo; ?></h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
				<div class="header"><span><?php echo $titulo2; ?></span></div>
				<br class="clear"/>
				<div class="content">
										<table style="width:100%;" class="data">
											<tr>
													<td><strong>Order number</strong></td>
														<td><?php echo $order_number; ?></td>
												</tr>
												<tr>
													<td><strong>Name</strong></td>
														<td><?php echo $fname.' '.$lname; ?></td>
												</tr>
												<tr>
													<td><strong>Address</strong></td>
														<td><?php echo $address.' '.$address2; ?></td>
												</tr>
												<tr>
													<td><strong>City</strong></td>
														<td><?php echo $city; ?></td>
												</tr>
												<tr>
														<td><strong>State</strong></td>
														<td><?php echo $state; ?></td>
												</tr>
												<tr>
														<td><strong>ZIP</strong></td>
														<td><?php echo $zip; ?></td>
												</tr>
												<tr>
														<td><strong>Country</strong></td>
														<td><?php echo $country; ?></td>
												</tr>
												<tr>
														<td><strong>Email</strong></td>
														<td><?php echo $email; ?></td>
												</tr>
										</table>
									 
										
										<div style="clear:both;"></div>
						</div>
			</div>
			<!-- End one column tab content window -->
										<h1>Shipping Information</h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
				<div class="header"><span><?php echo $titulo2; ?></span></div>
				<br class="clear"/>
				<div class="content">
																		<table style="width:100%;" class="data">
																				<tr>
																						<td><strong>Order number</strong></td>
																						<td><?php echo $order_number; ?></td>
																				</tr>
																				<tr>
																						<td><strong>Products</strong></td>
																						<td><?php echo $description; ?></td>
																				</tr>
																				<tr>
																						<td><strong>Name</strong></td>
																						<td><?php echo $fname.' '.$lname; ?></td>
																				</tr>
																				<tr>
																						<td><strong>Address</strong></td>
																						<td><?php echo $address.' '.$address2; ?></td>
																				</tr>
																				<tr>
																						<td><strong>City</strong></td>
																						<td><?php echo $city; ?></td>
																				</tr>
																				<tr>
																						<td><strong>State</strong></td>
																						<td><?php echo $state; ?></td>
																				</tr>
																				<tr>
																						<td><strong>ZIP</strong></td>
																						<td><?php echo $zip; ?></td>
																				</tr>
																				<tr>
																						<td><strong>Country</strong></td>
																						<td><?php echo $country; ?></td>
																				</tr>
																		</table>
																		<div style="clear:both;"></div>
																</div>
														</div>
														<div class="print">
																<input type="button" value="Print page" onclick="javascript:window.print();" />
														</div>
														<div id="comments">
																
																<?php 
																		while($comment = mysql_fetch_assoc($c_resultado)){
																				extract($comment);
																?>
																				<div class="comment">
																						<strong><?php echo $user_id;?></strong> [ <span><?php echo $date_post?></span> ] says:
																						<p><?php echo $comment_text;?></p>
																				</div>
																<?php
																		}
																?>
																
																<div style="clear:both;"></div>
																<form action="comment.php" method="post">
																		<table border="0" >
																				<tr><td><textarea name="comment" rows="4" cols="50" class=":required" ></textarea></td></tr>
																				<tr><td><input type="hidden" name="order" value="<?php echo $order; ?>" /><input type="submit" value="Comment" style="float:right;" /></td></tr>                                
																		</table>
																</form>
														</div>
		<?php	
}
?>


<?php
function shipping_information($titulo,$titulo2,$order){
	$link = conectar();
	/* Get shippings */
				$query = "SELECT shippings.*,orders.description FROM shippings INNER JOIN orders ON orders.order_number = shippings.order_number WHERE shippings.order_number = ".$order.";";
	$resultado = mysql_query($query,$link) or die(mysql_error());
	
	$shipping = mysql_fetch_assoc($resultado);
	extract($shipping);
	
				/* Get comments */
				$c_query = "SELECT * FROM comments WHERE order_num =".$order.";";
	$c_resultado = mysql_query($c_query,$link) or die(mysql_error());
						
	?>
		<!-- Begin content -->
	<div id="content">
		<div class="inner">
												<h1><?php echo $titulo; ?></h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
				<div class="header"><span><?php echo $titulo2; ?></span></div>
				<br class="clear"/>
				<div class="content">
																		<table style="width:100%;" class="data">
																				<tr>
																						<td><strong>Order number</strong></td>
																						<td><?php echo $order_number; ?></td>
																				</tr>
																				<tr>
																						<td><strong>Products</strong></td>
																						<td><?php echo $description; ?></td>
																				</tr>
																				<tr>
																						<td><strong>Name</strong></td>
																						<td><?php echo $fname.' '.$lname; ?></td>
																				</tr>
																				<tr>
																						<td><strong>Address</strong></td>
																						<td><?php echo $address.' '.$address2; ?></td>
																				</tr>
																				<tr>
																						<td><strong>City</strong></td>
																						<td><?php echo $city; ?></td>
																				</tr>
																				<tr>
																						<td><strong>State</strong></td>
																						<td><?php echo $state; ?></td>
																				</tr>
																				<tr>
																						<td><strong>ZIP</strong></td>
																						<td><?php echo $zip; ?></td>
																				</tr>
																				<tr>
																						<td><strong>Country</strong></td>
																						<td><?php echo $country; ?></td>
																				</tr>
																		</table>
																		<div style="clear:both;"></div>
																</div>
														</div>
														<div class="print">
																<input type="button" value="Print page" onclick="javascript:window.print();" />
														</div>
														<div id="comments">
																
																<?php 
																		while($comment = mysql_fetch_assoc($c_resultado)){
																				extract($comment);
																?>
																				<div class="comment">
																						<strong><?php echo $user_id;?></strong> [ <span><?php echo $date_post?></span> ] says:
																						<p><?php echo $comment_text;?></p>
																				</div>
																<?php
																		}
																?>
																
																<div style="clear:both;"></div>
																<form action="comment.php" method="post">
																		<table border="0" >
																				<tr><td><textarea name="comment" rows="4" cols="50" class=":required" ></textarea></td></tr>
																				<tr><td><input type="hidden" name="order" value="<?php echo $order; ?>" /><input type="submit" value="Comment" style="float:right;" /></td></tr>                                
																		</table>
																</form>
														</div>
			<!-- End one column tab content window -->	
		<?php	
}
?>


<?php

function cambioFecha($fecha){ //$fecha es de este formato --> ej: 20081229 
	$sinHora = explode(' ',$fecha);
	$arrFecha = explode('-',$sinHora[0]);
	
	$fecha = $arrFecha[0].$arrFecha[1].$arrFecha[2];
	
	$tieneCeroDiaMes = substr($fecha,6,1); 

	if ($tieneCeroDiaMes == 0) { 
		$diaMes = substr($fecha,7,1); 
	} else { 
		$diaMes = substr($fecha,6,2); 
	
	} 
	
	
	$Mes = substr($fecha,4,2); 
	$Mes = str_replace("01","Jan",$Mes); 
	$Mes = str_replace("02","Feb",$Mes); 
	$Mes = str_replace("03","Mar",$Mes); 
	$Mes = str_replace("04","Apr",$Mes); 
	$Mes = str_replace("05","May",$Mes); 
	$Mes = str_replace("06","Jun",$Mes); 
	$Mes = str_replace("07","Jul",$Mes); 
	$Mes = str_replace("08","Aug",$Mes); 
	$Mes = str_replace("09","Sep",$Mes); 
	$Mes = str_replace("10","Oct",$Mes); 
	$Mes = str_replace("11","Nov",$Mes); 
	$Mes = str_replace("12","Dic",$Mes); 
	
	$Anio = substr($fecha,0,4); 
	
	return $diaMes." ".$Mes." ".$Anio.""; 
}  
?>

<?php
function calculaEdad( $fecha ) {
		list($Y,$m,$d) = explode("-",$fecha);
		return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
}
?>




<?php
function codes($titulo,$titulo2,$state){
	$link = conectar();
	
	if($state == 'all'){
		$query_codes = "SELECT * FROM codes WHERE 1 ORDER BY state DESC;";
	}else{
		$query_codes = "SELECT * FROM codes WHERE state ='".$state."' ORDER BY state DESC;";
	}
	
	$resultado = mysql_query($query_codes,$link) or die(mysql_error());
	
	
	/*$curl = curl_init("http://www.ekit.com/ekit/api/redeem?code=562489302536&phone_number=447924806646");
	$response = curl_exec($curl);
	echo $response;*/

	/*$response = http_get("http://www.ekit.com/ekit/api/redeem/", array("timeout"=>1, "code" => 819189290760, "phone_number" => 447937009851), $info);
	print_r($info);*/
	
	//$homepage = file_get_contents('https://www.ekit.com/ekit/api/redeem?code=4249&phone_number=447924806646');
	//$homepage = file_get_contents('http://www.ekit.com/ekit/api/redeem?code=447924806646&phone_number=654838538356');
	//echo $homepage;
	
	
	
	?>
		<!-- Begin content -->
	<div id="content">
		<div class="inner">
			<h1><?php echo $titulo; ?></h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
				<div class="header"><span><?php echo $titulo2; ?></span></div>
				<br class="clear"/>
								<?php
				if($_POST['add']){
					if ($_FILES[csv][size] > 0) {
						/*echo '<pre>';
						print_r($_FILES);
						echo '</pre>';*/
						//get the csv file
						$file = $_FILES[csv][tmp_name];
						$handle = fopen($file,"r");
						$colum = 0;
						//loop through the csv file and insert into database
						do {
							$code = str_replace('"','',$data[0]);
							$batch = str_replace('"','',$data[1]);
							$state = str_replace('"','',$data[2]);
							$created = str_replace('"','',cambiar_fecha($data[3]));
							
							if($code != 'Code'){
							
								if ($data[0]) {
									$link = conectar();
									
									$query = "INSERT INTO codes (code,value,batch_serial,state,created_date) VALUES('".$code."', '".$_POST['amount']."','".$batch."','".$state."','".$created."')";
									$resultado2 = mysql_query($query,$link) or die(mysql_error());
								}
							}
							
							$colum += 1;
						} while ($data = fgetcsv($handle,1000,",","'"));
						if($resultado2){
							echo '<script>location.href="codes.php?add=1"</script>';
						}else{
							echo '<script>location.href="codes.php?add=2"</script>';
						}
						
					
					} 
				}
				if($_GET['add']){
					if($_GET['add']==1){
						mensaje('success', 'The codes were added successfully.');
					}else{
						mensaje("error", "Error: the codes couldn't be added.");
					}
				}
				
				//$recarga = file_get_contents('https://www.ekit.com/ekit/api/redeem?code=924518495639&phone_number=447924806646');
				//echo $recarga;			

				?>
								<div style="margin:10px 0 0 10px;">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
									Choose the codes value for you CSV file:<br />
										<select name="amount" id="amount" class=":required">
											<option value="">- Codes value -</option>
												<option value="1">USD $1</option>
												<option value="10">USD $10</option>
												<option value="30">USD $30</option>
												<option value="50">USD $50</option>
												<option value="100">USD $100</option>
												<option value="150">USD $150</option>
												<option value="200">USD $200</option>
										</select><br />
						Choose your CSV file: <br />
						<input name="csv" type="file" id="csv" class=":required" /><br  />
						<input type="submit" name="add" value="Add Codes" /><br />
				</form> 
								</div>
								<br class="clear"/>
				<div class="content">
									
										<table id="listado" class="data" style="width:100%; float:left;">
												<thead>
														<tr>
																<th><strong>Batch Serial</strong></th>
																<th><strong>Value</strong></th>
																<th><strong>State</strong></th>
																<th><strong>Create Date</strong></th>
																<?php if($_GET['state'] == 'used'){ echo '<th><strong>Account</strong></th>   <th><strong>Used Date</strong></th>'; }?>
														</tr>
												</thead>
												<tbody>
												<?php
												while($codes = mysql_fetch_assoc($resultado)){
							extract($codes);
												?>
														<tr>
																<td><?php echo $batch_serial; ?></td>
																<td>$<?php echo $value; ?> USD</td>
																<td><?php echo $state; ?></td>
																<td><?php echo cambioFecha($created_date); ?></td>
															<?php if($_GET['state'] == 'used'){ echo '<td>'.$account.'</td>   <td>'.cambioFecha($used_date).'</td>'; }?>
														</tr> 
												<?php
												}
												?>
												</tbody>
												<tfoot>
														<tr>
																<th><strong>Batch Serial</strong></th>
																<th><strong>Value</strong></th>
																<th><strong>State</strong></th>
																<th><strong>Create Date</strong></th>
																<?php if($_GET['state'] == 'used'){ echo '<th><strong>Account</strong></th>   <th><strong>Used Date</strong></th>'; }?>
																
														</tr>
												</tfoot>
										</table>
										<div style="clear:both;"></div>
						</div>
			</div>
			<!-- End one column tab content window -->	
<?php
}
?>



<?php
function add_code($titulo,$titulo2){
	if($_POST['add']){
		$link = conectar();
		$query_code = "INSERT INTO codes ('code','status') VALUES (".$_POST['code'].",'1');";
		
		$resultado = mysql_query($query_code,$link);
		
		if($resultado){
			echo '<script>href="codes.php?add=1"</script>';
		}else{
			echo '<script>href="codes.php?add=2"</script>';
		}
	}
?>
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
				<label>Code:</label><br />
				<input type="text" id="code" name="code" class=":required" /><br />
				<input type="submit" id="add" name="add" value="Add code" />
		</form>
<?php
}
?>


<?php
function cambiar_fecha($date){
	$fecha = explode('/',$date);

	return $fecha[2].'/'.$fecha[0].'/'.$fecha[1];

}
?>







