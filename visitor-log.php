<?php
session_start();
include './db.connection/db_connection.php';

$page = basename($_SERVER['PHP_SELF']);
$ip   = $_SERVER['REMOTE_ADDR'];
$city = 'Unknown'; // optional (future lo IP API use cheyochu)

if (!isset($_SESSION['viewed_pages'][$page])) {

    $stmt = $conn->prepare("
        INSERT INTO visitor_logs (page_name, ip_address, city, visited_at)
        VALUES (?, ?, ?, NOW())
    ");
    $stmt->bind_param("sss", $page, $ip, $city);
    $stmt->execute();

    $_SESSION['viewed_pages'][$page] = true;
}
