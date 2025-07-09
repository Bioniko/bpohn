<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // si usas Composer

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre  = $_POST['nombre'] ?? '';
    $email   = $_POST['email'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 2; // Modo debug para ver detalles
        $mail->Debugoutput = 'html';

        $mail->isSMTP();
        $mail->Host       = 'mail.alertahn.com';   // Servidor SMTP HostGator
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@alertahn.com';   // Tu correo
        $mail->Password   = 'aleIN2024##';          // Tu contraseña real
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL para puerto 465
        $mail->Port       = 465;                    // Puerto SSL

        $mail->setFrom('info@alertahn.com', 'Formulario Web');
        $mail->addAddress('info@alertahn.com');    // Destinatario

        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje del formulario de contacto";
        $mail->Body    = "
            <h3>Nuevo mensaje recibido</h3>
            <p><strong>Nombre:</strong> {$nombre}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Mensaje:</strong><br>{$mensaje}</p>
        ";

        $mail->send();
        echo 'Mensaje enviado con éxito.';
    } catch (Exception $e) {
        echo "No se pudo enviar el mensaje. Error: {$mail->ErrorInfo}";
    }
}
?>
