<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}
?>
<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS - BASE DE DATOS EMPRESAS - GERENCIA ) 
--------------------------------------------------------------------------->

<?php
    require '../../php/conexion_bd.php';
	$objeto = new Conexion();
	$conexion = $objeto->Conectar();

	$consulta = "SELECT * FROM usuarios WHERE usuario_id = '5' ";
	$resultado = $conexion->prepare($consulta);
	$resultado->execute();
	$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

	$txt = "";
	
	$txt =  $txt.'ID'.";".
   			    'USUARIO'.";".
			   	'CORREO'.";".
				'ROL'.";".
				'NOMBRE'.";".
				utf8_decode('IDENTIFICACION'.";").
				'CARGO'.";".
				'ESTADO'.";".
				'CELULAR'.";".
				'PAIS'.";".
				'CIUDAD'.";".
				'LICENCIA'.";".
				'FECHA VENCE'.";".
				'NIT'."\n";

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
				utf8_decode($dat['celular'].";").
				utf8_decode($dat['pais'].";").
				utf8_decode($dat['ciudad'].";").
				utf8_decode($dat['licencia'].";").
				utf8_decode($dat['fecha_venc'].";").
				$dat1['nit']."\n";
				              }
				              }
				              }

	$fp = fopen("../excel/temp.csv", "w");
	fwrite($fp, $txt);
	fclose($fp);
	
	header("Location: ../excel/temp.csv");
?>
