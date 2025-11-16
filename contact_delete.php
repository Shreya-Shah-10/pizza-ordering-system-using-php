<?php
include("connect.php");

// Check if id is passed via URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Now delete the message record
    $q_del = "DELETE FROM contact_us WHERE id = $id";
    if (mysqli_query($cn, $q_del)) {
        echo "<script>alert('Message Deleted Successfully'); window.location.href='contact_us_view.php';</script>";
    } else {
        echo "<script>alert('Error deleting message: " . mysqli_error($cn) . "'); window.location.href='contact_us_view.php';</script>";
    }
} else {
    echo "<script>alert('Invalid Request'); window.location.href='contact_us_view.php';</script>";
}
?>
