<!------------------------------------------------------------------
  		Seccion de PHP 
-------------------------------------------------------------------->

<?php

	if(isset($_GET))
	{

	    $id_vehiculo=$_GET['id_vehiculo'];
	    include '../../gerente/conexion_bd.php';
	    $sql="DELETE FROM vehiculos WHERE id_vehiculo='".$id_vehiculo."'";
		mysqli_query($mysqli,$sql);

	}

?>