<?php
class Registro {
    private $servername = "localhost"; // Cambiar a la dirección del servidor si es necesario
    private $username = "root";  // Cambiar al nombre de usuario de tu base de datos
    private $password = "";  // Cambiar a la contraseña de tu base de datos
    private $dbname = "mi_basedatos"; // Cambiar al nombre de tu base de datos
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Error de conexión a la base de datos: " . $this->conn->connect_error);
        }
    }

    public function agregarRegistro($nombre, $correo, $contraseña) {
        $nombre = $this->conn->real_escape_string($nombre);
        $correo = $this->conn->real_escape_string($correo);
        $contraseña = $this->conn->real_escape_string($contraseña);

        $contraseñaHash = password_hash($contraseña, PASSWORD_BCRYPT);

        $query = "INSERT INTO registro (Nombre, Correo, Contraseña) VALUES ('$nombre', '$correo', '$contraseñaHash')";
        if ($this->conn->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerRegistroPorCorreo($correo) {
        $correo = $this->conn->real_escape_string($correo);
        $query = "SELECT * FROM registro WHERE Correo = '$correo'";
        $result = $this->conn->query($query);
        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function verificarContraseña($correo, $contraseña) {
        $correo = $this->conn->real_escape_string($correo);
        $contraseña = $this->conn->real_escape_string($contraseña);

        $query = "SELECT Contraseña FROM registro WHERE Correo = '$correo'";
        $result = $this->conn->query($query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $contraseñaHash = $row['Contraseña'];
            return password_verify($contraseña, $contraseñaHash);
        } else {
            return false;
        }
    }
}
