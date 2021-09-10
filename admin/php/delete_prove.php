<!------------------------------------------------------------------
  		Seccion de PHP 
-------------------------------------------------------------------->

<?php

	if(isset($_GET))
	{

	    $id=$_GET['id'];
	    $licencia=$_GET['licencia'];
	    include '../../gerente/conexion_bd.php';
	    $sql="DELETE FROM proveedores WHERE id='".$id."'";
	    //si el query encontro un resultado entoces eliminada de la ruta $licencia-contiene la ruta del archivo PDF
	    $res=mysqli_query($mysqli,$sql);
	    if($res)
	    {
	        //elimina el archivo
	        unlink($licencia);
	    }

	}

?>