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

    $mail->setFrom($_POST['email'], $_POST['nombre'] . ' ' . $_POST['apellido']);
    $mail->addAddress('infraestructura@uanorte.edu.co');

    // Adjuntar archivo si existe
    if (!empty($_FILES['archivo']['tmp_name'])) {
        $mail->addAttachment($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
    }

    $mail->isHTML(true);
    $mail->Subject = 'PQRSF: ' . $_POST['selectCarreraInteres'];

    $mail->Body = "
        <h3>Nueva PQRSF</h3>
        <b>Nombre:</b> {$_POST['nombre']}<br>
        <b>Apellido:</b> {$_POST['apellido']}<br>
        <b>Email:</b> {$_POST['email']}<br>
        <b>Documento:</b> {$_POST['documento']}<br>
        <b>Teléfono:</b> {$_POST['telefono']}<br>
        <b>Tipo:</b> {$_POST['selectCarreraInteres']}<br>
        <b>Descripción:</b><br>{$_POST['descripcion']}
    ";

    $mail->send();

    echo "Enviado correctamente";

} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}