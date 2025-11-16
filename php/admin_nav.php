<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include("connect.php");

// Default admin variables
$adminName = 'Admin';

// Check if admin is logged in
if (isset($_SESSION['admin_email'])) {
    $admin_email = $_SESSION['admin_email'];

    // Fetch admin info from DB
    $q = "SELECT * FROM admin_tbl WHERE admin_email = '$admin_email'";
    $result = mysqli_query($cn, $q);

    if ($result && mysqli_num_rows($result) > 0) {
        $admin = mysqli_fetch_assoc($result);
        // Set admin name
        if (!empty($admin['admin_name'])) {
            $adminName = htmlspecialchars($admin['admin_name']);
        }
        if (!empty($admin['admin_photo'])) {
            $adminPhoto = $admin['admin_photo'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pizza Delicious Admin</title>
  
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
  
  <!-- Bootstrap CSS -->
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome Icons -->
  <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <!-- Your custom CSS -->
  <!--<link href="style.css" rel="stylesheet">-->
  <style>
    .profile-img {
      border-radius: 50%;
      width: 30px;
      height: 30px;
      object-fit: cover;
      margin-right: 8px;
    }

  .dropdown-menu {
    background-color: rgba(0, 0, 0, 0.6); /* semi-transparent black */
    border: none;
    border-radius: 0.5rem;
    min-width: 180px;
    padding: 0.5rem 0;
    backdrop-filter: blur(4px); /* optional: adds glass-like blur */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
  }

  .dropdown-menu .dropdown-item {
    padding: 10px 20px;
    transition: background 0.3s ease, color 0.3s ease;
  }

  .dropdown-menu .dropdown-item:hover {
    background-color: rgba(0, 0, 0, 0.1); /* subtle hover */
    
  }
  /* Override default Bootstrap dropdown styles */
    .dropdown-menu.bg-dark .dropdown-item {
      color: #ffffff; /* white text */
    }

    .dropdown-menu.bg-dark .dropdown-item:hover {
      background-color: #ff8800; /* orange on hover */
      color: #000000; /* black text on hover */
    }

  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicious</small>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="admin_dashboard.php" class="nav-link">Dashboard</a></li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="exploreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Items
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="exploreDropdown">
            <li class="nav-item dropdown"><a href="category_view.php" class="dropdown-item">Category</a></li>
            <li class="nav-item dropdown"><a href="sub_cat_view.php" class="dropdown-item">Sub Category</a></li>
            <li class="nav-item dropdown"><a href="product_view.php" class="dropdown-item">Product</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="exploreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Customized Items
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="exploreDropdown">
            <li class="nav-item dropdown"><a href="customize_cat_view.php" class="dropdown-item">Customized category</a></li>
            <li class="nav-item dropdown"><a href="customize_sub_cat_view.php" class="dropdown-item">Customized Sub Category</a></li>
            </ul>
        </li>
          <li class="nav-item dropdown ">
          <!--<a class="nav-link dropdown-toggle" href="#" id="exploreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Order
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="exploreDropdown">
            <li class="nav-item dropdown"><a href="order_view.php" class="dropdown-item">Product Order</a></li>
            <li class="nav-item dropdown"><a href="order_view1.php" class="dropdown-item">Customized Product Order</a></li>
            </ul>
        </li>-->

        <li class="nav-item"><a href="order_view.php" class="nav-link">Orders</a></li>
        <li class="nav-item"><a href="review_view.php" class="nav-link">Review</a></li>
        <li class="nav-item"><a href="signin_view.php" class="nav-link">Users</a></li>
        <li class="nav-item"><a href="contact_us_view.php" class="nav-link">Contact us</a></li>
        
        <!-- Admin Profile -->
        <?php if (isset($_SESSION['admin_email'])): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="<?php echo htmlspecialchars($adminPhoto); ?>" class="profile-img" alt="Admin">
  <?php echo $adminName; ?>
</a>

            <ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="adminDropdown">
            
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="admin_signin_form.php">Sign in</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
