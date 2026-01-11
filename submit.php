<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* ================= DB CONNECTION ================= */
$conn = new mysqli("localhost", "root", "", "bhavicreations_db");
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
$client_name     = $_POST['name'] ?? '';
$firm_name       = $_POST['firm_name'] ?? '';
$personal_number = $_POST['pernal_number'] ?? '';
$online_url      = $_POST['online_url'] ?? '';
$address         = $_POST['address'] ?? '';

/* ================= SERVICES ================= */
$services = [];
if (!empty($_POST['designing']))         $services[] = "Designing";
if (!empty($_POST['digital_marketing'])) $services[] = "Digital Marketing";
if (!empty($_POST['branding_agency']))   $services[] = "Branding Agency";
$selected_services = !empty($services) ? implode(", ", $services) : 'None';

/* ================= PACKAGE & MEDIA ================= */
$package_type   = $_POST['payment_type'] ?? '';
$image_quality  = $_POST['photo_type'] ?? '';
$image_count    = $_POST['photo_count'] ?? '';

$reels_count      = $_POST['reels_count'] ?? '';
$reels_custom_val = $_POST['reels_custom_msg'] ?? '';

$video_voice_over = $_POST['video_voice_over'] ?? '';
$video_count      = $_POST['video_count'] ?? '';

$social_platforms = isset($_POST['social_media']) ? implode(", ", $_POST['social_media']) : 'None';
$gst_status       = $_POST['gst_option'] ?? '';

/* ================= EXTRA OPTIONS ================= */
$handling_check = $_POST['handling_check'] ?? 0;
$handling_type  = $_POST['handling_type'] ?? '';

$printing_check    = $_POST['printing_check'] ?? 0;
$printing_services = isset($_POST['printing_services']) ? implode(", ", $_POST['printing_services']) : '';

$seo_check = $_POST['seo_check'] ?? 0;
$seo_type  = $_POST['seo_type'] ?? '';

$reels_footage_check = $_POST['reels_footage_check'] ?? 0;
$reels_footage       = $_POST['reels_footage'] ?? '';

$reels_script_check = $_POST['reels_script_check'] ?? 0;
$reels_script       = $_POST['reels_script'] ?? '';

$reels_music_check = $_POST['reels_music_check'] ?? 0;
$reels_music       = $_POST['reels_music'] ?? '';

/* ================= INSERT ================= */
$sql = "INSERT INTO bhavi_enquiries (
    client_name,
    firm_name,
    personal_number,
    online_url,
    address,
    selected_services,
    package_type,
    image_quality,
    image_count,
    reels_count,
    reels_custom_val,
    video_voice_over,
    video_count,
    social_platforms,
    gst_status,
    handling_check,
    handling_type,
    printing_check,
    printing_services,
    seo_check,
    seo_type,
    reels_footage_check,
    reels_footage,
    reels_script_check,
    reels_script,
    reels_music_check,
    reels_music
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare Failed: " . $conn->error);
}

$stmt->bind_param(
    "sssssssssssssssississississ",
    $client_name,
    $firm_name,
    $personal_number,
    $online_url,
    $address,
    $selected_services,
    $package_type,
    $image_quality,
    $image_count,
    $reels_count,
    $reels_custom_val,
    $video_voice_over,
    $video_count,
    $social_platforms,
    $gst_status,
    $handling_check,
    $handling_type,
    $printing_check,
    $printing_services,
    $seo_check,
    $seo_type,
    $reels_footage_check,
    $reels_footage,
    $reels_script_check,
    $reels_script,
    $reels_music_check,
    $reels_music
);

if (!$stmt->execute()) {
    die("Insert Error: " . $stmt->error);
}

/* ================= EMAIL ================= */
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'manimalladi05@gmail.com';
    $mail->Password   = 'mxhnohjzbkofbrbs'; // App password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // 🔧 SSL FIX (XAMPP)
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];

    $mail->setFrom('manimalladi05@gmail.com', 'Bhavi Creations');
    $mail->addAddress('manimalladi05@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = "New Business Enquiry - $firm_name";

    $mail->Body = "
        <h2>New Business Enquiry</h2>
        <b>Name:</b> $client_name <br>
        <b>Firm:</b> $firm_name <br>
        <b>Phone:</b> $personal_number <br>
        <b>URL:</b> $online_url <br>
        <b>Address:</b> $address <br><hr>
        <b>Services:</b> $selected_services <br>
        <b>Package:</b> $package_type <br>
        <b>Images:</b> $image_count ($image_quality) <br>
        <b>Reels:</b> $reels_count <br>
        <b>Videos:</b> $video_count <br><hr>
        <b>Social:</b> $social_platforms <br>
        <b>Printing:</b> $printing_services <br>
        <b>SEO:</b> $seo_type <br>
        <b>Footage:</b> $reels_footage <br>
        <b>Script:</b> $reels_script <br>
        <b>Music:</b> $reels_music <br>
        <b>GST:</b> $gst_status
    ";

    $mail->send();

    echo "<script>
        alert('✅ Submitted Successfully & Mail Sent');
        window.location.href='index.php';
    </script>";

} catch (Exception $e) {
    echo "Saved in DB, but Mail Error: {$mail->ErrorInfo}";
}

$stmt->close();
$conn->close();
