<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // si usas Composer
// require 'PHPMailer/src/PHPMailer.php'; // si descargaste manualmente
// require 'PHPMailer/src/SMTP.php';
// require 'PHPMailer/src/Exception.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre  = $_POST['nombre'];
    $email   = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP de Outlook
        $mail->isSMTP();
        $mail->Host       = 'smtp.office365.com'; // Servidor de Outlook
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tu_correo@outlook.com'; // Tu correo Outlook
        $mail->Password   = 'tu_contraseña'; // Tu contraseña
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Remitente y destinatario
        $mail->setFrom('tu_correo@outlook.com', 'Formulario Web');
        $mail->addAddress('tu_correo@outlook.com'); // Puedes poner otro correo si deseas

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje del formulario de contacto";
        $mail->Body    = "
            <h3>Nuevo mensaje recibido</h3>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Mensaje:</strong><br>$mensaje</p>
        ";

        $mail->send();
        echo 'Mensaje enviado con éxito.';
    } catch (Exception $e) {
        echo "No se pudo enviar el mensaje. Error: {$mail->ErrorInfo}";
    }
}
?>

