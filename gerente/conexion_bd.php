<!----------------------------------------------------------
  		Seccion de PHP ( CONEXION BASE DE DATOS ) 
------------------------------------------------------------>

<?php

$mysqli = new MySQLi("localhost", "innoam_user","x!@0E@5Q2sU_9Gae", "innoam_ecosoft");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else

?>