<?php

// Insertar a la base de datos ECOTEC el registro de EMPRESAS

require 'conexion_bd.php';

$nit = htmlentities($_POST['nit']);
$digito = htmlentities($_POST['digito']);
$nombre = htmlentities($_POST['nombre']);
$representante = htmlentities($_POST['representante']);
$telefono = htmlentities($_POST['telefono']);
$direccion = htmlentities($_POST['direccion']);
$correo = htmlentities($_POST['correo']);
$pais = htmlentities($_POST['pais']);
$ciudad = htmlentities($_POST['ciudad']);
$sitioweb = htmlentities($_POST['sitioweb']);


//la variable  $mysqli viene de conexion_bd que lo traigo con el require("conexion_bd.php");

	# codigo...
				//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
mysqli_query($mysqli,"INSERT INTO empresas VALUES('$nit','$digito','$nombre','$representante','$telefono','$direccion','$correo','$pais','$ciudad', '$sitioweb','','','','','','','','','','')");	
			
?>

