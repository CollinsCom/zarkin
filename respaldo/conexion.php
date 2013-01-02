<?php
	define ( "SERVER", 'collinscom.com' );
	define ( "DB_NAME", 'encuestas_facebook' );
	define ( "DB_USER", 'zarkin' );
	define ( "DB_PWD", 'collins' );
	/*define ( "SERVER", 'localhost' );
	define ( "DB_NAME", 'zarkin' );
	define ( "DB_USER", 'root' );
	define ( "DB_PWD", '' );*/
	$conec = mysql_connect ( SERVER, DB_USER, DB_PWD ) or die ( mysql_error () );
	mysql_select_db ( DB_NAME, $conec ) or die ( mysql_error() );

?>
