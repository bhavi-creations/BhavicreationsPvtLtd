<?php
include 'db.connection/db_connection.php';

// Check if 'id' is provided and is numeric
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare DELETE statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM bhavi_enquiries WHERE id = ?");
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        // Redirect with success message
        header("Location: enquiries_list.php?msg=deleted");
        exit;
    } else {
        // Error if deletion fails
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid record ID.";
}

$conn->close();
