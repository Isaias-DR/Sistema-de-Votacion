<?php

class ConexionPosrgreSql
{
    private $host = 'localhost';
    private $database = 'desis';
    private $user = 'postgres';
    private $password = 'root';
    private $pdo;

    // Puente a la base de datos
    function __construct()
    {
        try {

            $this->pdo = new PDO("pgsql:host=$this->host;dbname=$this->database", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            
            echo "Error de conexión a PostgreSQL: " . $e->getMessage();
            die();
        }
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
