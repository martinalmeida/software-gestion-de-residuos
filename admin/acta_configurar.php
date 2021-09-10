<?php 
	include("../gerente/conexion_bd.php");

	$numero = htmlentities($_POST['numero']);
	$nit = htmlentities($_POST['nit']);

	mysqli_query($mysqli,"INSERT INTO actas VALUES('','$numero','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','$nit')");
	
	header("location:actas_tabla.php");
	
 ?>