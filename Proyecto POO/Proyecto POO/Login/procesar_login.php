<?php
require_once 'Registro.php';

$registro = new Registro();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Verificar las credenciales del usuario
    if ($registro->verificarContraseña($correo, $contraseña)) {
        // Iniciar sesión
        session_start();
        $_SESSION['correo'] = $correo;
        // Redirigir al usuario a la página de inicio o a otra página de bienvenida
        header("Location: ../Inicio/inicio.html");
        exit;
    } else {
        echo "Credenciales incorrectas. Por favor, inténtalo nuevamente.";
    }
}
?>