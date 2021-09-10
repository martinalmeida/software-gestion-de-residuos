<!------------------------------------------------------------------
  		Seccion de PHP 
-------------------------------------------------------------------->

<?php

	if(isset($_GET))
	{

	    $id=$_GET['id'];
	    include '../../gerente/conexion_bd.php';
	    $sql="DELETE FROM esp_adicionales WHERE id='".$id."'";
		mysqli_query($mysqli,$sql);

	}

?>