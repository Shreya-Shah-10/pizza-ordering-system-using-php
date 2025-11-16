<?php include("./php/admin_nav.php"); ?>
<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100">
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-12 contact-info ftco-animate text-center">
        <h1>Review Details</h1>
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th>Review ID</th>
              <th>Review Message</th>
              <th>Product Name</th>
              <th>Review Photo</th>
              <th>Review Date</th>
              <th>User Name</th>
              
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include("connect.php");

            $q = "SELECT r.*, p.prod_name, u.user_name 
                  FROM review_master_tbl r
                  JOIN product_master_tbl p ON r.prod_id = p.prod_id
                  JOIN user_master_tbl u ON r.user_id = u.user_id";
            
            $rs = mysqli_query($cn, $q);
            while ($row = mysqli_fetch_assoc($rs)) {
              ?>
              <tr>
                <td><?php echo $row['review_id']; ?></td>
                <td><?php echo $row['review_message']; ?></td>
                <td><?php echo $row['prod_name']; ?></td>
                <td>
                  <img src="<?php echo $row['review_photo']; ?>" width="100" height="100">
                </td>
                <td><?php echo $row['review_date']; ?></td>
                <td><?php echo $row['user_name']; ?></td>
                
                <td>
                  <a href="review_delete.php?review_id=<?php echo $row['review_id']; ?>">
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
  </div>
</section>
<?php include("./php/footer.php"); ?>
