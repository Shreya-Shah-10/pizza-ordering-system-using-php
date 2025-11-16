<?php include("./php/admin_nav.php") ?>

<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100">
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-10 contact-info ftco-animate text-center">
        <h1>User Information</h1>
      </div>

      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Photo</th>
            
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          include("connect.php");
          $q = "SELECT * FROM user_master_tbl";
          $rs = mysqli_query($cn, $q);
          while ($row = mysqli_fetch_assoc($rs)) {
        ?>
          <tr>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['user_email']; ?></td>
            <td><?php echo $row['user_address']; ?></td>
            <td><?php echo $row['user_mobile']; ?></td>
            <td><img src="<?php echo $row['user_photo']; ?>" width="100" height="100" alt="user image"></td>
            
            <td>
              <a href="user_delete.php?user_id=<?php echo $row['user_id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">
                <input type="button" value="Delete" class="btn btn-danger">
              </a>
            </td>
          </tr>
        <?php
          }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<?php include("./php/footer.php") ?>
