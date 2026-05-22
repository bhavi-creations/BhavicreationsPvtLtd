<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('Please fill all required fields'); window.history.back();</script>";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        // Mee Gmail details
        $mail->Username   = 'manimalladi05@gmail.com';
        $mail->Password   = 'cvarqcchfjpawxvo';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender & Receiver
        $mail->setFrom('manimalladi05@gmail.com', 'Website Contact Form');
        $mail->addAddress('manimalladi05@gmail.com');

        // Reply to user email
        $mail->addReplyTo($email, $name);

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Enquiry';

        $mail->Body = "
            <h2>New Website Enquiry</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->send();

        echo "<script>
            
            window.location.href='thankyou.php';
        </script>";

    } catch (Exception $e) {
        echo "<script>
            alert('Message could not be sent. Error: {$mail->ErrorInfo}');
            window.history.back();
        </script>";
    }
}
?>