<?php


require '../../gerente/conexion_bd.php';


$nombre = htmlentities($_POST['nombre']);
$descripcion = htmlentities($_POST['descripcion']);
$nit = htmlentities($_POST['nit']);



mysqli_query($mysqli,"INSERT INTO riesgos VALUES('','$nombre','$descripcion','$nit')");   

?>
