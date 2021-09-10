<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS - BASE DE DATOS EMPRESAS - GERENCIA ) 
--------------------------------------------------------------------------->
<?php
session_start();

if($_SESSION["usuario2"] === null){
    header("Location: ../index.php");
}

?>
<?php
    require '../../php/conexion_bd.php';
	$objeto = new Conexion();
	$conexion = $objeto->Conectar();

	$consulta = "SELECT * FROM res_generales WHERE nit=".$_SESSION["empresas_nit"];
	$resultado = $conexion->prepare($consulta);
	$resultado->execute();
	$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

	$txt = "";
	
	$txt =  $txt.'ID'.";".
   			    'NOMBRE'.";".
   			    utf8_decode('ESTADO FÍSICO'.";").
   			    utf8_decode('DESCRIPCIÓN'.";").
   			    utf8_decode('DISPOSICIÓN Y MANEJO'.";").
   			    utf8_decode('CODIGO INTERNO'.";").
   			    utf8_decode('VALOR UNITARIO'.";").
   			    utf8_decode('MÉTRICA'.";").
   			    utf8_decode('TIPO DE FACTURACIÓN'."\n");

	foreach($data as $dat) {  

	  $consulta1= "SELECT * FROM empresas WHERE nit  =".$dat['nit'];
	  $resultado1 = $conexion->prepare($consulta1);
	  $resultado1->execute();
	  $data1=$resultado1->fetchAll(PDO::FETCH_ASSOC);
	  foreach($data1 as $dat1) {       
	      

		$txt =  $txt.$dat['id_residuos'].";".
   			    utf8_decode($dat['nombre'].";").
   			    utf8_decode($dat['estado'].";").
   			    utf8_decode($dat['descripcion'].";").
   			    utf8_decode($dat['disposicion'].";").
   			    utf8_decode($dat['codigo'].";").
   			    utf8_decode($dat['valor'].";").
   			    utf8_decode($dat['metrica'].";").
   			    utf8_decode($dat['facturacion']."\n");
				              }
				              }

	$fp = fopen("../excel/temp.csv", "w");
	fwrite($fp, $txt);
	fclose($fp);
	
	header("Location: ../excel/temp.csv");
?>
