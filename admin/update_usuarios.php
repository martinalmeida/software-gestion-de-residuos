<?php

// Actualizar usuarios

require '../gerente/conexion_bd.php';

$id_user = $_POST['usuarios_id'];
$contrasena = htmlentities($_POST['contrasena']);
$pass = md5($contrasena);
$nombre3 = htmlentities($_POST['nombre']);



//la variable  $mysqli viene de conexion_bd que lo traigo con el require("conexion_bd.php");

//-------------------Si HAY de Firma No HAY Parafiscales No HAY Contraseña-----
if($_FILES['firma']['name'] != null && $_FILES['parafiscales']['name'] == null && $contrasena == NULL) {
    $re = mysqli_query($mysqli,"SELECT firma FROM usuarios WHERE id_user=$id_user");
    while ($f=mysqli_fetch_array($re)) {
        unlink($f['firma']);
    }

    $ruta = "img/uploads-usr/";
    $destino = $ruta.$_FILES['firma']['name'];
    copy($_FILES['firma']['tmp_name'],$destino);
    $nombre=$_FILES['firma']['name'];
    mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo='".$_POST['correo']."', rol='".$_POST['rol']."', nombre='".$nombre3."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', modulo='".$_POST['modulo']."', propio='".$_POST['propio']."', telefono='".$_POST['telefono']."', celular='".$_POST['celular']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', direccion='".$_POST['direccion']."',licencia='".$_POST['licencia']."',fecha_venc='".$_POST['fechlicencia']."',firma_name='".$nombre."',firma='".$destino."', empresas_nit='".$_POST['nit']."' WHERE id_user=".$id_user.";");
}


//-------------------Si HAY de Parafiscales No HAY Firma No HAY Contraseña-----
elseif($_FILES['parafiscales']['name'] != null && $_FILES['firma']['name'] == null && $contrasena == NULL) {

     $re = mysqli_query($mysqli,"SELECT parafiscales FROM usuarios WHERE id_user=$id_user");
        while ($f=mysqli_fetch_array($re)) {
            unlink($f['parafiscales']);
        }

        $ruta = "img/uploads-usr/";
        $destino = $ruta.$_FILES['parafiscales']['name'];
        copy($_FILES['parafiscales']['tmp_name'],$destino);
        $nombre=$_FILES['parafiscales']['name'];
        mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo='".$_POST['correo']."', rol='".$_POST['rol']."', nombre='".$nombre3."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', modulo='".$_POST['modulo']."', propio='".$_POST['propio']."', telefono='".$_POST['telefono']."', celular='".$_POST['celular']."',pais='".$_POST['pais']."', parafiscales='".$nombre."',parafiscales='".$destino."',ciudad='".$_POST['ciudad']."', direccion='".$_POST['direccion']."',licencia='".$_POST['licencia']."',fecha_venc='".$_POST['fechlicencia']."',parafiscales_name='".$nombre."',parafiscales='".$destino."', empresas_nit='".$_POST['nit']."' WHERE id_user=".$id_user.";");

}



//-------------------Si HAY de Contraseña No HAY Firma No HAY Parafiscales-----
elseif($contrasena != null && $_FILES['parafiscales']['name'] == null && $_FILES['firma']['name'] == NULL) {
     mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo='".$_POST['correo']."', clave='".$pass."', rol='".$_POST['rol']."', nombre='".$nombre3."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', modulo='".$_POST['modulo']."', propio='".$_POST['propio']."', telefono='".$_POST['telefono']."', celular='".$_POST['celular']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', direccion='".$_POST['direccion']."',licencia='".$_POST['licencia']."',fecha_venc='".$_POST['fechlicencia']."', empresas_nit='".$_POST['nit']."' WHERE id_user=".$id_user.";");
}





//-------------------Si HAY Firma Si HAY Parafiscales Pero NO Contraseña-------
elseif($_FILES['firma']['name'] != null && $_FILES['parafiscales']['name'] != null && $contrasena == NULL) {
    
    $re = mysqli_query($mysqli,"SELECT firma, parafiscales FROM usuarios WHERE id_user=$id_user");
    while ($f=mysqli_fetch_array($re)) {
        unlink($f['firma']);
        unlink($f['parafiscales']);
    }

    $ruta = "img/uploads-usr/";
    $destino = $ruta.$_FILES['firma']['name'];
    $destino2 = $ruta.$_FILES['parafiscales']['name'];

    copy($_FILES['firma']['tmp_name'],$destino);
    copy($_FILES['parafiscales']['tmp_name'],$destino2);

    $nombre=$_FILES['firma']['name'];
    $nombre2=$_FILES['parafiscales']['name'];

    mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo='".$_POST['correo']."', rol='".$_POST['rol']."', nombre='".$nombre3."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', modulo='".$_POST['modulo']."', propio='".$_POST['propio']."', telefono='".$_POST['telefono']."', celular='".$_POST['celular']."',pais='".$_POST['pais']."',ciudad='".$_POST['ciudad']."', direccion='".$_POST['direccion']."',licencia='".$_POST['licencia']."',fecha_venc='".$_POST['fechlicencia']."',firma_name='".$nombre."','firma='".$destino."'',parafiscales_name='".$nombre2."',parafiscales='".$destino2."', empresas_nit='".$_POST['nit']."' WHERE id_user=".$id_user.";");
}




