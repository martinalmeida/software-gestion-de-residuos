<!------------------------------------------------------------------
  		Seccion de PHP 
-------------------------------------------------------------------->

<?php

	if(isset($_GET))
	{

	    $id_sucur=$_GET['id_sucur'];
	    include '../../gerente/conexion_bd.php';
	    $sql="DELETE FROM sucursales WHERE id_sucur='".$id_sucur."'";
		mysqli_query($mysqli,$sql);

	}

?>