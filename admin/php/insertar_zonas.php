<?php

// Insertar a la base de datos ECOTEC 

require '../../gerente/conexion_bd.php';

$nombre = htmlentities($_POST['nombre']);
$descripcion = htmlentities($_POST['descripcion']);
$pais = htmlentities($_POST['pais']);
$ciudad = htmlentities($_POST['ciudad']);
$usuarios_id = htmlentities($_POST['usuarios_id']);
$nit = htmlentities($_POST['nit']);


mysqli_query($mysqli,"INSERT INTO zonas VALUES('','$nombre','$descripcion','$pais','$ciudad','$usuarios_id','$nit')");
    header("location:../zonas.php");


			
?>

