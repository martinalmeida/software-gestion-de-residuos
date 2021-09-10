<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS ) 
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';
    

	$query = "UPDATE sucursales SET 
	tipo='".$_POST['tipo']."',
	origen='".$_POST['origen']."',
	nombre='".$_POST['nombre']."',
	clasificacion='".$_POST['clasificacion']."',
	contacto='".$_POST['contacto']."',
	telefono='".$_POST['telefono']."',
	celular='".$_POST['celular']."',
	correo='".$_POST['correo']."',
	direccion='".$_POST['direccion']."',
	pais='".$_POST['pais']."',
	ciudad='".$_POST['ciudad']."',
	zona='".$_POST['zona']."',
	horario_lv='".$_POST['horario_lv']."',
	horario_lv1='".$_POST['horario_lv1']."',
	horario_sd='".$_POST['horario_sd']."',
	horario_sd1='".$_POST['horario_sd1']."',
	latitud='".$_POST['latitud']."',
	longitud='".$_POST['longitud']."',
	nit='".$_POST['nit']."'
	WHERE id_sucur =".$_POST['id_sucur'];
	echo $query;
	mysqli_query($mysqli,$query);
    header("location:../sucursales.php");
	mysqli_close($mysqli);

?>

