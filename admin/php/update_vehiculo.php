<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS )
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';
    

	$query = "UPDATE vehiculos SET 
	marca='".$_POST['marca']."',
	capacidad='".$_POST['capacidad']."',
	metrica='".$_POST['metrica']."',
	placa='".$_POST['placa']."',
	modelo='".$_POST['modelo']."',
	color='".$_POST['color']."',
	tipo_vehiculo='".$_POST['tipo']."',
	proveedor='".$_POST['proveedor']."',
	propietario='".$_POST['propietario']."',
	ident_propietario='".$_POST['identificacion_pro']."',
	num_tecno='".$_POST['tecnomecanica']."',
	fecha_v_tecno='".$_POST['fecha_venc']."',
	num_soat='".$_POST['soat']."',
	fecha_v_soat='".$_POST['venc_soat']."',
	fecha_v_csanitarios='".$_POST['venc_sanitario']."',
	nit='".$_POST['nit']."'
	WHERE id_vehiculo =".$_POST['id_vehiculo'];
	echo $query;
	mysqli_query($mysqli,$query);

	$query = "UPDATE alertas SET 
	v_tecnomecanica='".$_POST['fecha_venc']."',
	v_soat='".$_POST['venc_soat']."',
	v_c_sanitarios='".$_POST['venc_sanitario']."',
	placa='".$_POST['placa']."',
	nit='".$_POST['nit']."'
	WHERE id_vehiculo =".$_POST['id_vehiculo'];
	echo $query;
	mysqli_query($mysqli,$query);
    header("location:../vehiculos.php");
	mysqli_close($mysqli);

?>