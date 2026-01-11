<?php
// ================== DB CONNECTION ==================
$conn = new mysqli("localhost", "root", "", "bhavicreations_db");
if ($conn->connect_error) {
    die("DB Connection Failed: " . $conn->connect_error);
}

// ================== PHPMailer ==================
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// ================== SAFE POST HELPER ==================
function post($key) {
    return $_POST[$key] ?? '';
}

// ================== BASIC DETAILS ==================
$name    = post('name');
$phone   = post('phone');
$address = post('address');

// ================== PHOTO ==================
$photo_count  = post('photo_count');
$photo_type   = post('photo_type');
$photo_custom = post('photo_custom_msg');

// ================== VIDEO ==================
$video_count  = post('video_count');
$video_type   = post('video_type');
$video_custom = post('video_custom_msg');

$video_footage_source = post('video_footage_source');
$video_script_source  = post('video_script_source');
$video_music_source   = post('video_music_source');

// ================== REELS ==================
$reels_count  = post('reels_count');
$reels_type   = post('reels_type');
$reels_custom = post('reels_custom_msg');

$reels_footage_source = post('reels_footage_source');
$reels_script_source  = post('reels_script_source');
$reels_music_source   = post('reels_music_source');

// ================== WEBSITE ==================
$website_type          = post('website_type');
$website_category_type = post('website_category_type');
$website_domain_type   = post('website_domain_type');
$website_hosting_type  = post('website_hosting_type');

// ================== SEO / PAYMENT ==================
$seo_option   = post('seo_option');
$payment_type = post('payment_type');
$gst_option   = post('gst_option');

// ================== SOCIAL MEDIA ==================
$social_media = json_encode($_POST['social_media'] ?? []);

// ================== SAVE TO DATABASE ==================
$sql = "INSERT INTO bhavi_enquiries (
    name, phone, address,

    photo_count, photo_type, photo_custom_msg,

    video_count, video_type, video_custom_msg,
    video_footage_source, video_script_source, video_music_source,

    reels_count, reels_type, reels_custom_msg,
    reels_footage_source, reels_script_source, reels_music_source,

    website_type, website_category_type,
    website_domain_type, website_hosting_type,

    seo_option, social_media,
    payment_type, gst_option
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssssssssssssssssssssssss",
    $name, $phone, $address,

    $photo_count, $photo_type, $photo_custom,

    $video_count, $video_type, $video_custom,
    $video_footage_source, $video_script_source, $video_music_source,

    $reels_count, $reels_type, $reels_custom,
    $reels_footage_source, $reels_script_source, $reels_music_source,

    $website_type, $website_category_type,
    $website_domain_type, $website_hosting_type,

    $seo_option, $social_media,
    $payment_type, $gst_option
);

if (!$stmt->execute()) {
    die("DB INSERT FAILED: " . $stmt->error);
}

// ================== EMAIL SEND ==================
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'manimalladi05@gmail.com';
    $mail->Password   = 'ltlxupjfqbobegqg';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('manimalladi05@gmail.com', 'Bhavi Creations');
    $mail->addAddress('manimalladi05@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Enquiry - Bhavi Creations';

    $mail->Body = "
    <h2>New Enquiry Received</h2>

    <h3>Client Details</h3>
    Name: $name <br>
    Phone: $phone <br>
    Address: $address <br><br>

    <h3>Photo Requirements</h3>
    Count: $photo_count <br>
    Type: $photo_type <br>
    Notes: $photo_custom <br><br>

    <h3>Video Requirements</h3>
    Count: $video_count <br>
    Type: $video_type <br>
    Notes: $video_custom <br>
    Footage Source: $video_footage_source <br>
    Script Source: $video_script_source <br>
    Music Source: $video_music_source <br><br>

    <h3>Reels Requirements</h3>
    Count: $reels_count <br>
    Type: $reels_type <br>
    Notes: $reels_custom <br>
    Footage Source: $reels_footage_source <br>
    Script Source: $reels_script_source <br>
    Music Source: $reels_music_source <br><br>

    <h3>Website Details</h3>
    Website Type: $website_type <br>
    Category: $website_category_type <br>
    Domain: $website_domain_type <br>
    Hosting: $website_hosting_type <br><br>

    <h3>SEO & Social</h3>
    SEO Option: $seo_option <br>
    Social Media: " . implode(', ', $_POST['social_media'] ?? []) . "<br><br>

    <h3>Payment</h3>
    Payment Type: $payment_type <br>
    GST: $gst_option
    ";

    $mail->send();
    echo "SUCCESS";

} catch (Exception $e) {
    echo "MAIL ERROR: " . $mail->ErrorInfo;
}
?>
