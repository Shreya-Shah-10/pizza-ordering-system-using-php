<?php
session_start(); // Make sure session is started

if (isset($_SESSION['user_id'])) {
    // User is logged in, show registered user navbar
    include("./php/r_header.php");
} else {
    // User is not logged in, show guest navbar
    include("./php/nav.php");
}
?>

<section class="ftco-section contact-section">
  <div class="container mt-5">
    <div class="row block-9">
      <div class="col-md-4 contact-info ftco-animate">
        <div class="row">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Address:</span> 60 Feet Road, K P Boarding campus, Surendranagar-363035 </p>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Contact with us:</span> <a href="tel://1234567920">91+ 18001 2020 2020</a></p>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Email:</span> <a href="mailto:info@pizzaDelicious.com">sjvarmora@yahoo.in</a></p>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Website:</span> <a href="#">www.pizzaDelicious.com</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-1"></div>

      <div class="col-md-6 ftco-animate">
        <?php 
        if(isset($_SESSION['user_id'])):
          $user_id = $_SESSION['user_id'];
          $user_name = $_SESSION['user_name'];
          $user_email = $_SESSION['user_email'];
        ?>
          <h2 class="mb-4">Raise a Complaint</h2>
          <form action="contact_us_code.php" method="POST" class="contact-form">
            <!-- Hidden fields -->
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
            <input type="hidden" name="user_email" value="<?php echo $user_email; ?>">
            <select name="message_type" class="form-control w-25 d-inline">
    <option value="">All Types</option>
    <option value="Complaint" <?php if(isset($_GET['message_type']) && $_GET['message_type']=='Complaint') echo 'selected'; ?>>Complaint</option>
    <option value="Feedback - Good" <?php if(isset($_GET['message_type']) && $_GET['message_type']=='Feedback - Good') echo 'selected'; ?>>Feedback - Good</option>
    <option value="Feedback - Bad" <?php if(isset($_GET['message_type']) && $_GET['message_type']=='Feedback - Bad') echo 'selected'; ?>>Feedback - Bad</option>
    <option value="Customer Idea - Business Growth" <?php if(isset($_GET['message_type']) && $_GET['message_type']=='Customer Idea - Business Growth') echo 'selected'; ?>>Customer Idea - Business Growth</option>
    <option value="Other Inquiry" <?php if(isset($_GET['message_type']) && $_GET['message_type']=='Other Inquiry') echo 'selected'; ?>>Other Inquiry</option>
  </select>
            <div class="form-group">
              <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Describe your issue in detail..." required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Submit Complaint" class="btn btn-danger py-3 px-5">
            </div>
          </form>
        <?php else: ?>
          <div class="text-center shadow-sm p-5 rounded " 
     style="background: rgba(255, 255, 255, 0.01); 
            border: 1px solid rgba(255,255,255,0.2); ">
  <h4 class="text-light mb-3">
    <i class="fas fa-lock text-danger mr-2"></i>
    Access Restricted
  </h4>
  <p class="text-light mb-4" style="opacity: 0.9;">
    Please <strong>log in to your account</strong> to raise a complaint or contact our support team.
  </p>
  <a href="signin.php" 
     class="btn py-2 px-4 btn btn-primary" >
    <i class="fas fa-sign-in-alt mr-2"></i>Login Now
  </a>
</div>

        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php include("./php/footer.php") ?>
