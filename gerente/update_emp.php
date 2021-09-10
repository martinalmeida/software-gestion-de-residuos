<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS - BASE DE DATOS EMPRESAS - GERENCIA ) 
--------------------------------------------------------------------------->

<?php
	include 'conexion_bd.php';
    

	$query = "UPDATE empresas SET 
	nit='".$_POST['nit']."',
	digito='".$_POST['digito']."',
	nombre='".$_POST['nombre']."',
	representante='".$_POST['representante']."',
	telefono='".$_POST['telefono']."',
	telefono='".$_POST['telefono']."',
	direccion='".$_POST['direccion']."',
	correo='".$_POST['correo']."',
	pais='".$_POST['pais']."',
	ciudad='".$_POST['ciudad']."',
	sitio_web='".$_POST['sitio_web']."'
	WHERE nit=".$_POST['nit'];
	echo $query;
	mysqli_query($mysqli,$query);
    
	mysqli_close($mysqli);

?>