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

// Obtener el nombre apellido separadamenta en variables

$textos = explode(" ", $txtNombreApellido);
$nombre = $textos[0];
$apellido = $textos[1];

// Obtener los numeros y el dígito verificador del RUT

$partesRut = explode("-", $txtRut);
$rutNumber = intval(str_replace(".", "", $partesRut[0]));
$rutDv = $partesRut[1];

require_once('../../db/ConexionPosrgreSql.php');

$database = new ConexionPosrgreSql();

$pdo = $database->obtenerConexion();

// Consulta SQL INSERT
$sql = "INSERT INTO voto (nombre, apellido, alias, rut, dv, email, region, comuna, candidato, nosotros) VALUES (:nombre, :apellido , :alias, :rut, :dv, :email, :region, :comuna, :candidato, :nosotros)";

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
$stmt->bindParam(':candidato', $txtCandidato, PDO::PARAM_INT);
$stmt->bindParam(':nosotros', $txtNosotros, PDO::PARAM_INT);

// Ejecutar la consulta
if ($stmt->execute()) {
    $respuesta = [
        'mensajeMS' => 'exito',
        'datos' => [
            'mensaje' => 'Registro insertado con éxito'
        ]
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
