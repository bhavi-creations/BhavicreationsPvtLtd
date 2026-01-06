<?php
include 'db.connection/db_connection.php';

$id = $_GET['id'];
$conn->query("DELETE FROM bhavi_enquiries WHERE id=$id");

header("Location: view_enquiries.php");
exit;
