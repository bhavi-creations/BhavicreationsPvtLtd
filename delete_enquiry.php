<?php
// 1. Database connection పాత్ మీ ఫోల్డర్ స్ట్రక్చర్ ప్రకారం సరిచూసుకోండి
include 'db.connection/db_connection.php'; 

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // 2. Prepare DELETE statement
    $stmt = $conn->prepare("DELETE FROM bhavi_enquiries WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // డిలీట్ అయ్యాక తిరిగి డేటా కనిపించే పేజీకి వెళ్లాలి. 
        // మీ ఫైల్ పేరు 'display_data.php' అయితే ఇక్కడ అది ఇవ్వండి.
        header("Location: index.php?status=deleted"); 
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Invalid request. No ID found.";
}

$conn->close();
?>