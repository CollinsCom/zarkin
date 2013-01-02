<?php

include_once('funciones.php');
extract($_GET);
/*echo '<pre>';
print_r($_GET);
echo '<pre>';exit;*/

get_head('Zarkin | Galer&iacute;a.');
galeria($categoria,$nombre);

?>