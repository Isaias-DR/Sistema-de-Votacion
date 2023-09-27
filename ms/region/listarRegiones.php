<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {

    // Maneja el caso en que no se haya recibido una solicitud POST
    echo 'Acceso denegado';
}

require_once('../../db/ConexionMySql.php');

$database = new ConexionMySql();

$sql = 'SELECT id, region FROM regiones';

$datos = $database->consulta($sql);

$datos_regiones = array();

while ($row = mysqli_fetch_object($datos)) {
    
    // $row contiene cada fila como un objeto
    $datos_regiones[] = $row;
}

if ($datos->num_rows > 0) {
    $mensaje = 'exito';
} else {
    $mensaje = 'sin datos';
}

$respuesta = [
    'mensajeMS' => $mensaje,
    'datos' => $datos_regiones
];

$database->cerrarConexion();

echo json_encode($respuesta);
