<!------------------------------------------------------------------
  		Seccion de PHP 
-------------------------------------------------------------------->

<?php

	if(isset($_GET))
	{

	    $id_disposicion=$_GET['id_disposicion'];
	    include '../../gerente/conexion_bd.php';
	    $sql="DELETE FROM disposicion_manejo WHERE id_disposicion='".$id_disposicion."'";
		mysqli_query($mysqli,$sql);

	}

?>