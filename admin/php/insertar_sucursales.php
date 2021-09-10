<?php

// Insertar a la base de datos ECOTEC 

require '../../gerente/conexion_bd.php';

$tipo = htmlentities($_POST['tipo']);
$origen = htmlentities($_POST['origen']);
$nombre = htmlentities($_POST['nombre']);
$clasificacion = htmlentities($_POST['clasificacion']);
$contacto = htmlentities($_POST['contacto']);
$telefono = htmlentities($_POST['telefono']);
$celular = htmlentities($_POST['celular']);
$correo = htmlentities($_POST['correo']);
$direccion = htmlentities($_POST['direccion']);
$pais = htmlentities($_POST['pais']);
$ciudad = htmlentities($_POST['ciudad']);
$zona = htmlentities($_POST['zona']);
$horario_lv = htmlentities($_POST['horario_lv']);
$horario_lv1 = htmlentities($_POST['horario_lv1']);
$horario_sd = htmlentities($_POST['horario_sd']);
$horario_sd1 = htmlentities($_POST['horario_sd1']);
$latitud = htmlentities($_POST['latitud']);
$longitud = htmlentities($_POST['longitud']);
$usuarios_id = htmlentities($_POST['usuarios_id']);
$nit = htmlentities($_POST['nit']);


mysqli_query($mysqli,"INSERT INTO sucursales VALUES('','$tipo','$origen','$nombre','$clasificacion','$contacto','$telefono','$celular','$correo','$direccion','$pais', '$ciudad', '$zona', '$horario_lv','$horario_lv1','$horario_sd','$horario_sd1','$latitud','$longitud','$usuarios_id','$nit')");
    header("location:../sucursales.php");


			
?>

