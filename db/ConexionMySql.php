<?php

class ConexionMySql
{
  private $server = "localhost:3306";
  private $username = "root";
  private $password = "";
  private $database = "desis";
  private $isConnected = false;
  private $link;

  // Puente a la base de datos
  function __construct()
  {

    try {

      $this->link = mysqli_connect($this->server, $this->username, $this->password, $this->database);
      $this->link->set_charset("utf8");
      $this->isConnected = true;

    } catch (Exception $e) {

      // Aquí manejamos la excepción
      //echo "No se pudo establecer la conexión: " . $e->getMessage();
      //die();
    }
  }

  public function isConnected()
  {
    return $this->isConnected;
  }

  // Retorna datos solicitados
  public function consulta($sql)
  {
    return $this->link->query($sql);
  }

  // Destrulle la conexión realizada cerrando la conexión
  public function cerrarConexion()
  {
    mysqli_close($this->link);
  }
}
