<?php
	/*
		Archivo de funciones para los estilos del admin de proyectos
		
		Creado por Luis Escobar
		luis.multis@gmail.com
	
	*/
?>

<?php
function get_head($titulo){
?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
	<html> 
	<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	 
	<!-- Website Title --> 
	<title><?php echo $titulo; ?></title>
    
        <link rel="shortcut icon" href="images/favicon.ico"/>
	
	<!-- Meta data for SEO -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<!-- Template stylesheet -->
	<link href="css/black/screen.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/black/datepicker.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/tipsy.css" rel="stylesheet" type="text/css" media="all">
	<link href="js/visualize/visualize.css" rel="stylesheet" type="text/css" media="all">
	<link href="js/jwysiwyg/jquery.wysiwyg.css" rel="stylesheet" type="text/css" media="all">
	<link href="js/fancybox/jquery.fancybox-1.3.0.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/tipsy.css" rel="stylesheet" type="text/css" media="all">
	
	<!--[if IE]>
		<link href="css/ie.css" rel="stylesheet" type="text/css" media="all">
		<script type="text/javascript" src="js/excanvas.js"></script>
	<![endif]-->
	
	<!-- Jquery and plugins -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.img.preload.js"></script>
	<script type="text/javascript" src="js/hint.js"></script>
	<script type="text/javascript" src="js/visualize/jquery.visualize.js"></script>
	<script type="text/javascript" src="js/jwysiwyg/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.0.js"></script>
	<script type="text/javascript" src="js/jquery.tipsy.js"></script>
	<script type="text/javascript" src="js/custom_black.js"></script>
	
	<!-- Vanadium plugin -->
	<script type="text/javascript" src="js/vanadium/vanadium.js"></script>
	<link href="js/vanadium/style.css" rel="stylesheet" type="text/css" />
    
    <!-- jQuery data tables -->
    <style type="text/css" title="currentStyle">
            @import "js/datatable/media/css/demo_page.css";
            @import "js/datatable/media/css/demo_table.css";
    </style>
    <script type="text/javascript" charset="utf-8" src="js/datatable/media/js/jquery.dataTables.js"></script>
    <!--<script type="text/javascript" charset="utf-8" src="js/KeyTable.js"></script>-->
    <script type="text/javascript" charset="utf-8">
            $(document).ready( function () {
                    var oTable = $('#listado').dataTable();

            } );



    </script>
	
	</head>
<?php
}
?>


<?php 
function get_header($pagina){
	/*$link = conectar();
	$query_videos = "SELECT * FROM participantes_casting WHERE status = '1';";
	$resultado = mysql_query($query_videos,$link) or die(mysql_error());
	$filas = mysql_affected_rows();*/
?>
	<body>
		<div class="content_wrapper"> 
			<!-- Begin header -->
			<div id="header">
				<div id="logo">
					<img src="images/logo.png" alt="logo" />
				</div>
				<!-- <div id="search">
					<form action="dashboard.html" id="search_form" name="search_form" method="get">
						<input type="text" id="q" name="q" title="Search" class="search noshadow"/>
					</form>
				</div> -->
				<div id="account_info">
					<img src="images/icon_online.png" alt="Online" class="mid_align"/>
					Hello <a href=""><?php echo $_SESSION['user'] ?></a> | <a href="logout.php">Logout.</a> 
                    <?php
                   /* if($filas == 0 || $filas > 1){
					?>
						(<a href="index.php">Hay <?php echo $filas; ?> videos pendientes de moderar</a>) | <a href="logout.php">Cerrar sesi&oacute;n.</a>
					<?php
					}elseif($filas == 1){
					?>
						(<a href="index.php">Hay 1 video pendiente de moderar</a>) | <a href="logout.php">Cerrar sesi&oacute;n.</a>
					<?php
					}*/
					?>
                    
				</div>
			</div>
			<!-- End header -->
<?php	
}
?>


<?php
function mensaje($tipo, $mensaje){
	
	switch($tipo){
		case 'warning':
			echo '<div class="alert_warning" style="margin-top:0"><p><img src="images/icon_warning.png" alt="success" class="mid_align"/>'.$mensaje.'</p></div>';
			break;
		case 'info':
			echo '<div class="alert_info"><p><img src="images/icon_info.png" alt="success" class="mid_align"/>'.$mensaje.'</p></div>';
			break;
		case 'success':
			echo '<div class="alert_success"><p><img src="images/icon_accept.png" alt="success" class="mid_align"/>'.$mensaje.'</p></div>';
			break;
		case 'error':
			echo '<div class="alert_error"><p><img src="images/icon_error.png" alt="delete" class="mid_align"/>'.$mensaje.'</p></div>';
			break;	
	}					
}
?>


<?php
function shortcuts(){
?>
			<!-- Begin shortcut menu -->
			<ul id="shortcut">
    			<li>
    			  <a href="modal_window.html" id="shortcut_home" title="Click me to open modal window">
				    <img src="images/shortcut/home.png" alt="home"/><br/>
				    <strong>Home</strong>
				  </a>
				</li>
    			<li>
    			  <a href="modal_window.html" title="Click me to open modal window">
				    <img src="images/shortcut/calendar.png" alt="calendar"/><br/>
				    <strong>Calendar</strong>
				  </a>
				</li>
    			<li>
    			  <a href="modal_window.html" title="Click me to open modal window">
				    <img src="images/shortcut/stats.png" alt="stats"/><br/>
				    <strong>Stats</strong>
				  </a>
				</li>
				<li>
    			  <a href="modal_window.html" title="Click me to open modal window">
				    <img src="images/shortcut/setting.png" alt="setting"/><br/>
				    <strong>Setting</strong>
				  </a>
				</li>
				<li>
    			  <a href="modal_window.html" id="shortcut_contacts" title="Click me to open modal window">
				    <img src="images/shortcut/contacts.png" alt="contacts"/><br/>
				    <strong>Contacts</strong>
				  </a>
				</li>
				<li>
    			  <a href="modal_window.html" id="shortcut_posts" title="Click me to open modal window">
				    <img src="images/shortcut/posts.png" alt="posts"/><br/>
				    <strong>Posts</strong>
				  </a>
				</li>
  			</ul>
			<!-- End shortcut menu -->
<?php	
}
?>


<?php
function contenido($titulo,$titulo2){
?>
	<!-- Begin content -->
	<div id="content">
		<div class="inner">
    
			<h1><?php echo $titulo; ?></h1>
			<!-- Begin one column tab content window -->
			<div class="onecolumn">
				<div class="header"><span><?php echo $titulo2; ?></span></div>
				<br class="clear"/>
				<div class="content" style="height:auto;">
<?php	
}
?>



<?php 
function get_footer(){
?>
			<!-- </div>
		</div> -->
		<!-- End one column tab content window -->	
		<!-- Begin footer -->
		<div id="footer">
			<!--&copy; Copyright 2012 | Collisncom-->
		</div>
		<!-- End footer -->
		
		
	</div>
	<!-- End content -->
</div>
</body>
</html>
<?php	
}
?>