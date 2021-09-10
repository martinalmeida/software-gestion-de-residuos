<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS ) 
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';
    

	$query = "UPDATE riesgos SET 
	nombre='".$_POST['nombre']."',
	descripcion='".$_POST['descripcion']."',
	nit='".$_POST['nit']."'
	WHERE id =".$_POST['id'];
	echo $query;
	mysqli_query($mysqli,$query);
    header("location:../riesgos.php");
	mysqli_close($mysqli);

?>

