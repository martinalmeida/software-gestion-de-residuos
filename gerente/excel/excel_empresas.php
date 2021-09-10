<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS - BASE DE DATOS EMPRESAS - GERENCIA ) 
--------------------------------------------------------------------------->

<?php
    require '../../php/conexion_bd.php';
	$objeto = new Conexion();
	$conexion = $objeto->Conectar();

	$consulta = "SELECT * FROM empresas";
	$resultado = $conexion->prepare($consulta);
	$resultado->execute();
	$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

	$txt = "";
	
	$txt =  $txt.'NIT'.";".
   			    'DIGITO'.";". 	
			   	'NOMBRE'.";".
				'REPRESENTANTE'.";".
				'TELEFONO'.";".
				utf8_decode('DIRECCIÓN'.";").
				'CORREO'.";".
				'PAIS'.";".
				'CIUDAD'.";".
				'SITIO WEB'."\n";

	foreach($data as $dat) {         
	                                                    
		$txt =  $txt.$dat['nit'].";".
				utf8_decode($dat['digito'].";").
				utf8_decode($dat['nombre'].";").
				utf8_decode($dat['representante'].";").
				utf8_decode($dat['telefono'].";").
				utf8_decode($dat['direccion'].";").
				utf8_decode($dat['correo'].";").
				utf8_decode($dat['pais'].";").
				utf8_decode($dat['ciudad'].";").
				utf8_decode($dat['sitio_web']."\n");
				              }
			
	$fp = fopen("../excel/temp.csv", "w");
	fwrite($fp, $txt);
	fclose($fp);
	
	header("Location: ../excel/temp.csv");
?>
