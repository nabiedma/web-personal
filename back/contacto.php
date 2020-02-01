<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

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

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'youremail@gmail.com'; // email
$mail->Password = 'PASSWORD'; // password
$mail->setFrom('system@cksoftwares.com', 'AB Contacto'); // From email and name
$mail->addAddress('nabiedma@gmail.com', 'Alejandro Biedma'); // to email and name
$mail->Subject = 'Mensaje del Formulario de Contacto';
$mail->msgHTML("test body"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Message sent!";
}
