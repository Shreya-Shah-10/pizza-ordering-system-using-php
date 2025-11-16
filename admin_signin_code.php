<?php
session_start();

$admin_name = $_POST['admin_name'];
$admin_password = $_POST['admin_password'];

if ($admin_name == "admin" && $admin_password == "admin123") {
    $_SESSION['admin_name'] = $admin_name; 
    
    // Redirect directly without echo before header
    header("Location: admin_dashboard.php");
    exit();
} else {
    echo "Invalid username or password.";
}
?>
