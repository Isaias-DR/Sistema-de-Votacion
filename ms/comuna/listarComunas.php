<?php
header("Access-Control-Allow-Origin: http://127.0.0.1"); // TODO: Cambiar el dominio segun el servidor en que este
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

  // Maneja el caso en que no se haya recibido una solicitud POST
  echo 'Acceso denegado';
}

// Lee los datos enviados por AJAX como una cadena JSON y conviértelos en un array asociativo
$data = json_decode(file_get_contents('php://input'), true);

// Accede a los datos individualmente
$idRegion = $data["idRegion"];

require_once('../../db/ConexionMySql.php');

$database = new ConexionMySql();

if ($database->isConnected() === false) {

  $respuesta = [
    'mensajeMS' => 'error conexión',
    'datos' => 'No se ha podido conectar con la base de dato MySQL'
  ];

  echo json_encode($respuesta);
  die();
}

$sql = 'SELECT com.id, com.comuna FROM comunas AS com JOIN provincias AS pro ON pro.id = com.provincia_id JOIN regiones AS reg ON reg.id = pro.region_id WHERE reg.id = ' . $idRegion . ' ORDER BY com.comuna';

$datos = $database->consulta($sql);

$datos_comunas = array();

while ($row = mysqli_fetch_object($datos)) {

  // $row contiene cada fila como un objeto
  $datos_comunas[] = $row;
}

if ($datos->num_rows > 0) {
  $mensaje = 'exito';
} else {
  $mensaje = 'sin datos';
}

$respuesta = [
  'mensajeMS' => $mensaje,
  'datos' => $datos_comunas
];

$database->cerrarConexion();

echo json_encode($respuesta);
