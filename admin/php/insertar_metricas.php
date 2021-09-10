<?php


require '../../gerente/conexion_bd.php';


$nombre = htmlentities($_POST['nombre']);
$abreviacion = htmlentities($_POST['abreviacion']);
$nit = htmlentities($_POST['nit']);



mysqli_query($mysqli,"INSERT INTO metricas VALUES('','$nombre','$abreviacion','$nit')");   

?>
