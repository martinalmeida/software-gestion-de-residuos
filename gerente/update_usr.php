<!-------------------------------------------------------------------------
    Seccion de PHP ( ACTUALIZAR DATOS - BASE DE DATOS USUARIOS - GERENCIA ) 
--------------------------------------------------------------------------->

<?php
    include 'conexion_bd.php';

    $id_user = $_POST['id_user'];
    $clave=$_POST['clave'];
    $pass = md5($clave);

    //si hay foto y si hay clave
    if($_POST['clave'] != null && $_FILES['firma']['name'] != null) {
    
        $re = mysqli_query($mysqli,"SELECT firma FROM usuarios WHERE id_user=$id_user");
        while ($f=mysqli_fetch_array($re)) {
            unlink($f['firma']);
        }

        $ruta = "img/uploads/";
        $destino = $ruta.$_FILES['firma']['name'];
        copy($_FILES['firma']['tmp_name'],$destino);
        $nombre=$_FILES['firma']['name'];
        mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo='".$_POST['correo']."', clave='".$pass."', rol='".$_POST['rol']."', nombre='".$_POST['nombre']."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', celular='".$_POST['celular']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', licencia='".$_POST['licencia']."', fecha_venc='".$_POST['fecha_venc']."', firma_name='".$nombre."', firma='".$destino."', empresas_nit='".$_POST['empresas_nit']."' WHERE id_user=".$_POST['id_user'].";");
    }
    //si hay foto pero no hay clave
    elseif($_FILES['firma']['name'] != null && $_POST['clave'] == null) {
    
        $re = mysqli_query($mysqli,"SELECT firma FROM usuarios WHERE id_user=$id_user");
        while ($f=mysqli_fetch_array($re)) {
            unlink($f['firma']);
        }

        $ruta = "img/uploads/";
        $destino = $ruta.$_FILES['firma']['name'];
        copy($_FILES['firma']['tmp_name'],$destino);
        $nombre=$_FILES['firma']['name'];
        mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo='".$_POST['correo']."', rol='".$_POST['rol']."', nombre='".$_POST['nombre']."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', celular='".$_POST['celular']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', licencia='".$_POST['licencia']."', fecha_venc='".$_POST['fecha_venc']."', firma_name='".$nombre."', firma='".$destino."', empresas_nit='".$_POST['empresas_nit']."' WHERE id_user=".$_POST['id_user'].";");
    }
    //no hay foto pero si hay clave
    elseif($_FILES['firma']['name'] == null && $_POST['clave'] != null) {
    mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo ='".$_POST['correo']."', clave='".$pass."', rol='".$_POST['rol']."', nombre='".$_POST['nombre']."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', celular='".$_POST['celular']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', licencia='".$_POST['licencia']."', fecha_venc='".$_POST['fecha_venc']."', empresas_nit='".$_POST['empresas_nit']."' WHERE id_user=".$_POST['id_user'].";");
    }
    //no hay foto y no hay clave
    elseif($_POST['clave'] == null && $_FILES['firma']['name'] == null) {
    mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo ='".$_POST['correo']."', rol='".$_POST['rol']."', nombre='".$_POST['nombre']."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', celular='".$_POST['celular']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', licencia='".$_POST['licencia']."', fecha_venc='".$_POST['fecha_venc']."', empresas_nit='".$_POST['empresas_nit']."' WHERE id_user=".$_POST['id_user'].";");
    }
?>