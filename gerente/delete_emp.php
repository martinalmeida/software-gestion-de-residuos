<!------------------------------------------------------------------
  		Seccion de PHP ( BORRAR EMPRESAS DE LA BASE DE DATOS ) 
-------------------------------------------------------------------->

<?php
	Eliminar($_GET['nit']);

	function Eliminar($nit)
	{
		include 'conexion_bd.php';
		$sentencia="DELETE FROM empresas WHERE nit='".$nit."' ";
		$mysqli->query($sentencia) or die ("Error al eliminar".mysqli_error($mysqli));

	}
?>

<script type="text/javascript">
	alert("Eliminado!!");
	window.location.href='empresas_gerente.php';
</script>