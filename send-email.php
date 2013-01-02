<?php
		require("class.phpmailer.php");
		extract($_POST);
		define('_path','http://www.zarkin.com/');
 
 		$bood=
		'<body>
			<h3>Este es un mensaje enviado desde el Sitio Web <br />Zarkin.</h3>
			<p>
				<strong>De:</strong> '.$nombre.'<br />
				<strong>Ciudad:</strong> '.$ciudad.'<br />
				<strong>Correo:</strong> '.$correo.'<br /><br />
				<strong>Comentario:</strong> '.$comentario.'
			</p>
		</body>';				 
	
		$mail = new phpmailer ();
   
		$mail -> CharSet = "UTF-8";
		$mail -> From = $correo;
		$mail -> FromName = $nombre;
		$mail -> AddAddress ('contacto@zarkin.com');
		//$mail -> AddAddress ('luis@collinscom.com');
		//$mail -> AddBCC('');
		$mail -> Subject = "Mensaje enviado del formulario de contacto del Sitio Web";
		$mail -> Body = $bood;
		$mail -> IsHTML (true);
		$exitoso = $mail -> Send ();
		
		if($exitoso){
			echo '<script>location.href="'._path.'contacto/1"</script>';
		}else{
			echo '<script>location.href="'._path.'contacto/2"</script>';
		}
?>
