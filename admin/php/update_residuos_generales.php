<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS ) 
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';
    

	$query = "UPDATE res_generales SET 
	nombre='".$_POST['nombre']."',
	estado='".$_POST['estado']."',
	descripcion='".$_POST['descripcion']."',
	disposicion = '".implode(",", $_POST['disposicion'])."',
	codigo='".$_POST['codigo']."',
	valor='".$_POST['valor']."',
	metrica='".$_POST['metrica']."',
	facturacion='".$_POST['gridRadios']."',
	nit='".$_POST['nit']."'
	WHERE id_residuos =".$_POST['id_residuos'];
	echo $query;
	mysqli_query($mysqli,$query);
    header("location:../residuos_generales.php");
	mysqli_close($mysqli);

?>

