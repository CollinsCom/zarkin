<?php

function conectar(){
	define ('DB_USER', 'zarkin');
	define ('DB_PASSWORD', 'zarkadmdb');
	define ('DB_HOST', 'localhost');
	define ('DB_NAME', 'zarkin_db');
	/*define ('DB_USER', 'isactaz123');
	define ('DB_PASSWORD', 'Icollins1');
	define ('DB_HOST', 'isactaz123.db.9117586.hostedresource.com');
	define ('DB_NAME', 'isactaz123');*/
	$link = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
	@mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
	mysql_set_charset('utf8',$link);
	
	return $link;
}

/*
para phpMyAdmin
https://p3nlmysqladm001.secureserver.net/grid50/3061/index.php?uniqueDnsEntry=isactaz123.db.9117586.hostedresource.com
*/
?>