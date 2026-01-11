<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* ================= DB CONNECTION ================= */
$conn = new mysqli(
    "localhost",
    username: "root",
    password: "",
    database:"bhavicreations_db"
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

$website_type   = $_POST['website_type'] ?? '';
$website_custom = $_POST['website_custom_msg'] ?? '';

$seo_option   = $_POST['seo_option'] ?? '';
$payment_type = $_POST['payment_type'] ?? '';
$gst_option   = $_POST['gst_option'] ?? '';

$social_media = json_encode($_POST['social_media'] ?? []);

/* ================= CUSTOM OVERRIDE LOGIC ================= */
/* Photo */
if ($photo_type === 'Custom' && !empty($photo_custom)) {
    $photo_type = $photo_custom;
}

/* Video */
if ($video_type === 'Custom' && !empty($video_custom)) {
    $video_type = $video_custom;
}

/* Reels */
if ($reels_type === 'Custom' && !empty($reels_custom)) {
    $reels_type = $reels_custom;
}

/* Website */
if ($website_type === 'Custom' && !empty($website_custom)) {
    $website_type = $website_custom;
}

/* ================= SAVE TO DATABASE ================= */
$sql = "
INSERT INTO bhavi_enquiries (
    name, phone, address,
    photo_count, photo_type,
    video_count, video_type,
    reels_count, reels_type,
    website_type, seo_option, social_media,
    payment_type, gst_option
) VALUES (
    ?, ?, ?,
    ?, ?,
    ?, ?,
    ?, ?,
    ?, ?, ?,
    ?, ?
)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("SQL Error: " . $conn->error);
}

$stmt->bind_param(
    "ssssssssssssss",
    $name, $phone, $address,
    $photo_count, $photo_type,
    $video_count, $video_type,
    $reels_count, $reels_type,
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
        <b>Name:</b> {$name}<br>
        <b>Phone:</b> {$phone}<br>
        <b>Address:</b> {$address}<br><br>

        <b>Photos:</b> {$photo_count} ({$photo_type})<br>
        <b>Videos:</b> {$video_count} ({$video_type})<br>
        <b>Reels:</b> {$reels_count} ({$reels_type})<br><br>

        <b>Website:</b> {$website_type}<br>
        <b>SEO:</b> {$seo_option}<br>
        <b>Payment:</b> {$payment_type}<br>
        <b>GST:</b> {$gst_option}
    ";

    $mail->send();

    header("Location: index.php");
    exit;

} catch (Exception $e) {
    echo "MAIL ERROR: " . $mail->ErrorInfo;
}
