<?php
	session_start();
	//include_once('conexion.php');
	
	//$link = conectar();
	//print_r($_POST);
	if($_POST){
		if($_POST['username']=='zarkinadm' && $_POST['password'] == 'zarkin123'){
			$_SESSION['user'] = $_POST['username'];
			echo '<script>location.href="index.php"</script>';

		}
	}
	
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 
<!-- Website Title --> 
<title>zarkin | Login</title>

<!-- Meta data for SEO -->
<meta name="description" content="">
<meta name="keywords" content="">

<!-- Template stylesheet -->
<link href="css/black/screen.css" rel="stylesheet" type="text/css" media="all">
<link href="css/black/datepicker.css" rel="stylesheet" type="text/css" media="all">
<link href="js/visualize/visualize.css" rel="stylesheet" type="text/css" media="all">
<link href="js/jwysiwyg/jquery.wysiwyg.css" rel="stylesheet" type="text/css" media="all">
<link href="js/fancybox/jquery.fancybox-1.3.0.css" rel="stylesheet" type="text/css" media="all">

<!--[if IE]>
	<link href="css/ie.css" rel="stylesheet" type="text/css" media="all">
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
<![endif]-->

<!-- Jquery and plugins -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.img.preload.js"></script>
<script type="text/javascript" src="js/hint.js"></script>
<script type="text/javascript" src="js/visualize/jquery.visualize.js"></script>
<script type="text/javascript" src="js/jwysiwyg/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.0.js"></script>
<script type="text/javascript" charset="utf-8"> 
$(function(){ 
    // find all the input elements with title attributes
    $('input[title!=""]').hint();
    $('#login_info').click(function(){
		$(this).fadeOut('fast');
	});
});
</script>

<style>
.gal-bg{
	width:509px;
	height:607px;
	background-image:url(../images/gal-bg.png);
	background-repeat:no-repeat;
	position:fixed;
	top:0px;
	left:0px;
	z-index:-10;
}
.gal-bg-degradado{
	background-image:url(../images/bg-gris.png);
	background-repeat:repeat-x;
	width:100%;
	position:fixed;
	top:0px;
	left:0px;
	z-index:-12;
	height:715px;
}

img.bg {
        min-height: 100%;
        min-width: 1100px;
        width: 100%;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
		z-index:-1;
}

</style>
</head>
<body class="login" style="background-color:#373737;">
	<img src="../images/nubes.jpg" class="bg" /> 
    
    
	<!-- Begin login window -->
	<div id="login_wrapper">
		<div id="login_top_window">
			<img src="images/blue/top_login_window.png" alt="top window"/>
		</div>
		
		<!-- Begin content -->
		<div id="login_body_window">
			<div class="inner">
				<img src="images/login_logo.png" alt="logo"/>
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" id="form_login" name="form_login">
					<p>
						<input type="text" id="username" name="username" style="width:285px" title="Username"/>
					</p>
					<p>
						<input type="password" id="password" name="password" style="width:285px" title="******"/>
					</p>
					<p style="margin-top:50px">
						<input type="submit" id="submit" name="ingresar" value="Login" class="Login" style="margin-right:5px"/>
						<!--<input type="checkbox" id="remember" name="remember"/>Remember my password-->
					</p>
				</form>
			</div>
		</div>
		<!-- End content -->
		
		<div id="login_footer_window">
			<img src="images/blue/footer_login_window.png" alt="footer window"/>
		</div>
		<div id="login_reflect">
			<img src="images/blue/reflect.png" alt="window reflect"/>
		</div>
	</div>
	<!-- End login window -->
	
</body>
</html>
