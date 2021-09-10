<?php
session_start();

include_once 'conexion_bd.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$contrasena = (isset($_POST['contrasena'])) ? $_POST['contrasena'] : '';

$pass = md5($contrasena); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD

$consulta = "SELECT * FROM usuario_maestro WHERE usuario='$usuario' AND clave='$pass' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;
    $_SESSION["id"] = $data[0]['id'];
    $_SESSION["empresas_nit"] = $data[0]['empresas_nit'];
    $_SESSION["usuario_id"] = $data[0]['usuario_id'];
}else{
    $_SESSION["s_usuario"] = null;
    $_SESSION['id'] = null;
    $_SESSION['empresas_nit'] = null;
    $_SESSION['usuario_id'] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;

