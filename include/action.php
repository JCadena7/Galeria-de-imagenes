<?php
include_once('conexion.php');
date_default_timezone_set(timezoneId:"America/Bogota");
// resivo datos del formulaio.
$nombres = $_POST['nombres'];

if ($_FILES["imagen"] ) {
    $nombre_base=basename($_FILES["imagen"]["name"]);
    $nombre_final=$nombres. "-". date("h-i-s"). "-". $nombre_base;
    // $nombre_final=date("y-m-d"). "-". date("H-i-s"). "-". $nombre_base;
    $ruta="../fotos/". $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
}



$fechas=date(format:'Y-m-d H:i:s');

echo $fechas;
echo $nombres;
echo $ruta;
// echo $archivo;



$conectar = conn();
$sql ="INSERT INTO usuario (nombre, fecha, ruta_imagen)
VALUES('$nombres','$fechas','$ruta')";
$result = mysqli_query($conectar, $sql)or trigger_error("query falled sql  error :".mysqli_error($conectar),E_USER_ERROR);

echo "$sql";

?>