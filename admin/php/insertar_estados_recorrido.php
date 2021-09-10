<?php


require '../../gerente/conexion_bd.php';


$nombre = htmlentities($_POST['nombre']);
$descripcion = htmlentities($_POST['descripcion']);
$orden = htmlentities($_POST['orden']);
$nit = htmlentities($_POST['nit']);



mysqli_query($mysqli,"INSERT INTO estados_recorrido VALUES('','$nombre','$descripcion','$orden','$nit')");   

?>
