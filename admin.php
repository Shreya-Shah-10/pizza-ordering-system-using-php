<?php
session_start();

if (isset($_SESSION['admin_id'])) {
    header("Location: admin_dashboard.php");
    exit();
} else {
    header("Location: admin_signin.php");
    exit();
}
?>