<?php

// Insertar a la base de datos ECOTEC el registro de EMPRESAS

require '../../gerente/conexion_bd.php';

$nombre = htmlentities($_POST['nombre']);
$estado = htmlentities($_POST['estado']);
$categoria = htmlentities($_POST['categoria']);
$tipo_ident = htmlentities($_POST['tipo_ident']);
$identificacion = htmlentities($_POST['identificacion']);
$digito = htmlentities($_POST['digito']);
$representante = htmlentities($_POST['representante']);
$telefono = htmlentities($_POST['telefono']);
$direccion_admin = htmlentities($_POST['direccion_admin']);
$direccion_corres = htmlentities($_POST['direccion_corres']);
$pais = htmlentities($_POST['pais']);
$ciudad = htmlentities($_POST['ciudad']);
$sitio_web = htmlentities($_POST['sitio_web']);
$acti_eco = htmlentities($_POST['acti_eco']);
$cotizacion = htmlentities($_POST['cotizacion']);
$horario_lv = htmlentities($_POST['horario_lv']);
$horario_lv1 = htmlentities($_POST['horario_lv1']);
$horario_sd = htmlentities($_POST['horario_sd']);
$horario_sd1 = htmlentities($_POST['horario_sd1']);
$asesorasesor = htmlentities($_POST['asesor']);
$contacto_gen = htmlentities($_POST['contacto_gen']);
$correo_gen = htmlentities($_POST['correo_gen']);
$contacto_com = htmlentities($_POST['contacto_com']);
$correo_com = htmlentities($_POST['correo_com']);
$observaciones = htmlentities($_POST['observaciones']);
$usuarios_id = htmlentities($_POST['usuarios_id']);
$nit = htmlentities($_POST['nit']);
//la variable  $mysqli viene de conexion_bd que lo traigo con el require("conexion_bd.php");

mysqli_query($mysqli,"INSERT INTO clientes VALUES('','$nombre','$estado','$categoria','$tipo_ident','$identificacion','$digito','$representante','$telefono','$direccion_admin', '$direccion_corres','$pais','$ciudad','$sitio_web','$acti_eco','$cotizacion','$horario_lv','$horario_lv1','$horario_sd', '$horario_sd1','$asesorasesor','$contacto_gen','$correo_gen','$contacto_com','$correo_com','$observaciones','$usuarios_id',$nit)");	

mysqli_query($mysqli,"INSERT INTO sucursales VALUES('','','','$nombre','','$contacto_com','$telefono','','$correo_com','$direccion_admin','$pais', '$ciudad','','$horario_lv','$horario_lv1','$horario_sd','$horario_sd1','','','$usuarios_id',$nit)");
    header("location:../clientes.php");
			
?>

