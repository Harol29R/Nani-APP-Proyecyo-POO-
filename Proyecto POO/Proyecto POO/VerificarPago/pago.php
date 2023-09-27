<?php
class Pago {
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

    public function realizarPago($numeroTarjeta, $nombreTitular, $fechaVencimiento, $cvv) {
        $numeroTarjeta = $this->conn->real_escape_string($numeroTarjeta);
        $nombreTitular = $this->conn->real_escape_string($nombreTitular);
        $fechaVencimiento = $this->conn->real_escape_string($fechaVencimiento);
        $cvv = $this->conn->real_escape_string($cvv);

    $query = "INSERT INTO pago (numero_tarjeta, nombre_titular, fecha_vencimiento, cvv) VALUES ('$numeroTarjeta', '$nombreTitular', '$fechaVencimiento', '$cvv')";
        if ($this->conn->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}    
?>