//-------------------Si HAY Firma Pero NO Parafiscales SI HAY Contraseña-------
elseif($_FILES['firma']['name'] != null && $_FILES['parafiscales']['name'] == null && $contrasena != NULL){
    $re = mysqli_query($mysqli,"SELECT firma FROM usuarios WHERE id_user=$id_user");
    while ($f=mysqli_fetch_array($re)) {
        unlink($f['firma']);
    }

    $ruta = "img/uploads-usr/";
    $destino = $ruta.$_FILES['firma']['name'];
    copy($_FILES['firma']['tmp_name'],$destino);
    $nombre=$_FILES['firma']['name'];
    mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo='".$_POST['correo']."', clave='".$pass."', rol='".$_POST['rol']."', nombre='".$nombre3."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', modulo='".$_POST['modulo']."', propio='".$_POST['propio']."', telefono='".$_POST['telefono']."', celular='".$_POST['celular']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', direccion='".$_POST['direccion']."',licencia='".$_POST['licencia']."',fecha_venc='".$_POST['fechlicencia']."',firma_name='".$nombre."',firma='".$destino."', empresas_nit='".$_POST['nit']."' WHERE id_user=".$id_user.";");
}





//-------------------NO HAY Firma Pero SI Parafiscales SI HAY Contraseña-------
elseif($_FILES['firma']['name'] == null && $_FILES['parafiscales']['name'] != null && $contrasena != NULL){

     $re = mysqli_query($mysqli,"SELECT parafiscales FROM usuarios WHERE id_user=$id_user");
        while ($f=mysqli_fetch_array($re)) {
            unlink($f['parafiscales']);
        }

        $ruta = "img/uploads-usr/";
        $destino = $ruta.$_FILES['parafiscales']['name'];
        copy($_FILES['parafiscales']['tmp_name'],$destino);
        $nombre=$_FILES['parafiscales']['name'];
        mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo='".$_POST['correo']."', clave='".$pass."', rol='".$_POST['rol']."', nombre='".$nombre3."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', modulo='".$_POST['modulo']."', propio='".$_POST['propio']."', telefono='".$_POST['telefono']."', celular='".$_POST['celular']."',pais='".$_POST['pais']."',ciudad='".$_POST['ciudad']."', direccion='".$_POST['direccion']."',licencia='".$_POST['licencia']."',fecha_venc='".$_POST['fechlicencia']."',parafiscales_name='".$nombre."',parafiscales='".$destino."', empresas_nit='".$_POST['nit']."' WHERE id_user=".$id_user.";");
}






//-------------------Si Todo Viene Vacio---------------------------------------
elseif($_FILES['firma']['name'] == null && $_FILES['parafiscales']['name'] == null && $contrasena == NULL) {
    mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo='".$_POST['correo']."', rol='".$_POST['rol']."', nombre='".$nombre3."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', modulo='".$_POST['modulo']."', propio='".$_POST['propio']."', telefono='".$_POST['telefono']."', celular='".$_POST['celular']."', pais='".$_POST['pais']."', ciudad='".$_POST['ciudad']."', direccion='".$_POST['direccion']."',licencia='".$_POST['licencia']."',fecha_venc='".$_POST['fechlicencia']."', empresas_nit='".$_POST['nit']."' WHERE id_user=".$id_user.";");
}



//por aca
//-------------------Si Todo Viene Lleno---------------------------------------
else{
        $re = mysqli_query($mysqli,"SELECT firma, parafiscales FROM usuarios WHERE id_user=$id_user");
        while ($f=mysqli_fetch_array($re)) {
            unlink($f['firma']);
            unlink($f['parafiscales']);
        }

        $ruta = "img/uploads-usr/";
        $destino = $ruta.$_FILES['firma']['name'];
        $destino2 = $ruta.$_FILES['parafiscales']['name'];

        copy($_FILES['firma']['tmp_name'],$destino);
        copy($_FILES['parafiscales']['tmp_name'],$destino2);

        $nombre=$_FILES['firma']['name'];
        $nombre2=$_FILES['parafiscales']['name'];

        mysqli_query($mysqli,"UPDATE usuarios SET usuario ='".$_POST['usuario']."', correo='".$_POST['correo']."', clave='".$pass."', rol='".$_POST['rol']."', nombre='".$nombre3."', identificacion='".$_POST['identificacion']."', cargo='".$_POST['cargo']."', estado='".$_POST['estado']."', modulo='".$_POST['modulo']."', propio='".$_POST['propio']."', telefono='".$_POST['telefono']."', celular='".$_POST['celular']."', pais='".$_POST['pais']."',ciudad='".$_POST['ciudad']."', direccion='".$_POST['direccion']."',licencia='".$_POST['licencia']."',fecha_venc='".$_POST['fechlicencia']."',firma_name='".$nombre."','firma='".$destino."'',parafiscales_name='".$nombre2."',parafiscales='".$destino2."', empresas_nit='".$_POST['nit']."' WHERE id_user=".$id_user.";");
}
    
?>