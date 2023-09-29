<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

  // Maneja el caso en que no se haya recibido una solicitud POST
  echo 'Acceso denegado';
}

// Lee los datos enviados por AJAX como una cadena JSON y conviértelos en un array asociativo
$data = json_decode(file_get_contents('php://input'), true);

// Accede a los datos individualmente
$txtNombreApellido = $data["txtNombreApellido"];
$txtAlias = $data["txtAlias"];
$txtRut = $data["txtRut"];
$txtEmail = $data["txtEmail"];
$txtRegion = $data["txtRegion"];
$txtComuna = $data["txtComuna"];
$txtCandidato = $data["txtCandidato"];
$txtNosotros = $data["txtNosotros"];

// Transformar los datos

// 1 - Obtener el nombre apellido separadamenta en variables
$textos = explode(" ", $txtNombreApellido);
$nombre = $textos[0];
$apellido = $textos[1];

// 2 - Obtener los numeros y el dígito verificador del RUT
$partesRut = explode("-", $txtRut);
$rutNumber = intval(str_replace(".", "", $partesRut[0]));
$rutDv = $partesRut[1];

require_once('../../db/ConexionPotrgreSql.php');

$database = new ConexionPostgreSql();

if ($database->isConnected() === false) {

  $respuesta = [
    'mensajeMS' => 'error conexión',
    'datos' => 'No se ha podido conectar con la base de dato MySQL'
  ];

  echo json_encode($respuesta);
  die();
}

$pdo = $database->obtenerConexion();

$sql0 = "SELECT obtener_cantidad_votos(:rut)";
$stmt0 = $pdo->prepare($sql0);
$stmt0->bindParam(':rut', $rutNumber, PDO::PARAM_INT);
$stmt0->execute();
// Ejecutar la consulta

if ($stmt0->fetchColumn() > 0) {

  $database->destruirConexion();

  $respuesta = [
    'mensajeMS' => 'validación',
    'datos' => [
      'mensaje' => 'Ya votó, no se puede registrar un nuevo voto.'
    ]
  ];

  echo json_encode($respuesta);
  die();
}

// Consulta SQL INSERT
// $sql = "INSERT INTO voto (nombre, apellido, alias, rut, dv, email, region, comuna, candidato) VALUES (:nombre, :apellido , :alias, :rut, :dv, :email, :region, :comuna, :candidato)";
$sql = "SELECT insertar_voto(:nombre, :apellido , :alias, :rut, :dv, :email, :region, :comuna, :fk_candidato)";

// Preparar la consulta
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
$stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
$stmt->bindParam(':alias', $txtAlias, PDO::PARAM_STR);
$stmt->bindParam(':rut', $rutNumber, PDO::PARAM_INT);
$stmt->bindParam(':dv', $rutDv, PDO::PARAM_STR);
$stmt->bindParam(':email', $txtEmail, PDO::PARAM_STR);
$stmt->bindParam(':region', $txtRegion, PDO::PARAM_INT);
$stmt->bindParam(':comuna', $txtComuna, PDO::PARAM_INT);
$stmt->bindParam(':fk_candidato', $txtCandidato, PDO::PARAM_INT);

// Ejecutar la consulta
if ($stmt->execute()) {

  $mensajeMS = 'exito';
  $mensaje = 'Registro insertado con éxito';
} else {

  $mensajeMS = 'error';
  $mensaje = 'Error al insertar el registro tabla Voto';
}

foreach ($txtNosotros as &$id_nosotro) {

  // $sql2 = "INSERT INTO nosotro (id_rut, id_nosotro) VALUES (:id_rut, :id_nosotro)";
  $sql2 = "SELECT insertar_voto_nosotro(:id_rut, :id_nosotro)";
  $stmt2 = $pdo->prepare($sql2);
  $stmt2->bindParam(':id_rut', $rutNumber, PDO::PARAM_INT);
  $stmt2->bindParam(':id_nosotro', $id_nosotro, PDO::PARAM_INT);

  // Ejecutar la consulta
  if ($stmt2->execute()) {

    $mensajeMS = 'exito';
    $mensaje = 'Se ha registrado su voto.';
  } else {

    $mensajeMS = 'error';
    $mensaje = 'Error al insertar el registro en la tabla Nosotro.';
  }
}

$respuesta = [
  'mensajeMS' => $mensajeMS,
  'datos' => [
    'mensaje' => $mensaje
  ]
];

$database->destruirConexion();

echo json_encode($respuesta);
