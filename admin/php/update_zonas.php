<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS - BASE DE DATOS EMPRESAS - GERENCIA ) 
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';
    

	$query = "UPDATE zonas SET 
	nombre='".$_POST['nombre']."',
	descripcion='".$_POST['descripcion']."',
	pais='".$_POST['pais']."',
	ciudad='".$_POST['ciudad']."',
	nit ='".$_POST['nit']."'
	WHERE id_zonas =".$_POST['id_zonas'];
	echo $query;
	mysqli_query($mysqli,$query);
    header("location:../zonas.php");
	mysqli_close($mysqli);

?>