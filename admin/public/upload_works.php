<?php
include '../../db.connection/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $media_type = $conn->real_escape_string($_POST['media_type']);
    $title = $conn->real_escape_string($_POST['title']);

    // File upload
    if (isset($_FILES['media_file']) && $_FILES['media_file']['error'] === UPLOAD_ERR_OK) {
        $fileTmp = $_FILES['media_file']['tmp_name'];
        $fileName = $_FILES['media_file']['name'];
        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Allowed extensions
        

        $allowedExt = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg', 'mp4', 'mov', 'avi', 'webm', 'pdf'];
        if (!in_array($ext, $allowedExt)) {
            die("❌ Error: Invalid file type. Allowed: " . implode(', ', $allowedExt));
        }

        // Upload folder
        $uploadDir = 'uploads/staff/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Unique file name
        $newFileName = uniqid('work_') . '.' . $ext;
        $uploadPath = $uploadDir . $newFileName;

        // Move uploaded file
        if (move_uploaded_file($fileTmp, $uploadPath)) {
            // ✅ Store only filename in DB
            $sql = "INSERT INTO our_works (media_type, title, file_path)
                    VALUES ('$media_type', '$title', '$newFileName')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>
                    alert('✅ File uploaded successfully.');
                    window.location.href = 'view_works.php';
                </script>";
            } else {
                echo "❌ Database Error: " . $conn->error;
            }
        } else {
            echo "❌ Failed to move uploaded file.";
        }
    } else {
        echo "❌ No file uploaded or upload error.";
    }
} else {
    echo "❌ Invalid request method.";
}

$conn->close();
?>
