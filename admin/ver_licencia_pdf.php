<?php 

$nit = $_GET['nit'];

include '../gerente/conexion_bd.php';

$res = $mysqli->query("SELECT licencia_name, licencia_file FROM empresas WHERE nit=$nit");
$fila = $res->fetch_assoc();

$ruta = $fila['licencia_file']; // Obtenemos la ruta al archivo de la BD
$nombreArchivo = basename($ruta); // Con la ruta extraemos el nombre del archivo
//------------------------------------------------------------------------
// Este archivo PHP es para Ver la licencia del archivo de información del negocio
//------------------------------------------------------------------------
// Headers necesarios para forzar la descarga del PDF en vez de mostrarlo al navegador
// si deseas el efecto contrario puedes quitarlos
//header('Content-Type: application/octet-stream');
//header("Content-Transfer-Encoding: Binary");
//header("Content-disposition: attachment; filename=$nombreArchivo");

header("Content-type: application/pdf");

// Leemos el archivo PDF y mandamos a la salida
readfile($ruta);

?>

