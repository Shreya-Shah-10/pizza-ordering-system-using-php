<?php include("./php/nav.php")?>

<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100"
    style="background: url('./images/new2.jpg') no-repeat center center / cover;" >
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1 id="form-title">Create Account</h1>
      </div>

      <div class="col-md-7 ftco-animate">

        <!-- Log-In Form -->
        <form action="login_code.php" method="post" class="contact-form" id="login-form" style="display: block;">
          <!-- Email -->
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email" name="email" required>
          </div>

          <!-- Password -->
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Your Password" name="password" required>
          </div>

          <!-- User Type -->
          <div class="form-group">
            <select name="usertype" class="form-control" required>
              <option  value="none" disabled selected>Select Usertype</option>
              <option value="admin">Administrator</option>
              <option value="reguser">Registered User</option>
            </select>
          </div>

          <!-- Submit -->
          <div class="form-group text-center">
            <input type="submit" value="Log In" class="btn btn-primary py-3 px-5">
          </div>
        </form>


        <!-- Sign-Up Form -->
        <form action="signin_code.php" method="post" enctype="multipart/form-data" class="contact-form" id="signup-form" style="display: none;">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name" name="user_name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email" name="user_email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Address" name="user_address" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Mobile" name="user_mobile" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Your Password" name="user_password" required>
          </div>
          <div class="form-group">
            <input type="file" class="form-control" name="user_photo" required>
          </div>
          <div class="form-group text-center">
            <input type="submit" value="Create Account" class="btn btn-primary py-3 px-5">
          </div>
        </form>

        

        <!-- Toggle Link -->
        <p class="text-center mt-3 text-white">
          <span id="toggle-text">Have an account?</span>
          <a href="#" id="toggle-link" class="text-warning font-weight-bold">Log in</a>
        </p>
      </div>
    </div>
  </div>
</section>

<script>
  const signupForm = document.getElementById("signup-form");
  const loginForm = document.getElementById("login-form");
  const toggleLink = document.getElementById("toggle-link");
  const toggleText = document.getElementById("toggle-text");
  const formTitle = document.getElementById("form-title");

  toggleLink.addEventListener("click", function (e) {
    e.preventDefault();
    if (signupForm.style.display === "none") {
      signupForm.style.display = "block";
      loginForm.style.display = "none";
      toggleText.textContent = "Have an account?";
      toggleLink.textContent = "Log in";
      formTitle.textContent = "Create Account";
    } else {
      signupForm.style.display = "none";
      loginForm.style.display = "block";
      toggleText.textContent = "No account?";
      toggleLink.textContent = "Sign up";
      formTitle.textContent = "Log In";
    }
  });
</script>

<?php include("./php/footer.php"); ?>
