<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS ) 
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';
    

	$query = "UPDATE lineas_servicio SET 
	nombre='".$_POST['nombre']."',
	descripcion='".$_POST['descripcion']."',
	codigo='".$_POST['codigo']."',
	unidad='".$_POST['unidad']."',
	nit='".$_POST['nit']."'
	WHERE id =".$_POST['id'];
	echo $query;
	mysqli_query($mysqli,$query);
    header("location:../lineas_servicio.php");
	mysqli_close($mysqli);

?>

