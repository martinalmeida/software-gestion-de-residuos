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

	$consulta = "SELECT * FROM vehiculos WHERE nit=".$_SESSION["empresas_nit"];
	$resultado = $conexion->prepare($consulta);
	$resultado->execute();
	$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

	$txt = "";
	
	$txt =  $txt.'ID'.";".
   			    'MARCA'.";".
			   	'CAPACIDAD'.";".
				'METRICA'.";".
				'PLACA'.";".
				'MODELO'.";".
				'COLOR'.";".
				'TIPO'.";".
				'PROVEEDOR'.";".
				'PROPIETARIO'.";".
				utf8_decode('No DE IDENTIFICACIÓN'.";").
				'No TECNOMECANICA'.";".
				'FECHA VENCE TECNOMECANICA'.";".
				'No SOAT'.";".
				'FECHA SOAT'.";".
				'CERTIFICADOS SANITARIOS'."\n";

	foreach($data as $dat) {  

	  $consulta1= "SELECT * FROM empresas WHERE nit  =".$dat['nit'];
	  $resultado1 = $conexion->prepare($consulta1);
	  $resultado1->execute();
	  $data1=$resultado1->fetchAll(PDO::FETCH_ASSOC);
	  foreach($data1 as $dat1) {        
	                                                    
		$txt =  $txt.$dat['id_vehiculo'].";".

				utf8_decode($dat['marca'].";").
				utf8_decode($dat['capacidad'].";").
				utf8_decode($dat['metrica'].";").
				utf8_decode($dat['placa'].";").
				utf8_decode($dat['modelo'].";").
				utf8_decode($dat['color'].";").
				utf8_decode($dat['tipo_vehiculo'].";").
				utf8_decode($dat['proveedor'].";").
				utf8_decode($dat['propietario'].";").
				utf8_decode($dat['ident_propietario'].";").
				utf8_decode($dat['num_tecno'].";").
				utf8_decode($dat['fecha_v_tecno'].";").
				utf8_decode($dat['num_soat'].";").
				utf8_decode($dat['fecha_v_soat'].";").
				utf8_decode($dat['fecha_v_csanitarios']."\n");
				              }
				              }
				              
	$fp = fopen("../excel/temp.csv", "w");
	fwrite($fp, $txt);
	fclose($fp);
	
	header("Location: ../excel/temp.csv");
?>
