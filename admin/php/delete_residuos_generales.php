<!------------------------------------------------------------------
  		Seccion de PHP 
-------------------------------------------------------------------->

<?php

	if(isset($_GET))
	{

	    $id_residuos=$_GET['id_residuos'];
	    include '../../gerente/conexion_bd.php';
	    $sql="DELETE FROM res_generales WHERE id_residuos='".$id_residuos."'";
		mysqli_query($mysqli,$sql);

	}

?>