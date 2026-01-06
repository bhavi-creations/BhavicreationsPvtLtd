<?php
// ================== DB CONNECTION ==================
$conn = new mysqli("localhost", "root", "", "bhavicreations_db");
if ($conn->connect_error) {
    die("DB Connection Failed");
}

// ================== PHPMailer ==================
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// ================== POST DATA ==================
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

// ================== SAVE TO DATABASE ==================
$sql = "INSERT INTO bhavi_enquiries
(name, phone, address,
photo_count, photo_type, photo_custom_msg,
video_count, video_type, video_custom_msg,
reels_count, reels_type, reels_custom_msg,
website_type, seo_option, social_media,
payment_type, gst_option)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
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

// ================== EMAIL SEND ==================
$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;

    // 🔴 SAME MAIL WHICH IS ALREADY WORKING FOR YOU
    $mail->Username   = 'manimalladi05@gmail.com';
    $mail->Password   = 'ltlxupjfqbobegqg';

    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('manimalladi05@gmail.com', 'Bhavi Creation');
    $mail->addAddress('manimalladi05@gmail.com'); // Admin mail

    $mail->isHTML(true);
    $mail->Subject = 'New Enquiry - Bhavi Creation Pvt Ltd';

    $mail->Body = "
    <h2>New Enquiry Received</h2>

    <h3>Basic Details</h3>
    <b>Name:</b> $name <br>
    <b>Phone:</b> $phone <br>
    <b>Address:</b> $address <br><br>

    <h3>Photos</h3>
    Count: $photo_count <br>
    Type: $photo_type <br>
    Custom: $photo_custom <br><br>

    <h3>Videos</h3>
    Count: $video_count <br>
    Type: $video_type <br>
    Custom: $video_custom <br><br>

    <h3>Reels</h3>
    Count: $reels_count <br>
    Type: $reels_type <br>
    Custom: $reels_custom <br><br>

    <h3>Website & SEO</h3>
    Website: $website_type <br>
    SEO: $seo_option <br><br>

    <h3>Social Media</h3>
    " . implode(', ', $_POST['social_media'] ?? []) . "<br><br>

    <h3>Payment</h3>
    Payment Type: $payment_type <br>
    GST: $gst_option
    ";

    $mail->send();

    echo "SUCCESS";

} catch (Exception $e) {
    echo "MAIL ERROR";
}




// below code workings 



<?php
$conn = new mysqli("localhost", "root", "", "bhavicreations_db");



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* ===== SAVE DATA ===== */
$social = json_encode($_POST['social_media'] ?? []);

$sql = "INSERT INTO bhavi_enquiries
(name,phone,address,photo_count,photo_type,photo_custom_msg,
video_count,video_type,video_custom_msg,
reels_count,reels_type,reels_custom_msg,
website_type,seo_option,social_media,payment_type,gst_option)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssssss",
$_POST['name'],$_POST['phone'],$_POST['address'],
$_POST['photo_count'],$_POST['photo_type'],$_POST['photo_custom_msg'],
$_POST['video_count'],$_POST['video_type'],$_POST['video_custom_msg'],
$_POST['reels_count'],$_POST['reels_type'],$_POST['reels_custom_msg'],
$_POST['website_type'],$_POST['seo_option'],$social,
$_POST['payment_type'],$_POST['gst_option']
);
$stmt->execute();

/* ===== EMAIL ===== */
// $mail = new PHPMailer(true);
