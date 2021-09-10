<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS )
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';
    

	$query = "UPDATE ud_negocio SET 
	nombre='".$_POST['nombre']."',
	descripcion='".$_POST['descripcion']."',
	codigo='".$_POST['codigo']."',
	sigla='".$_POST['sigla']."',
	nit='".$_POST['nit']."'
	WHERE id =".$_POST['id'];
	echo $query;
	mysqli_query($mysqli,$query);
    header("location:../unidades_negocio.php");
	mysqli_close($mysqli);

?>