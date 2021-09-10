<?php


require '../../gerente/conexion_bd.php';


$nombre = htmlentities($_POST['nombre']);
$descripcion = htmlentities($_POST['descripcion']);
$codigo = htmlentities($_POST['codigo']);
$unidad = htmlentities($_POST['unidad']);
$nit = htmlentities($_POST['nit']);


mysqli_query($mysqli,"INSERT INTO lineas_servicio VALUES('','$nombre','$descripcion','$codigo','$unidad','$nit')");   

?>
