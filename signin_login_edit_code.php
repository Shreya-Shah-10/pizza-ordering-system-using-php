<?php
session_start();
include("connect.php");

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: signin_login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Get POST data
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_address = $_POST['user_address'];
$user_mobile = $_POST['user_mobile'];
$user_password = $_POST['user_password']; // Can be blank
$user_photo = $_FILES['user_photo']['name']; // Can be blank

// Handle photo
if (!empty($user_photo)) {
    $photo_path = "images/user_photo/" . $user_photo;
    move_uploaded_file($_FILES['user_photo']['tmp_name'], $photo_path);
} else {
    // Keep existing photo
    $q1 = "SELECT user_photo FROM user_master_tbl WHERE user_id = $user_id";
    $res1 = mysqli_query($cn, $q1);
    $row1 = mysqli_fetch_assoc($res1);
    $photo_path = $row1['user_photo'];
}

// Handle password
if (!empty($user_password)) {
    $update = "UPDATE user_master_tbl SET 
        user_name = '$user_name',
        user_email = '$user_email',
        user_address = '$user_address',
        user_mobile = '$user_mobile',
        user_password = '$user_password',
        user_photo = '$photo_path'
        WHERE user_id = $user_id";
} else {
    $update = "UPDATE user_master_tbl SET 
        user_name = '$user_name',
        user_email = '$user_email',
        user_address = '$user_address',
        user_mobile = '$user_mobile',
        user_photo = '$photo_path'
        WHERE user_id = $user_id";
}

$i = mysqli_query($cn, $update);

if ($i) {
    // Update session variables
    $_SESSION['user_name'] = $user_name;
    $_SESSION['user_email'] = $user_email;
    $_SESSION['user_photo'] = $photo_path;

    header("Location: profile.php");
    exit();
} else {
    echo "Profile update failed: " . mysqli_error($cn);
}
?>
