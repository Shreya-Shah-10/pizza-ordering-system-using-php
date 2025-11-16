<?php 
session_start();
include("./php/admin_nav.php");
include("connect.php");

// Redirect if user not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$q = "SELECT * FROM user_master_tbl WHERE user_id = $user_id";
$res = mysqli_query($cn, $q);
$row = mysqli_fetch_assoc($res);
?>

<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100"
    style="background: url('./images/p1.png') no-repeat center center / cover;">
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1>Edit Your Profile</h1>
      </div>

      <div class="col-md-7 ftco-animate mt-4">
        <form action="signin_login_edit_code.php" class="contact-form" method="post" enctype="multipart/form-data">
          <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name" name="user_name" value="<?php echo $row['user_name']; ?>" >
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email" name="user_email" value="<?php echo $row['user_email']; ?>" >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Address" name="user_address" value="<?php echo $row['user_address']; ?>" >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Mobile" name="user_mobile" value="<?php echo $row['user_mobile']; ?>" >
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="New Password (or leave blank)" name="user_password">
          </div>
          <div class="form-group">
            <label>Current Photo:</label><br>
            <img src="<?php echo $row['user_photo']; ?>" width="100" height="100" class="rounded mb-2">
            <input type="file" class="form-control" name="user_photo">
          </div>
          <div class="form-group text-center">
            <input type="submit" value="Update Profile" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include("./php/footer.php"); ?>
