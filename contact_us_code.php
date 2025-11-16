<?php
session_start();
include("connect.php");

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

// Get and sanitize form inputs
$user_id = $_SESSION['user_id'];
$message_type = trim($_POST['message_type']);
$message = trim($_POST['message']);

// Prepare statement
$stmt = $cn->prepare("INSERT INTO contact_us (user_id, message_type, message, submitted_at) VALUES (?, ?, ?, NOW())");

if($stmt === false){
    die("Prepare failed: " . $cn->error);
}

// Bind parameters: user_id=int, message_type/message=strings
$stmt->bind_param("iss", $user_id, $message_type, $message);

// Execute query
if ($stmt->execute()) {
    echo "<script>alert('Your message has been submitted successfully.'); window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Error submitting message: " . $stmt->error . "'); window.history.back();</script>";
}

// Close statement and connection
$stmt->close();
$cn->close();
?>
