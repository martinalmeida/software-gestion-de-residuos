<!------------------------------------------------------------------
  		Seccion de PHP 
-------------------------------------------------------------------->

<?php
	Eliminar($_GET['id_clientes']);

	function Eliminar($id_clientes)
	{
		include '../../gerente/conexion_bd.php';
		$sentencia="DELETE FROM clientes WHERE id_clientes='".$id_clientes."' ";
		$mysqli->query($sentencia) or die ("Error al eliminar".mysqli_error($mysqli));

	}
?>

<script type="text/javascript">
	alert("Eliminado!!");
	window.location.href='../clientes.php';
</script>