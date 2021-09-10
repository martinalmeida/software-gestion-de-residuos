<?php 

$id = $_GET['id_user'];

include '../gerente/conexion_bd.php';

$res = $mysqli->query("SELECT parafiscales, parafiscales_name FROM usuarios WHERE id_user=$id");
$fila = $res->fetch_assoc();

$ruta = $fila['parafiscales']; // Obtenemos la ruta al archivo de la BD
$nombreArchivo = basename($ruta); // Con la ruta extraemos el nombre del archivo

// Headers necesarios para forzar la descarga del PDF en vez de mostrarlo al navegador
// si deseas el efecto contrario puedes quitarlos
//header('Content-Type: application/octet-stream');
//header("Content-Transfer-Encoding: Binary");
//header("Content-disposition: attachment; filename=$nombreArchivo");

header("Content-type: application/pdf");

// Leemos el archivo PDF y mandamos a la salida
readfile($ruta);

?>

