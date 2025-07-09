<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php'; // si usas Composer
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre  = $_POST['nombre'] ?? '';
    $apellido  = $_POST['apellido'] ?? '';
    $telefono  = $_POST['telefono'] ?? '';
    $correo   = $_POST['correo'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';
    $mail = new PHPMailer(true);
    try {
        //$mail->SMTPDebug = 2; // Modo debug para ver detalles
        //$mail->Debugoutput = 'html';
        $mail->isSMTP();
        $mail->Host       = 'mail.alertahn.com';   // Servidor SMTP HostGator
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@bpohn.com';   // Tu correo
        $mail->Password   = 'bpoIN2024##';          // Tu contraseña real
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL para puerto 465
        $mail->Port       = 465;                    // Puerto SSL
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('info@bpohn.com', 'mail@alertahn.com');
        $mail->addAddress('info@bpohn.com');    // Destinatario

        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje de Alerta Security Group";
        $mail->Body    = "
            <h3>Nuevo mensaje recibido</h3>
            <p><strong>Nombre:</strong> {$nombre}</p>
            <p><strong>Apellido:</strong> {$apellido}</p>
            <p><strong>Teléfono:</strong> {$telefono}</p>
            <p><strong>Correo electrónico:</strong> {$correo}</p>
            <p><strong>¡Cuéntanos qué servicio te interesa!:</strong><br>{$mensaje}</p>
        ";
        $mail->send();
        echo "<script>alert('Datos enviados exitosamente');window.history.back();</script>";
    } catch (Exception $e) {
        echo "<script>alert('No se pudo enviar el mensaje. Error: {$mail->ErrorInfo}');window.history.back();</script>";
        //echo "No se pudo enviar el mensaje. Error: {$mail->ErrorInfo}";
    }
}
?>
