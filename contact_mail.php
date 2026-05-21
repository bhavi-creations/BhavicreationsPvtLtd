<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = htmlspecialchars(trim($_POST['first_name'] ?? ''));
    $last_name  = htmlspecialchars(trim($_POST['last_name'] ?? ''));
    $email      = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone      = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $subject    = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message    = nl2br(htmlspecialchars(trim($_POST['message'] ?? '')));

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        $mail->Username   = 'manimalladi05@gmail.com';
        $mail->Password   = 'cvarqcchfjpawxvo';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('manimalladi05@gmail.com', 'Bhavi Website');
        $mail->addAddress('manimalladi05@gmail.com', 'Bhavi Creations');

        if (!empty($email)) {
            $mail->addReplyTo($email, $first_name . ' ' . $last_name);
        }

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Enquiry - Bhavi Website";

        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <table border='1' cellpadding='10' cellspacing='0' style='border-collapse:collapse;width:100%;'>
                <tr>
                    <td><strong>First Name</strong></td>
                    <td>{$first_name}</td>
                </tr>
                <tr>
                    <td><strong>Last Name</strong></td>
                    <td>{$last_name}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{$email}</td>
                </tr>
                <tr>
                    <td><strong>Phone Number</strong></td>
                    <td>{$phone}</td>
                </tr>
                <tr>
                    <td><strong>Selected Service</strong></td>
                    <td>{$subject}</td>
                </tr>
                <tr>
                    <td><strong>Message</strong></td>
                    <td>{$message}</td>
                </tr>
            </table>
        ";

        $mail->AltBody = "
First Name: {$first_name}
Last Name: {$last_name}
Email: {$email}
Phone: {$phone}
Selected Service: {$subject}
Message: " . strip_tags($message);

        $mail->send();

        header("Location: thankyou.php");
        exit();
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "Access Denied";
}
