<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS ) 
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';
    

	$query = "UPDATE estados_recorrido SET 
	nombre='".$_POST['nombre']."',
	descripcion='".$_POST['descripcion']."',
	orden='".$_POST['orden']."',
	nit='".$_POST['nit']."'
	WHERE id =".$_POST['id'];
	echo $query;
	mysqli_query($mysqli,$query);
    header("location:../estados_recorrido.php");
	mysqli_close($mysqli);

?>

