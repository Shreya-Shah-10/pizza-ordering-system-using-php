<?php
include("connect.php");

// Check if user_id is passed via URL
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    // Optional: Get the image path and delete the photo file
    $q_img = "SELECT user_photo FROM user_master_tbl WHERE user_id = $user_id";
    $rs_img = mysqli_query($cn, $q_img);
    if ($row_img = mysqli_fetch_assoc($rs_img)) {
        $file_path = $row_img['user_photo'];
        if (file_exists($file_path)) {
            unlink($file_path); // Delete image file
        }
    }

    // Now delete the user record
    $q_del = "DELETE FROM user_master_tbl WHERE user_id = $user_id";
    if (mysqli_query($cn, $q_del)) {
        echo "<script>alert('User Deleted Successfully'); window.location.href='signin_view.php';</script>";
    } else {
        echo "<script>alert('Error deleting user: " . mysqli_error($cn) . "'); window.location.href='signin_view.php';</script>";
    }
} else {
    echo "<script>alert('Invalid Request'); window.location.href='signin_view.php';</script>";
}
?>
