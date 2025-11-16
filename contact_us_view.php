<?php include("./php/admin_nav.php") ?>

<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100">
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-12 contact-info ftco-animate text-center">
        <h1>Contact / Feedback Messages</h1>
      </div>

      <table class="table table-striped ">
        <thead class="thead-dark">
          <tr class="text-center">
            <th>ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Type</th>
            <th>Message</th>
            <th>Submitted At</th>
            <th>Photo</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          include("connect.php");
          $q = "SELECT cu.*, um.user_name, um.user_email, um.user_photo 
                FROM contact_us cu
                INNER JOIN user_master_tbl um ON cu.user_id = um.user_id
                ORDER BY cu.submitted_at";
          $rs = mysqli_query($cn, $q);

          if(mysqli_num_rows($rs) > 0) {
            while ($row = mysqli_fetch_assoc($rs)) {
        ?>
          <tr class="text-center align-middle">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['user_email']; ?></td>
            <td><strong><?php echo $row['message_type']; ?></strong></td>
            <td><?php echo nl2br($row['message']); ?></td>
            <td><?php echo $row['submitted_at']; ?></td>
            <td>
              <img src="<?php echo !empty($row['user_photo']) ? $row['user_photo'] : 'images/default_user.png'; ?>" 
                   width="70" height="80" alt="User Photo">
            </td>
            <td>
              <a href="contact_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this entry?')">
                <input type="button" value="Delete" class="btn btn-danger">
              </a>
            </td>
          </tr>
        <?php
            }
          } else {
            echo "<tr><td colspan='8' class='text-center'>No messages found.</td></tr>";
          }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<?php include("./php/footer.php") ?>
