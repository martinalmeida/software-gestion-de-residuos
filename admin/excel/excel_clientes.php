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

	$consulta = "SELECT * FROM clientes WHERE nit=".$_SESSION["empresas_nit"];
	$resultado = $conexion->prepare($consulta);
	$resultado->execute();
	$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

	$txt = "";
	
	$txt =  $txt.'ID'.";".
				utf8_decode('NOMBRE'.";").
				utf8_decode('ESTADO'.";").
				utf8_decode('CATEGORIA'.";").
				utf8_decode('TIPO DE IDENTFICACIÓN'.";").
   			    utf8_decode('IDENTIFICACIÓN'.";").
   			    utf8_decode('REPRESENTANTE LEGAL'.";").
   			    utf8_decode('TELEFONO'.";").
				utf8_decode('DIRECCION ADMINISTRACIÓN'.";").
				utf8_decode('DIRECCION CORRESPONDENCIA'.";").
				utf8_decode('PAIS'.";").
				utf8_decode('CIUDAD'.";").
				utf8_decode('SITIO WEB'.";").
				utf8_decode('ASESOR'.";").
				utf8_decode('CONTACTO GENERAL'.";").
				utf8_decode('CORREO CONTACTO GENERAL'.";").
				utf8_decode('CONTACTO COMERCIAL'.";").
				utf8_decode('CORREO COMERCIAL'.";").
				utf8_decode('OBSERVACIONES'."\n");
	

	foreach($data as $dat) {       
	      

		$txt =  $txt.$dat['id_clientes'].";".

				utf8_decode($dat['nombre'].";").
				utf8_decode($dat['estado'].";").
				utf8_decode($dat['categoria'].";").
				utf8_decode($dat['tipo_ident'].";").
				utf8_decode($dat['identificacion'].";").
				utf8_decode($dat['representante'].";").
				utf8_decode($dat['telefono'].";").
				utf8_decode($dat['direccion_admin'].";").
				utf8_decode($dat['direccion_corres'].";").
				utf8_decode($dat['pais'].";").
				utf8_decode($dat['ciudad'].";").
				utf8_decode($dat['sitio_web'].";").
				utf8_decode($dat['asesor'].";").
				utf8_decode($dat['contacto_gen'].";").
				utf8_decode($dat['correo_gen'].";").
				utf8_decode($dat['contacto_com'].";").
				utf8_decode($dat['correo_com'].";").
				utf8_decode($dat['observaciones']."\n");


				              }

	$fp = fopen("../excel/temp.csv", "w");
	fwrite($fp, $txt);
	fclose($fp);
	
	header("Location: ../excel/temp.csv");
?>
