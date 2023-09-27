<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['correo'])) {
    // El usuario ha iniciado sesión, puedes mostrar contenido personalizado
    echo "Bienvenido, ".$_SESSION['correo']."!";
    // Aquí puedes agregar enlaces a otras páginas o acciones disponibles para el usuario autenticado
} else {
    // El usuario no ha iniciado sesión, redirigirlo al formulario de inicio de sesión
    header("Location: login.php");
    exit;
}
?>