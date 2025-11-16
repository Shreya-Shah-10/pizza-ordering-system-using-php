<?php
session_start();
include("connect.php"); // DB connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($cn, $_POST['email']);
    $password = mysqli_real_escape_string($cn, $_POST['password']);
    $usertype = $_POST['usertype'];

    if ($usertype == "admin") {
        // Check admin login
        $sql = "SELECT * FROM admin_tbl WHERE admin_email='$email' AND admin_password='$password'";
        $result = mysqli_query($cn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $admin = mysqli_fetch_assoc($result);
            $_SESSION['admin_email'] = $admin['admin_email'];
            $_SESSION['admin_name']  = $admin['admin_name']; // store name too

            header("Location: admin_dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid Admin Credentials'); window.location.href='signin.php';</script>";
        }
    } 
    elseif ($usertype == "reguser") {
        // Check user login
        $sql = "SELECT * FROM user_master_tbl WHERE user_email='$email' AND user_password='$password'";
        $result = mysqli_query($cn, $sql);

        if (!$result) {
            die("Query Failed: " . mysqli_error($cn));
        }

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);

            // Store both email & name in session
            $_SESSION['user_id']    = $user['user_id'];   // FIX added this
            $_SESSION['user_email'] = $user['user_email'];
            $_SESSION['user_name']  = $user['user_name'];

            header("Location: reg_home.php");
            exit();
        } else {
            echo "<script>alert('Invalid User Credentials'); window.location.href='signin.php';</script>";
        }
    } 
    else {
        echo "<script>alert('Please select a valid user type.'); window.location.href='signin.php';</script>";
    }
}
?>
