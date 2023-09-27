<?php
class Padre {
    private $servername = "localhost"; 
    private $username = "root";  
    private $password = "";  
    private $dbname = "mi_basedatos"; 
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Error de conexión a la base de datos: " . $this->conn->connect_error);
        }
    }

    public function insertarPadre($nombre, $apellidos, $nacionalidad, $edad, $ubicacion, $contacto, $identificacion) {
        $nombre = $this->conn->real_escape_string($nombre);
        $apellidos = $this->conn->real_escape_string($apellidos);
        $nacionalidad = $this->conn->real_escape_string($nacionalidad);
        $edad = $this->conn->real_escape_string($edad);
        $ubicacion = $this->conn->real_escape_string($ubicacion);
        $contacto = $this->conn->real_escape_string($contacto);
        $identificacion = $this->conn->real_escape_string($identificacion);

        $sql = "INSERT INTO padre (nombre, apellidos, nacionalidad, edad, ubicacion, contacto, identificacion) 
                VALUES ('$nombre', '$apellidos', '$nacionalidad', '$edad', '$ubicacion', '$contacto', '$identificacion')";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>