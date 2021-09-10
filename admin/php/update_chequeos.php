<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS ) 
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';
    

	$query = "UPDATE chequeos SET 
	chequeo='".$_POST['chequeo']."',
	estado='".$_POST['estado']."',
	tipo_respuesta='".$_POST['respuesta']."',
	obligatoriedad='".$_POST['obligatoriedad']."',
	verificacion='".$_POST['verificacion']."',
	seccion='".$_POST['seccion']."',
	descripcion='".$_POST['descripcion']."',
	nit='".$_POST['nit']."'
	WHERE id =".$_POST['id'];
	echo $query;
	mysqli_query($mysqli,$query);
    header("location:../chequeos.php");
	mysqli_close($mysqli);

?>

