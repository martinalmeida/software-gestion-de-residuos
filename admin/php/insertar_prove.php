<?php

// Insertar a la base de datos ECOTEC el registro de Proveedores

require '../../gerente/conexion_bd.php';

$nombre = htmlentities($_POST['nombre']);
$estado = htmlentities($_POST['estado']);
$tipo_ident = htmlentities($_POST['tipo_ident']);
$identificacion = htmlentities($_POST['identificacion']);
$digito = htmlentities($_POST['digito']);
$representante = htmlentities($_POST['representante']);
$telefono = htmlentities($_POST['telefono']);
$direccion_admon = htmlentities($_POST['direccion_admon']);
$direccion_corres = htmlentities($_POST['direccion_corres']);
$pais = htmlentities($_POST['pais']);
$ciudad = htmlentities($_POST['ciudad']);
$sitio_web = htmlentities($_POST['sitio_web']);
$acti_eco = htmlentities($_POST['acti_eco']);
$tipo_prov = implode(",", $_POST['tipo_prov']);
$disposiciones = implode(",", $_POST['disposiciones']);
$descripcion = htmlentities($_POST['descripcion']);
$horario_lv = htmlentities($_POST['horario_lv']);
$horario_lv1 = htmlentities($_POST['horario_lv1']);
$horario_sd = htmlentities($_POST['horario_sd']);
$horario_sd1 = htmlentities($_POST['horario_sd1']);
$contacto_compras = htmlentities($_POST['contacto_compras']);
$correo_compras = htmlentities($_POST['correo_compras']);
$contacto_comer = htmlentities($_POST['contacto_comer']);
$correo_comer = htmlentities($_POST['correo_comer']);
$id_user = htmlentities($_POST['id_user']);
$nit = htmlentities($_POST['nit']);

// Insertar archivo con ruta

$pdf_tipo = $_FILES['licencia']['type'];
$nombrepdf=$_FILES['licencia']['name'];
$ruta=$_FILES['licencia']['tmp_name'];
$destino="../archivo_proveedor/".$nombrepdf;



	//----------------------Si NO hay Archivo adjunto de Licencia------------------------------------
	if ($_FILES['licencia']['name']== null) {
	        
			//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		mysqli_query($mysqli,"INSERT INTO proveedores VALUES('','$nombre','$estado','$tipo_ident','$identificacion','$digito','$representante','$telefono','$direccion_admon', '$direccion_corres','$pais','$ciudad','$sitio_web','$acti_eco','$tipo_prov','$disposiciones',
				'','','','$descripcion', '$horario_lv','$horario_lv1','$horario_sd','$horario_sd1','$contacto_compras',
				'$correo_compras','$contacto_comer','$correo_comer','$id_user','$nit')");	

		mysqli_query($mysqli,"INSERT INTO sucursales VALUES('','','','$nombre','','$contacto_comer','$telefono','','$correo_comer','$direccion_admon','$pais', '$ciudad', '', '$horario_lv','$horario_lv1','$horario_sd','$horario_sd1','','','$id_user','$nit')");
		    header("location:../proveedores.php");
	}


		//-------------------Si HAY Archivo adjunto de Licencia------------------------------------
    elseif ($_FILES['licencia']['name']!= null) {

			if (copy($ruta,$destino)) {
				//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
			mysqli_query($mysqli,"INSERT INTO proveedores VALUES('','$nombre','$estado','$tipo_ident','$identificacion','$digito','$representante','$telefono','$direccion_admon', '$direccion_corres','$pais','$ciudad','$sitio_web','$acti_eco','$tipo_prov','$disposiciones',
				'$nombrepdf','$destino','$pdf_tipo','$descripcion', '$horario_lv','$horario_lv1','$horario_sd','$horario_sd1','$contacto_compras',
				'$correo_compras','$contacto_comer','$correo_comer','$id_user','$nit')");	

			mysqli_query($mysqli,"INSERT INTO sucursales VALUES('','','','$nombre','','$contacto_comer','$telefono','','$correo_comer','$direccion_admon','$pais', '$ciudad', '', '$horario_lv','$horario_lv1','$horario_sd','$horario_sd1','','','$id_user','$nit')");
			    header("location:../proveedores.php");
			}
    }
























			
?>

