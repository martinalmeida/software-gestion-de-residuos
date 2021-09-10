<!------------------------------------------------------------------
  		Seccion de PHP ( BORRAR EMPRESAS DE LA BASE DE DATOS ) 
-------------------------------------------------------------------->

<?php

	if(isset($_GET))
	{

	    $id_user=$_GET['id_user'];
	    $firma=$_GET['firma'];
	    $parafiscales=$_GET['parafiscales'];
	    include '../gerente/conexion_bd.php';
	    $sql="DELETE FROM `usuarios` WHERE id_user='".$id_user."'";
	    //si el query encontro un resultado entoces eliminada de la ruta $licencia-contiene la ruta del archivo PDF
	    $res=mysqli_query($mysqli,$sql);
	    if($res)
	    {
	        //elimina el archivo
	        unlink($firma);
	        unlink($parafiscales);
	    }

	}

?>