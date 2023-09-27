<?php
require_once 'Pago.php';

$pago = new Pago();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numeroTarjeta = $_POST['numero_tarjeta'];
    $nombreTitular = $_POST['nombre_titular'];
    $fechaVencimiento = $_POST['fecha_vencimiento'];
    $cvv = $_POST['cvv'];

    // Realizar el pago
    if ($pago->realizarPago($numeroTarjeta, $nombreTitular, $fechaVencimiento, $cvv)) {
        echo "Pago exitoso. Gracias por su compra.";
        header("Location: ../Exito/exito.html");    
    } else {
        echo "Error en el pago. Por favor, inténtelo nuevamente.";
    }
}
?>