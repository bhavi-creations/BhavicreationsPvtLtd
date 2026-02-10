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

/* ================= POST DATA PROCESSING ================= */

// 1. Basic & Services
$name                 = $_POST['name'] ?? '';
$firm_name            = $_POST['firm_name'] ?? '';
$personal_num         = $_POST['pernal_number'] ?? '';
$online_url           = $_POST['online_url'] ?? '';
$address              = $_POST['address'] ?? '';
$online_presence_type = $_POST['online_presence_type'] ?? '';

$designing            = $_POST['designing'] ?? '';
$digital_mkt          = $_POST['digital_marketing'] ?? '';
$branding             = $_POST['branding_agency'] ?? '';
$payment_type         = $_POST['payment_type'] ?? '';

// 2. Media (Photos)
$photo_type           = $_POST['photo_type'] ?? '';
$photo_count          = $_POST['photo_count'] ?? '';
$photo_custom_msg     = $_POST['photo_custom_msg'] ?? '';

// 3. Reels logic
$r_foot_check         = isset($_POST['reels_footage_check']) ? 1 : 0;
$r_foot               = $_POST['reels_footage'] ?? '';
$r_script_check       = isset($_POST['reels_script_check']) ? 1 : 0;
$r_script             = $_POST['reels_script'] ?? '';
$r_music_check        = isset($_POST['reels_music_check']) ? 1 : 0;
$r_music              = $_POST['reels_music'] ?? '';
$reels_count          = $_POST['reels_count'] ?? '';
$reels_custom_msg     = (int)($_POST['reels_custom_msg'] ?? 0);

// 4. Videos logic
$v_foot               = $_POST['video_type'] ?? '';
$v_script             = $_POST['videoscript_type'] ?? '';
$v_music              = $_POST['videomusic_type'] ?? '';
$voice_over           = $_POST['voice_over'] ?? '';
$voice_msg            = $_POST['videovoice_msg'] ?? '';
$video_count          = $_POST['video_count'] ?? '';
$video_custom         = $_POST['video_custom_msg'] ?? '';

// 5. Website & SEO
$web_cat              = $_POST['website_category'] ?? '';
$web_dom              = $_POST['domain_option'] ?? '';
$web_host             = $_POST['hosting_need'] ?? '';
$seo_check            = isset($_POST['seo_check']) ? 1 : 0;
$seo_type             = $_POST['seo_type'] ?? '';

// 6. Social & Printing
$social_platforms     = isset($_POST['social_media']) ? implode(", ", $_POST['social_media']) : 'None';
$handle_check         = isset($_POST['handling_check']) ? 1 : 0;
$handle_type          = $_POST['social_handling'] ?? '';
$print_check          = isset($_POST['printing_check']) ? 1 : 0;
$print_services       = isset($_POST['printing_services']) ? implode(", ", $_POST['printing_services']) : 'None';
$gst_option           = $_POST['gst_option'] ?? '';

/* ================= INSERT INTO DB ================= */

$sql = "INSERT INTO bhavi_enquiries (
    name, firm_name, personal_number, online_url, address, online_presence_type,
    designing, digital_marketing, branding_agency, payment_type,
    photo_type, photo_count, photo_custom_msg,
    reels_footage_check, reels_footage, reels_script_check, reels_script, 
    reels_music_check, reels_music, reels_count, reels_custom_msg,
    video_footage_source, video_script_source, video_music_source, 
    voice_over_option, voice_over_custom_msg, video_count, video_custom_msg,
    website_category, website_domain, website_hosting,
    seo_check, seo_type,
    social_media_platforms, social_media_handling_check, social_media_handling_type,
    printing_check, printing_services, gst_option
) VALUES (" . str_repeat('?,', 38) . "?)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare Failed: " . $conn->error);
}

$types = "ssssss sss s sss i s i s i s s i sssssss sss i s s i s i s s";
$types = str_replace(' ', '', $types); 

