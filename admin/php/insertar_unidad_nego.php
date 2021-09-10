<?php


require '../../gerente/conexion_bd.php';


$nombre = htmlentities($_POST['nombre']);
$descripcion = htmlentities($_POST['descripcion']);
$codigo = htmlentities($_POST['codigo']);
$sigla = htmlentities($_POST['sigla']);
$nit = htmlentities($_POST['nit']);


mysqli_query($mysqli,"INSERT INTO ud_negocio VALUES('','$nombre','$descripcion','$codigo','$sigla','$nit')");   

?>
