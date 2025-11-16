<?php
include("connect.php");

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_address = $_POST['user_address'];
$user_mobile = $_POST['user_mobile'];
$user_password = $_POST['user_password'];
$user_photo = "images/user_photo/" . $_FILES['user_photo']['name'];

move_uploaded_file($_FILES['user_photo']['tmp_name'], $user_photo);

// Check if email already exists
$q_check = "SELECT * FROM user_master_tbl WHERE user_email = '$user_email'";
$res = mysqli_query($cn, $q_check);

if (mysqli_num_rows($res) > 0) {
    echo "Email already exists!";
    exit();
}

// Insert user
$q = "INSERT INTO user_master_tbl (user_name, user_email, user_address, user_mobile, user_password, user_photo) 
      VALUES ('$user_name', '$user_email', '$user_address', '$user_mobile', '$user_password', '$user_photo')";

$i = mysqli_query($cn, $q);

if ($i) {
    echo "Account created successfully!";
    header("Location: index.php");
    exit();
} else {
    echo "Account creation failed: " . mysqli_error($cn);
}
?>
