<?php
require_once 'Registro.php';

$registro = new Registro();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Validar y procesar los datos del formulario, por ejemplo:
    if ($registro->agregarRegistro($nombre, $correo, $contraseña)) {
        echo "Registro exitoso. ¡Bienvenido!";
        // Redirigir o mostrar un mensaje de éxito según tus necesidades.
    } else {
        echo "Error al registrar. Por favor, inténtalo nuevamente.";
    }
}
?>