<?php

if (file_exists(__DIR__ . '/.env')) {
    $variables = parse_ini_file(__DIR__ . '/.env');
    foreach ($variables as $key => $value) {
        putenv("$key=$value");
    }
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../cep-san_juan/src/Exception.php';
require '../cep-san_juan/src/PHPMailer.php';
require '../cep-san_juan/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
    $mesage = htmlspecialchars($_POST['mesage']);
    $subject = htmlspecialchars($_POST['subject']);

    if ($subject === "other" && !empty($_POST['other-text'])) {
        $subject = htmlspecialchars($_POST['other-text']);
    }

    $subject=htmlspecialchars($subject);

    $mail_recipient = "l.edu31espinosa@gmail.com";
    $content = "Nombre: $name\n";
    $content .= "Correo: $mail\n";
    $content .= "Asunto: $subject\n";
    $content .= "Mensaje: $mesage\n";

    $mailObj = new PHPMailer(true);

    try {
        $mailObj->isSMTP();
        $mailObj->Host = 'smtp.gmail.com';
        $mailObj->SMTPAuth = true;
        $mailObj->Username = getenv("EMAIL"); // Replace with your Gmail
        $mailObj->Password = getenv("PASSWORD");    // Replace with your Gmail App Password
        $mailObj->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mailObj->Port = 587;

        $mailObj->setFrom($mail, $name);
        $mailObj->addAddress($mail_recipient);
        $mailObj->Subject = $subject;
        $mailObj->Body = $content;
        $mailObj->addReplyTo($mail, $name);  // This ensures that replies go to the user's email

        $mailObj->send();
        echo "Mensaje enviado correctamente.";
    } catch (Exception $e) {
        echo "Hubo un error al enviar el mensaje. Mailer Error: {$mailObj->ErrorInfo}";
    }
}
?>