$stmt->bind_param($types, 
    $name, $firm_name, $personal_num, $online_url, $address, $online_presence_type,
    $designing, $digital_mkt, $branding, $payment_type,
    $photo_type, $photo_count, $photo_custom_msg,
    $r_foot_check, $r_foot, $r_script_check, $r_script, 
    $r_music_check, $r_music, $reels_count, $reels_custom_msg,
    $v_foot, $v_script, $v_music, 
    $voice_over, $voice_msg, $video_count, $video_custom,
    $web_cat, $web_dom, $web_host,
    $seo_check, $seo_type,
    $social_platforms, $handle_check, $handle_type,
    $print_check, $print_services, $gst_option
);

if (!$stmt->execute()) {
    die("Insert Error: " . $stmt->error);
}

/* ================= EMAIL SENDING ================= */
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'manimalladi05@gmail.com';
    $mail->Password   = 'mxhnohjzbkofbrbs'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->SMTPOptions = ['ssl' => ['verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true]];

    $mail->setFrom('manimalladi05@gmail.com', 'Bhavi Creations');
    $mail->addAddress('manimalladi05@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = "New Detailed Business Enquiry - $firm_name";

    // Prepare Friendly Labels for Checkboxes
    $r_foot_label   = $r_foot_check ? "Yes ($r_foot)" : "No";
    $r_script_label = $r_script_check ? "Yes ($r_script)" : "No";
    $r_music_label  = $r_music_check ? "Yes ($r_music)" : "No";
    $seo_label      = $seo_check ? "Required ($seo_type)" : "Not Required";
    $handle_label   = $handle_check ? "Yes ($handle_type)" : "No";
    $print_label    = $print_check ? "Yes ($print_services)" : "No";

    $mail->Body = "
    <div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
        <h2 style='background: #007bff; color: #fff; padding: 10px;'>Bhavi Creations Pvt Ltd</h2>
        
        <h3>1. Client Information</h3>
        <p><b>Name:</b> $name <br>
           <b>Firm Name:</b> $firm_name <br>
           <b>Phone:</b> $personal_num <br>
           <b>URL:</b> $online_url <br>
           <b>Online Presence:</b> $online_presence_type <br>
           <b>Address:</b> $address </p>

        <hr>
        <h3>2. Services Selected</h3>
        <p><b>Main Services:</b> $designing, $digital_mkt, $branding <br>
           <b>Payment/Package:</b> $payment_type </p>

        <hr>
        <h3>3. Media Requirements</h3>
        <p><b>Photos:</b> $photo_count ($photo_type) <br>
           <b>Photo Msg:</b> $photo_custom_msg </p>
        
        <p><b>Reels Count:</b> $reels_count <br>
           <b>Reels Footage:</b> $r_foot_label <br>
           <b>Reels Script:</b> $r_script_label <br>
           <b>Reels Music:</b> $r_music_label <br>
           <b>Reels Custom Value:</b> $reels_custom_msg </p>

        <p><b>Video Count:</b> $video_count <br>
           <b>Video Footage Source:</b> $v_foot <br>
           <b>Video Script Source:</b> $v_script <br>
           <b>Video Music Source:</b> $v_music <br>
           <b>Voice Over:</b> $voice_over ($voice_msg) <br>
           <b>Video Custom Msg:</b> $video_custom </p>

        <hr>
        <h3>4. Website & Marketing</h3>
        <p><b>Website Category:</b> $web_cat <br>
           <b>Domain:</b> $web_dom <br>
           <b>Hosting:</b> $web_host <br>
           <b>SEO Status:</b> $seo_label </p>

        <hr>
        <h3>5. Social Media & Printing</h3>
        <p><b>Social Platforms:</b> $social_platforms <br>
           <b>Handling Needed:</b> $handle_label <br>
           <b>Printing Services:</b> $print_label <br>
           <b>GST Option:</b> $gst_option </p>
           
        <footer style='margin-top: 20px; font-size: 12px; color: #777;'>
            This enquiry was submitted from your website contact form.
        </footer>
    </div>
    ";

    $mail->send();
    echo "<script>alert('✅ Thank You for Choosing Bhavi Creations Pvt Ltd'); window.location.href='index.php';</script>";
} catch (Exception $e) {
    echo "Saved in Database, but Mail Error: {$mail->ErrorInfo}";
}

$stmt->close();
$conn->close();
?>