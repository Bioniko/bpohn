<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php'; // si usas Composer

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // --- Validación reCAPTCHA ---
    $secretKey = "6LeNpqsrAAAAAHw9znKHzfmJmAjjUVvxJbFgXmBG"; // clave secreta
    $responseKey = $_POST['g-recaptcha-response'] ?? '';
    $userIP = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    $response = file_get_contents($url);
    $responseKeys = json_decode($response, true);

    if (!isset($responseKeys["success"]) || $responseKeys["success"] !== true) {
        echo "<script>alert('⚠️ Por favor, confirma que no eres un robot.');window.history.back();</script>";
        exit;
    }

    // --- Datos del formulario ---
    $nombre    = $_POST['nombre'] ?? '';
    $apellido  = $_POST['apellido'] ?? '';
    $telefono  = $_POST['telefono'] ?? '';
    $correo    = $_POST['correo'] ?? '';
    $mensaje   = $_POST['mensaje'] ?? '';
    $ip_usuario = $_POST['ip_usuario'] ?? '';


    $mail = new PHPMailer(true);

    try {
        //$mail->SMTPDebug = 2; // Debug opcional
        $mail->isSMTP();
        $mail->Host       = 'mail.bpohn.com';   // Servidor SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@bpohn.com';      // Tu correo
        $mail->Password   = 'bpoIN2024##';         // Tu contraseña real
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
        $mail->Port       = 465;                   
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom('info@bpohn.com', 'mail@bpohn.com');
        $mail->addAddress('info@bpohn.com'); // Destinatario

        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje de BPOHN";
        $mail->Body    = "
            <h3>Nuevo mensaje recibido</h3>
            <p><strong>Nombre:</strong> {$nombre}</p>
            <p><strong>Apellido:</strong> {$apellido}</p>
            <p><strong>Teléfono:</strong> {$telefono}</p>
            <p><strong>Correo electrónico:</strong> {$correo}</p>
            <p><strong>¡Cuéntanos qué servicio te interesa!:</strong><br>{$mensaje}</p>
            <p><strong>IP del usuario:</strong> {$ip_usuario}</p>
        ";

        $mail->send();
        echo "<script>alert('✅ Datos enviados exitosamente');window.history.back();</script>";
    } catch (Exception $e) {
        echo "<script>alert('❌ No se pudo enviar el mensaje. Error: {$mail->ErrorInfo}');window.history.back();</script>";
    }
}
?>
