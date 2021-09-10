<?php
session_start();

include_once 'conexion_bd.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$usuario2 = (isset($_POST['usuario2'])) ? $_POST['usuario2'] : '';
$contrasena2 = (isset($_POST['contrasena2'])) ? $_POST['contrasena2'] : '';

$pass = md5($contrasena2); //encripto la clave enviada por el usuario para compararla con la clave encriptada y almacenada en la BD

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario2' AND clave='$pass' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["usuario2"] = $usuario2;
    $_SESSION["id_user"] = $data[0]['id_user'];
    $_SESSION["empresas_nit"] = $data[0]['empresas_nit'];
    $_SESSION["nombre"] = $data[0]['nombre'];
    $_SESSION["usuario_id"] = $data[0]['usuario_id'];
}else{
    $_SESSION["usuario2"] = null;
    $_SESSION['id_user'] = null;
    $_SESSION['empresas_nit'] = null;
    $_SESSION['nombre'] = null;
    $_SESSION['usuario_id'] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;

