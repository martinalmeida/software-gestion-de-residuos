<!------------------------------------------------------------------
  		Seccion de PHP ( BORRAR USUARIOS DE LA BASE DE DATOS ) 
-------------------------------------------------------------------->

<?php

	if(isset($_GET))
	{

	    $id_user=$_GET['id_user'];
	    $firma=$_GET['firma'];
	    include 'conexion_bd.php';
	    $sql="DELETE FROM `usuarios` WHERE id_user='".$id_user."'";
	    //si el query encontro un resultado entoces eliminada de la ruta $firma-contiene la ruta de la imagen
	    $res=mysqli_query($mysqli,$sql);
	    if($res)
	    {
	        //elimina y redirecciona al archivo index.php
	        unlink($firma);
	    }

	}

?>

