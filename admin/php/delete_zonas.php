<!------------------------------------------------------------------
  		Seccion de PHP 
-------------------------------------------------------------------->

<?php

	if(isset($_GET))
	{

	    $id_zonas=$_GET['id_zonas'];
	    include '../../gerente/conexion_bd.php';
	    $sql="DELETE FROM zonas WHERE id_zonas='".$id_zonas."'";
		mysqli_query($mysqli,$sql);

	}

?>