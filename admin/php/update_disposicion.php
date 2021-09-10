<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS ) 
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';
    

	$query = "UPDATE disposicion_manejo SET 
	nombre='".$_POST['nombre']."',
	descripcion='".$_POST['descripcion']."',
	nit='".$_POST['nit']."'
	WHERE id_disposicion =".$_POST['id_disposicion'];
	echo $query;
	mysqli_query($mysqli,$query);
    header("location:../disposicion.php");
	mysqli_close($mysqli);

?>

