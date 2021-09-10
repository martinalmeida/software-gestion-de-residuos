<?php


require '../../gerente/conexion_bd.php';


$marca = htmlentities($_POST['marca']);
$capacidad = htmlentities($_POST['capacidad']);
$metrica = htmlentities($_POST['metrica']);
$placa = htmlentities($_POST['placa']);
$modelo = htmlentities($_POST['modelo']);
$color = htmlentities($_POST['color']);
$tipo = htmlentities($_POST['tipo']);
$proveedor = htmlentities($_POST['proveedor']);
$propietario = htmlentities($_POST['propietario']);
$identificacion_pro = htmlentities($_POST['identificacion_pro']);
$tecnomecanica = htmlentities($_POST['tecnomecanica']);
$fecha_venc = htmlentities($_POST['fecha_venc']);
$soat = htmlentities($_POST['soat']);
$venc_soat = htmlentities($_POST['venc_soat']);
$venc_sanitario = htmlentities($_POST['venc_sanitario']);
$id = htmlentities($_POST['id']);
$nit = htmlentities($_POST['nit']);

mysqli_query($mysqli,"INSERT INTO vehiculos VALUES('','$marca','$capacidad','$metrica','$placa','$modelo','$color','$tipo','$proveedor','$propietario','$identificacion_pro','$tecnomecanica','$fecha_venc','$soat','$venc_soat','$venc_sanitario','$id','$nit')");

$lastid = mysqli_insert_id($mysqli);

mysqli_query($mysqli,"INSERT INTO alertas VALUES('','$fecha_venc','$venc_soat','$venc_sanitario','$placa','$lastid','$nit')");   


?>
