<?php

class ConexionMySql
{
    private $server = "localhost:3306";
    private $username = "root";
    private $password = "";
    private $database = "desis";
    private $link;

    // Puente a la base de datos
    function __construct()
    {
        $this->link = mysqli_connect($this->server, $this->username, $this->password, $this->database);
        $this->link->set_charset("utf8");
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
