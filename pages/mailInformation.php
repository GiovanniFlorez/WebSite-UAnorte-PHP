<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'infraestructura@uanorte.edu.co';
    $mail->Password = 'fpso jbtk ylmv pnfd';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($_POST['email'], $_POST['nombre']);
    $mail->addAddress('infraestructura@uanorte.edu.co');
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);
    
    $mail->Subject = 'Información: ' . $_POST['asunto'];

    $mail->Body = "
        <h3>Información</h3>

        <b>Nombre:</b> {$_POST['nombre']}<br>
        <b>Email:</b> {$_POST['email']}<br>
        <b>Documento:</b> {$_POST['documento']}<br>
        <b>Teléfono:</b> {$_POST['telefono']}<br>
        <b>Carrera de Interés:</b> {$_POST['carrera']}<br>
        <b>Descripción:</b><br>
        {$_POST['descripcion']}
    ";

    $mail->send();

    echo "ok";

} catch (Exception $e) {

    echo "Error al enviar el correo";
}