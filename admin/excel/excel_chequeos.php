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

	$consulta = "SELECT * FROM chequeos WHERE nit=".$_SESSION["empresas_nit"];
	$resultado = $conexion->prepare($consulta);
	$resultado->execute();
	$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

	$txt = "";
	
	$txt =  $txt.'ID'.";".
   			    'CHEQUEO'.";".
			   	'ESTADO'.";".
				'TIPO RESPUESTA'.";".
				'OBLIGATORIEDAD'.";".
				utf8_decode('VERIFICACIÓN'.";").
				utf8_decode('SECCIÓN'.";").
				utf8_decode('DESCRIPCIÓN'."\n");

	foreach($data as $dat) {  

	  $consulta1= "SELECT * FROM empresas WHERE nit  =".$dat['nit'];
	  $resultado1 = $conexion->prepare($consulta1);
	  $resultado1->execute();
	  $data1=$resultado1->fetchAll(PDO::FETCH_ASSOC);
	  foreach($data1 as $dat1) {         
	                                                    
		$txt =  $txt.$dat['id'].";".
				utf8_decode($dat['chequeo'].";").
				utf8_decode($dat['estado'].";").
				utf8_decode($dat['tipo_respuesta'].";").
				utf8_decode($dat['obligatoriedad'].";").
				utf8_decode($dat['verificacion'].";").
				utf8_decode($dat['seccion'].";").
				utf8_decode($dat['descripcion']."\n");
				              }
				              }
				

	$fp = fopen("../excel/temp.csv", "w");
	fwrite($fp, $txt);
	fclose($fp);
	
	header("Location: ../excel/temp.csv");
?>
