<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS - BASE DE DATOS EMPRESAS - GERENCIA ) 
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';
    

	$query = "UPDATE clientes SET 
	nombre='".$_POST['nombre']."',
	estado='".$_POST['estado']."',
	categoria='".$_POST['categoria']."',
	tipo_ident='".$_POST['tipo_ident']."',
	identificacion='".$_POST['identificacion']."',
	digito='".$_POST['digito']."',
	representante='".$_POST['representante']."',
	telefono='".$_POST['telefono']."',
	direccion_admin='".$_POST['direccion_admin']."',
	direccion_corres='".$_POST['direccion_corres']."',
	pais='".$_POST['pais']."',
	ciudad='".$_POST['ciudad']."',
	sitio_web='".$_POST['sitio_web']."',
	acti_eco='".$_POST['acti_eco']."',
	cotizacion='".$_POST['cotizacion']."',
	horario_lv='".$_POST['horario_lv']."',
	horario_lv1='".$_POST['horario_lv1']."',
	horario_sd='".$_POST['horario_sd']."',
	horario_sd1='".$_POST['horario_sd1']."', 
	asesor='".$_POST['asesor']."',
	contacto_gen='".$_POST['contacto_gen']."',
	correo_gen='".$_POST['correo_gen']."',
	contacto_com='".$_POST['contacto_com']."',
	correo_com='".$_POST['correo_com']."',
	observaciones='".$_POST['observaciones']."',
	usuarios_id ='".$_POST['usuarios_id']."',
	nit ='".$_POST['nit']."'
	WHERE id_clientes =".$_POST['id_clientes'];
	echo $query;
	mysqli_query($mysqli,$query);
    header("location:../clientes.php");
	mysqli_close($mysqli);

?>