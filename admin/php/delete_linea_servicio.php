<!------------------------------------------------------------------
  		Seccion de PHP 
-------------------------------------------------------------------->

<?php

	if(isset($_GET))
	{

	    $id=$_GET['id'];
	    include '../../gerente/conexion_bd.php';
	    $sql="DELETE FROM lineas_servicio WHERE id='".$id."'";
	    //si el query encontro un resultado entoces eliminada de la ruta $licencia-contiene la ruta del archivo PDF
		mysqli_query($mysqli,$sql);

	}

?>