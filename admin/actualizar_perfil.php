<?php

// Actualizar Perfil (Información del negocio)

require '../gerente/conexion_bd.php';

$nit = $_POST['nit'];



//la variable  $mysqli viene de conexion_bd que lo traigo con el require("conexion_bd.php");

	//----------------------Si NO hay Archivo adjunto de LOGO y Licencia------------------------------------
	if ($_FILES['logo_file']['name']== null && $_FILES['licencia_file']['name']== null) {
	        mysqli_query($mysqli,"UPDATE empresas SET nit='".$nit."', digito ='".$_POST['digito']."', nombre='".$_POST['nombre']."', representante='".$_POST['representante']."', telefono='".$_POST['telefono']."', direccion='".$_POST['direccion']."', correo='".$_POST['correo_admin']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', sitio_web='".$_POST['sitio_web']."', contacto='".$_POST['contacto']."', email_tec='".$_POST['correro_tecn']."', email_logis='".$_POST['correo_logis']."', licencia='".$_POST['licenciatxt']."', responsable_plan='".$_POST['responsable']."', contactos_emerg='".$_POST['contacto_emer']."' WHERE nit=".$nit.";");
	    }




	//-------------------Si HAY Archivo adjunto de LOGO y NO hay Licencia------------------------------------
    elseif ($_FILES['logo_file']['name']!= null && $_FILES['licencia_file']['name']== null) {

    	 $re = mysqli_query($mysqli,"SELECT logo_file FROM empresas WHERE nit=$nit");
        while ($f=mysqli_fetch_array($re)) {
            unlink($f['logo_file']);
        }

        $ruta = "img/uploads/";
        $destino = $ruta.$_FILES['logo_file']['name'];
        copy($_FILES['logo_file']['tmp_name'],$destino);
        $nombre=$_FILES['logo_file']['name'];
        mysqli_query($mysqli,"UPDATE empresas SET nit ='".$nit."', digito ='".$_POST['digito']."', nombre='".$_POST['nombre']."', representante='".$_POST['representante']."', telefono='".$_POST['telefono']."', direccion='".$_POST['direccion']."', correo='".$_POST['correo_admin']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', sitio_web='".$_POST['sitio_web']."', contacto='".$_POST['contacto']."', email_tec='".$_POST['correro_tecn']."', email_logis='".$_POST['correo_logis']."', logo_name='".$nombre."',logo_file='".$destino."', licencia='".$_POST['licenciatxt']."', responsable_plan='".$_POST['responsable']."', contactos_emerg='".$_POST['contacto_emer']."' WHERE nit=".$nit.";");

    }


    //-------------------Si NO hay Archivo adjunto de LOGO y SI hay Licencia------------------------------------
    elseif ($_FILES['logo_file']['name']== null && $_FILES['licencia_file']['name']!= null) {

    	 $re = mysqli_query($mysqli,"SELECT licencia_file FROM empresas WHERE nit=$nit");
        while ($f=mysqli_fetch_array($re)) {
            unlink($f['licencia_file']);
        }

        $ruta = "img/uploads/";
        $destino = $ruta.$_FILES['licencia_file']['name'];
        copy($_FILES['licencia_file']['tmp_name'],$destino);
        $nombre=$_FILES['licencia_file']['name'];
        mysqli_query($mysqli,"UPDATE empresas SET nit ='".$nit."', digito ='".$_POST['digito']."', nombre='".$_POST['nombre']."', representante='".$_POST['representante']."', telefono='".$_POST['telefono']."', direccion='".$_POST['direccion']."', correo='".$_POST['correo_admin']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', sitio_web='".$_POST['sitio_web']."', contacto='".$_POST['contacto']."', email_tec='".$_POST['correro_tecn']."', email_logis='".$_POST['correo_logis']."',licencia='".$_POST['licenciatxt']."', licencia_name='".$nombre."',licencia_file='".$destino."',responsable_plan='".$_POST['responsable']."', contactos_emerg='".$_POST['contacto_emer']."' WHERE nit=".$nit.";");
    	
    }



    //-------------------SI HAY Archivo adjunto de LOGO y SI HAY Licencia------------------------------------
    elseif ($_FILES['logo_file']['name']!= null && $_FILES['licencia_file']['name']!= null) {

    	 $re = mysqli_query($mysqli,"SELECT logo_file, licencia_file FROM empresas WHERE nit=$nit");
        while ($f=mysqli_fetch_array($re)) {
            unlink($f['logo_file']);
            unlink($f['licencia_file']);
        }

        $ruta = "img/uploads/";
        $destino = $ruta.$_FILES['logo_file']['name'];
        $destino2 = $ruta.$_FILES['licencia_file']['name'];

        copy($_FILES['logo_file']['tmp_name'],$destino);
        copy($_FILES['licencia_file']['tmp_name'],$destino2);

        $nombre=$_FILES['logo_file']['name'];
        $nombre2=$_FILES['licencia_file']['name'];

        mysqli_query($mysqli,"UPDATE empresas SET nit ='".$nit."', digito ='".$_POST['digito']."', nombre='".$_POST['nombre']."', representante='".$_POST['representante']."', telefono='".$_POST['telefono']."', direccion='".$_POST['direccion']."', correo='".$_POST['correo_admin']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', sitio_web='".$_POST['sitio_web']."', contacto='".$_POST['contacto']."', email_tec='".$_POST['correro_tecn']."', email_logis='".$_POST['correo_logis']."',logo_name='".$nombre."',logo_file='".$destino."',licencia='".$_POST['licenciatxt']."', licencia_name='".$nombre2."',licencia_file='".$destino2."',responsable_plan='".$_POST['responsable']."', contactos_emerg='".$_POST['contacto_emer']."' WHERE nit=".$nit.";");
    	
    }
			
?>
			


