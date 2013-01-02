<?php
error_reporting(0);
echo "guardando...";
if(isset($_POST)){

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
extract($_POST);	

#Conectamos con MySQL
$conexion = mysql_connect("localhost","zarkin","zarkadmdb") or die ("Fallo en el establecimiento de la conexión");

#Seleccionamos la base de datos a utilizar
mysql_select_db("zarkin_db") or die("Error en la selección de la base de datos");
mysql_set_charset('utf8',$conexion);

# ################################### #
$sql = "INSERT INTO garantias (clave, modelo_mueble,   composicion,        color,        tienda,         pais_t,       estado_t,       ciudad_t,       fecha_compra,   fecha_entrega,   forma_entrega,      nombre_cliente, a_paterno,      a_materno,         fecha_nacimiento,   sexo,        direccion,        pais_c,     estado_c,       ciudad_c,      cp,        tel,        correo,       estado_civil,     estudios,       profesion,         personas,      ninos,         ingresos,        destino,        factor_compra, factor_tienda,    conocio_producto, forma_pago, gama,                informacion,           trato,                 entrega,               profesionalidad,       calidad,              calidad_precio,         sugerencia) ";
$sql.= "VALUES ('".$clave."', '".$modeloMueble."', '".$composicion."', '".$color."', '".$nTienda."', '".$paisT."', '".$estadoT."', '".$ciudadT."', '".$fcompra."', '".$fentrega."', '".$formEntrega."', '".$nombre."', '".$apellidoP."', '".$apellidoM."', '".$fnacimiento."', '".$sex."', '".$direccion."', '".$pais."', '".$estadoC."', '".$ciudadC."', '".$cp."', '".$tel."', '".$email."', '".$estCivil."', '".$estudio."', '".$profesion."', '".$personas."', '".$ninos."', '".$ingresos."', '".$destino."', '".$factorC."', '".$factorI."', '".$destino."', '".$pago."', '".$satisfCliente1."', '".$satisfCliente2."', '".$satisfCliente3."', '".$satisfCliente4."', '".$satisfCliente5."', '".$satisfCliente6."', '".$satisfCliente7."', '".$satisfCliente8."')";

mysql_query($sql, $conexion) or die(mysql_error());
# ################################### #

#Cerramos la conexión con la base de datos
mysql_close($conexion);
}
echo "guardado";
?>