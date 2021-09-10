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

	$consulta = "SELECT * FROM sucursales WHERE nit=".$_SESSION["empresas_nit"];
	$resultado = $conexion->prepare($consulta);
	$resultado->execute();
	$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

	$txt = "";
	
	$txt =  $txt.'ID'.";".
   			    'TIPO'.";".
			   	'ORIGEN'.";".
				'NOMBRE'.";".
				utf8_decode('CLASIFICACIÓN'.";").
				'CONTACTO'.";".
				'TELEFONO'.";".
				'CELULAR'.";".
				'CORREO'.";".
				utf8_decode('DIRECCIÓN'.";").
				'PAIS'.";".
				'CIUDAD'.";".
				'ZONA'."\n";

	foreach($data as $dat) {  

	  $consulta1= "SELECT * FROM empresas WHERE nit  =".$dat['nit'];
	  $resultado1 = $conexion->prepare($consulta1);
	  $resultado1->execute();
	  $data1=$resultado1->fetchAll(PDO::FETCH_ASSOC);
	  foreach($data1 as $dat1) {  
       
	                                                    
		$txt =  $txt.$dat['id_sucur'].";".
				utf8_decode($dat['tipo'].";").
				utf8_decode($dat['origen'].";").
				utf8_decode($dat['nombre'].";").
				utf8_decode($dat['clasificacion'].";").
				utf8_decode($dat['contacto'].";").
				utf8_decode($dat['telefono'].";").
				utf8_decode($dat['celular'].";").
				utf8_decode($dat['correo'].";").
				utf8_decode($dat['direccion'].";").
				utf8_decode($dat['pais'].";").
				utf8_decode($dat['ciudad'].";").
				utf8_decode($dat['zona']."\n");
				              }
				              }

	$fp = fopen("../excel/temp.csv", "w");
	fwrite($fp, $txt);
	fclose($fp);
	
	header("Location: ../excel/temp.csv");
?>
