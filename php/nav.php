<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include("connect.php");

// Default user variables
$user = [];
$profilePhoto = 'images/default-user.png';
$username = 'Profile';

// Default admin variables
$admin = [];
$adminPhoto = 'images/admin_default.png';
$adminName = 'Admin';

// Fetch user info if logged in
if (isset($_SESSION['user_email'])) {
    $user_email = $_SESSION['user_email'];
    $q = "SELECT * FROM user_master_tbl WHERE user_email = '$user_email'";
    $result = mysqli_query($cn, $q);
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (!empty($user['user_photo'])) $profilePhoto = $user['user_photo'];
        if (!empty($user['user_name'])) $username = htmlspecialchars($user['user_name']);
    }
}

// Fetch admin info if logged in
if (isset($_SESSION['admin_email'])) {
    $admin_email = $_SESSION['admin_email'];
    $qAdmin = "SELECT * FROM admin_tbl WHERE admin_email = '$admin_email'";
    $resAdmin = mysqli_query($cn, $qAdmin);
    if ($resAdmin && mysqli_num_rows($resAdmin) > 0) {
        $admin = mysqli_fetch_assoc($resAdmin);
        if (!empty($admin['admin_photo'])) $adminPhoto = $admin['admin_photo'];
        if (!empty($admin['admin_name'])) $adminName = htmlspecialchars($admin['admin_name']);
    }
}

// Cart count for user
$cart_count = 0;
if (isset($_SESSION['user_email'])) {
    $user_email = $_SESSION['user_email'];
    $user_q = "SELECT user_id FROM user_master_tbl WHERE user_email = '$user_email'";
    $user_res = mysqli_query($cn, $user_q);
    if ($user_res && mysqli_num_rows($user_res) > 0) {
        $user_row = mysqli_fetch_assoc($user_res);
        $user_id = $user_row['user_id'];
        $cart_q = "SELECT SUM(prod_qty) AS total_items FROM cart_master_tbl WHERE user_id = $user_id";
        $cart_res = mysqli_query($cn, $cart_q);
        if ($cart_res) {
            $cart_row = mysqli_fetch_assoc($cart_res);
            $cart_count = $cart_row['total_items'] ?? 0;
        }
    }
}

// Determine who is logged in
$isUser = isset($_SESSION['user_email']);
$isAdmin = isset($_SESSION['admin_email']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pizza Delicious</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="./fonts/fonts1.css" rel="stylesheet">
  <link href="./fonts/fonts2.css" rel="stylesheet">
  <link href="./fonts/fonts3.css" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">

  <style>
    .profile-img {
      border-radius: 50%;
      width: 30px;
      height: 30px;
      object-fit: cover;
      margin-right: 8px;
    }

    .dropdown-menu {
      background-color: rgba(0, 0, 0, 0.6);
      border: none;
      border-radius: 0.5rem;
      min-width: 180px;
      padding: 0.5rem 0;
      backdrop-filter: blur(4px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    .dropdown-menu .dropdown-item {
      padding: 10px 20px;
      transition: background 0.3s ease, color 0.3s ease;
    }

    .dropdown-menu .dropdown-item:hover {
      background-color: rgba(0, 0, 0, 0.1);
    }

    .dropdown-menu.bg-dark .dropdown-item {
      color: #ffffff;
    }

    .dropdown-menu.bg-dark .dropdown-item:hover {
      background-color: #ff8800;
      color: #000000;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicious</small>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
        <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
        <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
        
        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

        <?php if ($isUser || $isAdmin): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userAdminDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo htmlspecialchars($isUser ? $profilePhoto : $adminPhoto); ?>" class="profile-img" alt="Profile">
                    <?php echo $isUser ? $username : $adminName; ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="userAdminDropdown">
                    
              <a class="dropdown-item" href="logout.php"><i class="ion-ios-log-out mr-2"></i> Logout</a>
            </div>
          </li>
        <?php else: ?>
          <li class="nav-item"><a href="signin.php" class="nav-link">Sign in</a></li>
        <?php endif; ?>
            <li class="nav-item">
            <a href="cart_view.php" class="nav-link position-relative">
              <span class="ion-ios-cart" style="font-size: 20px;"></span>
              <?php if ($cart_count > 0): ?>
                <span class="badge badge-danger position-absolute" style="top: -5px; right: -10px; font-size: 12px;">
                  <?php echo $cart_count; ?>
                </span>
              <?php endif; ?>
            </a>
          </li>
      </ul>
    </div>
  </div>
</nav>