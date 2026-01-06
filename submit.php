<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* ================= DB CONNECTION ================= */
$conn = new mysqli(
    "localhost",
    "bhavicreationspvtltd",
    "qbWkuINh3wc8P9z",
    "bhavicreationspvtltd"
);

if ($conn->connect_error) {
    die("DB Connection Failed: " . $conn->connect_error);
}

/* ================= PHPMailer ================= */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

/* ================= POST DATA ================= */
$name    = $_POST['name'] ?? '';
$phone   = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';

$photo_count  = $_POST['photo_count'] ?? '';
$photo_type   = $_POST['photo_type'] ?? '';
$photo_custom = $_POST['photo_custom_msg'] ?? '';

$video_count  = $_POST['video_count'] ?? '';
$video_type   = $_POST['video_type'] ?? '';
$video_custom = $_POST['video_custom_msg'] ?? '';

$reels_count  = $_POST['reels_count'] ?? '';
$reels_type   = $_POST['reels_type'] ?? '';
$reels_custom = $_POST['reels_custom_msg'] ?? '';

$website_type = $_POST['website_type'] ?? '';
$seo_option   = $_POST['seo_option'] ?? '';
$payment_type = $_POST['payment_type'] ?? '';
$gst_option   = $_POST['gst_option'] ?? '';

$social_media = json_encode($_POST['social_media'] ?? []);

/* ================= SAVE TO DATABASE ================= */
$sql = "
INSERT INTO bhavi_enquiries (
    name, phone, address,
    photo_count, photo_type, photo_custom_msg,
    video_count, video_type, video_custom_msg,
    reels_count, reels_type, reels_custom_msg,
    website_type, seo_option, social_media,
    payment_type, gst_option
) VALUES (
    ?, ?, ?,
    ?, ?, ?,
    ?, ?, ?,
    ?, ?, ?,
    ?, ?, ?,
    ?, ?
)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("SQL Error: " . $conn->error);
}

$stmt->bind_param(
    "sssssssssssssssss",
    $name, $phone, $address,
    $photo_count, $photo_type, $photo_custom,
    $video_count, $video_type, $video_custom,
    $reels_count, $reels_type, $reels_custom,
    $website_type, $seo_option, $social_media,
    $payment_type, $gst_option
);

$stmt->execute();

/* ================= EMAIL SEND ================= */
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'manimalladi05@gmail.com';
    $mail->Password   = 'mxhnohjzbkofbrbs';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('manimalladi05@gmail.com', 'Bhavi Creation');
    $mail->addAddress('manimalladi05@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Enquiry - Bhavi Creation Pvt Ltd';

    $mail->Body = "
        <h2>New Enquiry</h2>
        <b>Name:</b> $name<br>
        <b>Phone:</b> $phone<br>
        <b>Address:</b> $address<br><br>

        <b>Photos:</b> $photo_count ($photo_type) $photo_custom<br>
        <b>Videos:</b> $video_count ($video_type) $video_custom<br>
        <b>Reels:</b> $reels_count ($reels_type) $reels_custom<br><br>

        <b>Website:</b> $website_type<br>
        <b>SEO:</b> $seo_option<br>
        <b>Payment:</b> $payment_type<br>
        <b>GST:</b> $gst_option
    ";

    $mail->send();

    header("Location: index.php");
    exit;

} catch (Exception $e) {
    echo "MAIL ERROR: " . $mail->ErrorInfo;
}
