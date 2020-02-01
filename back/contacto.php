<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';
die();

if (isset($_POST['submit'])) {
    if (isset($_POST['formNombre']) && isset($_POST['formMail']) && isset($_POST['formConsulta']) && isset($_POST['formMensaje'])) {
        $nombre = $_POST['formNombre'];
        $mail = $_POST['formMail'];
        $consulta = $_POST['formConsulta'];
        $mensaje = $_POST['formMensaje'];

        // Google Recaptcha data
        $secretKey = "6LfzUtQUAAAAAOm8I_S1UlUZbJllaaT_bmCssFF9";
        $responseKey = $POST['g-recaptcha-response'];
        $userIP = $_SERVER['REMOTE_ADDR'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$esponseKey&remoteip=$userIP";
        $response = file_get_contents($url);
        $response = json_decode($response);
    }
}
