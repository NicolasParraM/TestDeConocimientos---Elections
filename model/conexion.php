<?php

class Conexion
{
    private $host = "localhost";
    private $db = "elections";
    private $user = "root";
    private $password = "";
    private $conect;

    public function __construct()
    {
        try {
            $this->conect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión a BD";
        } catch (Exception $e) {
            $this->conect = 'Error de conexión';
            echo "ERROR: " . $e->getMessage();
        }
    }

    public function connect()
    {
        return $this->conect;
    }
}

?>