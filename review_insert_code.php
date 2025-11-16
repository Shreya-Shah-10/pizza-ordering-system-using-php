<?php
session_start();
include("connect.php");

// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

$user_id = (int)$_SESSION['user_id'];
$prod_id = (int)$_POST['prod_id'];
$review_message = mysqli_real_escape_string($cn, $_POST['review_message']);
$review_date = date("Y-m-d");

// Directory for review photos
$review_dir = "images/review_photo/";
if (!file_exists($review_dir)) {
    mkdir($review_dir, 0777, true);
}

$review_photo = null;

// 1️⃣ If user uploaded a photo
if (!empty($_FILES['review_photo']['name'])) {
    $ext = pathinfo($_FILES['review_photo']['name'], PATHINFO_EXTENSION);
    $filename = "user_" . $user_id . "." . $ext; // simple filename
    $path = $review_dir . $filename;
    if (move_uploaded_file($_FILES['review_photo']['tmp_name'], $path)) {
        $review_photo = $path;
    }
} else {
    // 2️⃣ If no uploaded photo, copy user's profile photo
    $query = "SELECT user_photo FROM user_master_tbl WHERE user_id = $user_id LIMIT 1";
    $res = mysqli_query($cn, $query);
    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $user_photo_path = $row['user_photo'];
        if (!empty($user_photo_path) && file_exists($user_photo_path)) {
            $ext = pathinfo($user_photo_path, PATHINFO_EXTENSION);
            $new_filename = $review_dir . "user_" . $user_id . "." . $ext; // simple name
            copy($user_photo_path, $new_filename); // overwrite if exists
            $review_photo = $new_filename;
        }
    }
}

// Insert review into database
$sql = "INSERT INTO review_master_tbl 
        (review_message, prod_id, review_photo, review_date, user_id)
        VALUES ('$review_message', $prod_id, " . 
        ($review_photo ? "'$review_photo'" : "NULL") . ", 
        '$review_date', $user_id)";

if (mysqli_query($cn, $sql)) {
    header("Location: r_product_detail.php?prod_id=" . $prod_id);
    exit();
} else {
    echo "Error: " . mysqli_error($cn);
}
?>
