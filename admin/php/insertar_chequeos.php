<?php


require '../../gerente/conexion_bd.php';


$chequeo = htmlentities($_POST['chequeo']);
$estado = htmlentities($_POST['estado']);
$respuesta = htmlentities($_POST['respuesta']);
$obligatoriedad = htmlentities($_POST['obligatoriedad']);
$verificacion = htmlentities($_POST['verificacion']);
$seccion = htmlentities($_POST['seccion']);
$descripcion = htmlentities($_POST['descripcion']);
$nit = htmlentities($_POST['nit']);



mysqli_query($mysqli,"INSERT INTO chequeos VALUES('','$chequeo','$estado','$respuesta','$obligatoriedad','$verificacion','$seccion','$descripcion','$nit')");   

?>
