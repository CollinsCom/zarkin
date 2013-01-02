<?php
function conectar(){
	$conexion = mysql_connect("mysql3.000webhost.com","a8866660_tutos","tutos123") or die("Error en la conexion a la base de datos");
	mysql_select_db("a8866660_tutos", $conexion);
	if($conexion){ return $conexion; }else{ echo 'No se pudo establecer la conexion con la base de datos'; }
}
?>

<?php
function formulario(){
?>
	<form id="" method="post" action="">
        <?php
			$link = conectar(); //SE GUARDAN LOS DATOS DE CONEXION EN UNA VARIABLE
            $query_estado = "SELECT id, nombre FROM estados;";
            $resultado = mysql_query($query_estado,$link); //SE EJECUTA EL QUERY PARA DESPLEGAR LOS ESTADOS
        ?>
        <p>
            <label for="estado">Estado:</label>
            <select id="estado" name="estado">
            <?php
				echo "<option value=''>- Seleccione Estado -</option>";
                while($estado = mysql_fetch_assoc($resultado)){
                    echo '<option value="'.$estado['id'].'">'.$estado['nombre'].'</option>';
                }
            ?>
            </select>
        </p>
        <p>
            <label for="ciudad">Ciudad:</label>
            <select id="ciudad" name="ciudad" disabled="disabled">
            </select>
            <img src="images/cargando.gif" style="display:none;" alt="Cargando" id="imgciudad"/>
        </p>
	</form>
<?php 
	}
?>