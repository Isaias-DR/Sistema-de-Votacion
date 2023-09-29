<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {

  // Maneja el caso en que no se haya recibido una solicitud POST
  echo 'Acceso denegado';
}

require_once('../../db/ConexionPosrgreSql.php');

$database = new ConexionPosrgreSql();
/*
TODO: continuar...
if ($database->isConnected() === false) {

  $respuesta = [
    'mensajeMS' => 'error conexión',
    'datos' => 'No se ha podido conectar con la base de dato MySQL'
  ];

  echo json_encode($respuesta);
}
*/
$pdo = $database->obtenerConexion();

// Consulta SQL INSERT
$sql = "SELECT id_candidato, nombre FROM candidato";

// Preparar la consulta
$stmt = $pdo->prepare($sql);

// Ejecutar la consulta
if ($stmt->execute()) {

  // Recupera los resultados en un array asociativo
  $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $respuesta = [
    'mensajeMS' => 'exito',
    'datos' => $registros
  ];
} else {

  $respuesta = [
    'mensajeMS' => 'error',
    'datos' => [
      'mensaje' => 'Error al insertar el registro'
    ]
  ];
}

$database->destruirConexion();

echo json_encode($respuesta);
