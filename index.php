<?php

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['formNombre'];
    $email = $_POST['formMail'];
    $consulta = $_POST['formConsulta'];
    $mensaje = $_POST['formMensaje'];

    // Comenzamos verificación de variables
    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor, ingresa tu nombre <br />';
    }

    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor, ingresa un correo válido <br />';
        }
    } else {
        $errores .= 'Por favor, ingresa un correo <br />';
    }
}

require 'index.view.php';

?>