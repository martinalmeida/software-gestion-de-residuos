<?php


// Insertar a la base de datos ECOTEC el registro de USUARIOS

 require 'conexion_bd.php';

$id=$_POST['id'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];
$pass = md5($clave);
$rol=$_POST['rol'];
$nombre=$_POST['nombre'];
$identificacion=$_POST['identificacion'];
$cargo=$_POST['cargo'];
$estado=$_POST['estado'];
$celular=$_POST['celular'];
$pais=$_POST['pais'];
$ciudad=$_POST['ciudad'];
$licencia=$_POST['licencia'];
$vencimiento=$_POST['vencimiento'];
$nit=$_POST['nit'];
$gerente=$_POST['gerente'];



	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
 mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$usuario','$correo','$pass','$rol','$nombre','$identificacion','$cargo','$estado','','','','$celular','$pais','$ciudad','','$licencia','$vencimiento','','','','','$nit','$id')");

	
?>