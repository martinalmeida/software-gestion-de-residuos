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

	$consulta = "SELECT * FROM usuarios WHERE empresas_nit=".$_SESSION["empresas_nit"];
	$resultado = $conexion->prepare($consulta);
	$resultado->execute();
	$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

	$txt = "";
	
	$txt =  $txt.'ID'.";".
				utf8_decode('USUARIO'.";").
				utf8_decode('CORREO'.";").
				utf8_decode('ROL'.";").
				utf8_decode('NOMBRE'.";").
				utf8_decode('IDENTIFICACIÓN'.";").
				utf8_decode('CARGO'.";").
				utf8_decode('ESTADO'.";").
				utf8_decode('MODULO'.";").
				utf8_decode('TIPO'.";").
				utf8_decode('CELULAR'.";").
				utf8_decode('PAIS'.";").
				utf8_decode('CIUDAD'.";").
				utf8_decode('LICENCIA'.";").
				utf8_decode('FECHA DE VENCIMIENTO'."\n");

	foreach($data as $dat) {  

	  $consulta1= "SELECT * FROM empresas WHERE nit  =".$dat['empresas_nit'];
	  $resultado1 = $conexion->prepare($consulta1);
	  $resultado1->execute();
	  $data1=$resultado1->fetchAll(PDO::FETCH_ASSOC);
	  foreach($data1 as $dat1) {  

	  $consulta2= "SELECT * FROM roles WHERE id   =".$dat['rol'];
	  $resultado2 = $conexion->prepare($consulta2);
	  $resultado2->execute();
	  $data2=$resultado2->fetchAll(PDO::FETCH_ASSOC);
	  foreach($data2 as $dat2) {         
	                                                    
		$txt =  $txt.$dat['id_user'].";".
				utf8_decode($dat['usuario'].";").
				utf8_decode($dat['correo'].";").
				utf8_decode($dat2['rol'].";").
				utf8_decode($dat['nombre'].";").
				utf8_decode($dat['identificacion'].";").
				utf8_decode($dat['cargo'].";").
				utf8_decode($dat['estado'].";").
				utf8_decode($dat['modulo'].";").
				utf8_decode($dat['propio'].";").
				utf8_decode($dat['celular'].";").
				utf8_decode($dat['pais'].";").
				utf8_decode($dat['ciudad'].";").
				utf8_decode($dat['licencia'].";").
				utf8_decode($dat1['fecha_venc']."\n");
				              }
				              }
				              }

	$fp = fopen("../excel/temp.csv", "w");
	fwrite($fp, $txt);
	fclose($fp);
	
	header("Location: ../excel/temp.csv");
?>
