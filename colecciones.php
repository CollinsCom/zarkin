<?php

include_once('funciones.php');
extract($_GET);

get_head('Colecciones | '.$categoria.'.');
colecciones($categoria);

?>