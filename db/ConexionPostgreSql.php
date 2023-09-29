<?php

class ConexionPostgreSql
{
  private $host = 'localhost';
  private $database = 'desiss';
  private $user = 'postgres';
  private $password = 'root';
  private $isConnected = false;
  private $pdo;

  // Puente a la base de datos
  function __construct()
  {
    try {

      $this->pdo = new PDO("pgsql:host=$this->host;dbname=$this->database", $this->user, $this->password);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->isConnected = true;
      
    } catch (PDOException $e) {

      //echo "Error de conexión a PostgreSQL: " . $e->getMessage();
      //die();
    }
  }

  public function isConnected()
  {
    return $this->isConnected;
  }

  // Retorna datos solicitados
  public function obtenerConexion()
  {
    return $this->pdo;
  }

  // Destrulle la conexión realizada cerrando la conexión
  public function destruirConexion()
  {
    unset($this->pdo);
  }
}
