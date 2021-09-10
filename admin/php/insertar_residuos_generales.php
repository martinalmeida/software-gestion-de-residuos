<?php


require '../../gerente/conexion_bd.php';


$nombre = htmlentities($_POST['nombre']);
$estado = htmlentities($_POST['estado']);
$descripcion = htmlentities($_POST['descripcion']);
$data = implode(",", $_POST['disposicion']);
$codigo = htmlentities($_POST['codigo']);
$valor = htmlentities($_POST['valor']);
$metrica = htmlentities($_POST['metrica']);
$facturacion = htmlentities($_POST['gridRadios']);
$nit = htmlentities($_POST['nit']);



mysqli_query($mysqli,"INSERT INTO res_generales VALUES('','$nombre','$estado','$descripcion','$data','$codigo','$valor','$metrica','$facturacion','$nit')");   

?>
