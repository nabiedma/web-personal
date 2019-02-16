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
}

require 'index.view.php';

?>