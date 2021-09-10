<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS  ) 
--------------------------------------------------------------------------->

<?php
	include '../../gerente/conexion_bd.php';

	$id = htmlentities($_POST['id']);




		//----------------------Si NO hay Archivo adjunto de LOGO y Licencia------------------------------------
	if ($_FILES['licencia']['name']== null) {
	        mysqli_query($mysqli,"UPDATE proveedores SET id='".$id."', nombre='".$_POST['nombre']."', estado='".$_POST['estado']."', tipo_ident='".$_POST['tipo_ident']."', identificacion='".$_POST['identificacion']."', digito='".$_POST['digito']."', representante='".$_POST['representante']."', telefono='".$_POST['telefono']."', direccion_admon='".$_POST['direccion_admon']."', direccion_corres='".$_POST['direccion_corres']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."',sitio_web='".$_POST['sitio_web']."', acti_eco='".$_POST['acti_eco']."', tipo_prov = '".implode(",", $_POST['tipo_prov'])."', disposiciones = '".implode(",", $_POST['disposiciones'])."', descripcion='".$_POST['descripcion']."', horario_lv='".$_POST['horario_lv']."', horario_lv1='".$_POST['horario_lv1']."', horario_sd='".$_POST['horario_sd']."', horario_sd1='".$_POST['horario_sd1']."', contacto_compras='".$_POST['contacto_compras']."', correo_compras='".$_POST['correo_compras']."', contacto_comer='".$_POST['contacto_comer']."', correo_comer='".$_POST['correo_comer']."', id_user='".$_POST['id_user']."', nit ='".$_POST['nit']."'  WHERE id=".$id.";");
	    }



	    	//-------------------Si HAY Archivo adjunto de LOGO y NO hay Licencia------------------------------------
    elseif ($_FILES['licencia']['name']!= null) {

    	 $re = mysqli_query($mysqli,"SELECT licencia FROM proveedores WHERE id=$id");
        while ($f=mysqli_fetch_array($re)) {
            unlink($f['licencia']);
        }

        $ruta = "../archivo_proveedor/";
        $destino = $ruta.$_FILES['licencia']['name'];
        copy($_FILES['licencia']['tmp_name'],$destino);
        $nombre=$_FILES['licencia']['name'];
        $pdf_tipo = $_FILES['licencia']['type'];
        mysqli_query($mysqli,"UPDATE proveedores SET id='".$id."', nombre='".$_POST['nombre']."', estado='".$_POST['estado']."', tipo_ident='".$_POST['tipo_ident']."', identificacion='".$_POST['identificacion']."', digito='".$_POST['digito']."', representante='".$_POST['representante']."', telefono='".$_POST['telefono']."', direccion_admon='".$_POST['direccion_admon']."', direccion_corres='".$_POST['direccion_corres']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."',sitio_web='".$_POST['sitio_web']."', acti_eco='".$_POST['acti_eco']."', tipo_prov = '".implode(",", $_POST['tipo_prov'])."', disposiciones = '".implode(",", $_POST['disposiciones'])."', licencia_name='".$nombre."', licencia='".$destino."', licencia_tipo='".$pdf_tipo."', descripcion='".$_POST['descripcion']."', horario_lv='".$_POST['horario_lv']."', horario_lv1='".$_POST['horario_lv1']."', horario_sd='".$_POST['horario_sd']."', horario_sd1='".$_POST['horario_sd1']."', contacto_compras='".$_POST['contacto_compras']."', correo_compras='".$_POST['correo_compras']."', contacto_comer='".$_POST['contacto_comer']."', correo_comer='".$_POST['correo_comer']."', id_user='".$_POST['id_user']."', nit ='".$_POST['nit']."'  WHERE id=".$id.";");

    }

   

?>