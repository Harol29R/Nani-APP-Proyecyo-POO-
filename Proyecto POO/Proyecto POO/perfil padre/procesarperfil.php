<?php
require_once 'padre.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $nacionalidad = $_POST['nacionalidad'];
    $edad = $_POST['edad'];
    $ubicacion = $_POST['ubicacion'];
    $contacto = $_POST['contacto'];
    $identificacion = $_POST['identificacion'];

    // Crear una instancia de la clase Database
    $db = new Padre();

    // Insertar los datos del padre en la base de datos
    if ($db->insertarPadre($nombre, $apellidos, $nacionalidad, $edad, $ubicacion, $contacto, $identificacion)) {
        echo "Datos del padre registrados correctamente.";
    } else {
        echo "Error al registrar los datos del padre. Por favor, inténtelo nuevamente.";
    }

    // Cerrar la conexión a la base de datos
    $db->closeConnection();
}
?>