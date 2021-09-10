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

	$consulta = "SELECT * FROM proveedores WHERE nit=".$_SESSION["empresas_nit"];
	$resultado = $conexion->prepare($consulta);
	$resultado->execute();
	$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

	$txt = "";
	
	$txt =  $txt.'ID'.";".
   			    utf8_decode('NOMBRE'.";").
   			    utf8_decode('ESTADO'.";").
   			    utf8_decode('TIPO'.";").
   			    utf8_decode('IDENTIFICACIÓN'.";").
   			    utf8_decode('REPRESENTANTE'.";").
   			    utf8_decode('TELEFONO'.";").
   			    utf8_decode('DIRECCIÓN ADMINISTRACIÓN'.";").
   			    utf8_decode('DIRENCIÓN CORRESPONDENCIA'.";").
   			    utf8_decode('PAIS'.";").
   			    utf8_decode('CIUDAD'.";").
   			    utf8_decode('SITIO WEB'.";").
   			    utf8_decode('ACTIVIDAD ECONÓMICA'.";").
   			    utf8_decode('TIPO PROVEEDOR'.";").
   			    utf8_decode('DISPOCISIONES'.";").
   			    utf8_decode('CONTACTO COMPRAS'.";").
   			    utf8_decode('CORREO COMPRAS'.";").
   			    utf8_decode('CONTACTO COMERCIAL'.";").
   			    utf8_decode('CORREO COMERCIAL'."\n");
			   	
				

	foreach($data as $dat) {  

	  $consulta1= "SELECT * FROM empresas WHERE nit  =".$dat['nit'];
	  $resultado1 = $conexion->prepare($consulta1);
	  $resultado1->execute();
	  $data1=$resultado1->fetchAll(PDO::FETCH_ASSOC);
	  foreach($data1 as $dat1) {         
	                                                    
		$txt =  $txt.$dat['id'].";".

				utf8_decode($dat['nombre'].";").
				utf8_decode($dat['estado'].";").
				utf8_decode($dat['tipo_ident'].";").
				utf8_decode($dat['identificacion'].";").
				utf8_decode($dat['representante'].";").
				utf8_decode($dat['telefono'].";").
				utf8_decode($dat['direccion_admon'].";").
				utf8_decode($dat['direccion_corres'].";").
				utf8_decode($dat['pais'].";").
				utf8_decode($dat['ciudad'].";").
				utf8_decode($dat['sitio_web'].";").
				utf8_decode($dat['acti_eco'].";").
				utf8_decode($dat['tipo_prov'].";").
				utf8_decode($dat['disposiciones'].";").
				utf8_decode($dat['contacto_compras'].";").
				utf8_decode($dat['correo_compras'].";").
				utf8_decode($dat['contacto_comer'].";").
				utf8_decode($dat['correo_comer']."\n");
				              }
				              }

	$fp = fopen("../excel/temp.csv", "w");
	fwrite($fp, $txt);
	fclose($fp);
	
	header("Location: ../excel/temp.csv");
?>
