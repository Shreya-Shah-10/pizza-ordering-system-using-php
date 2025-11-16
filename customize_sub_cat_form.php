<?php include("./php/admin_nav.php")?>

<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100"
    style="background: url('./images/p1.png') no-repeat center center / cover;">
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1>customize sub Category Form</h1>
      </div>

      <div class="col-md-7 ftco-animate">
        <form action="customize_sub_cat_code.php" class="contact-form" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Sub Category Name" name="c_sub_cat_name" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Sub Category Description" name="c_sub_cat_description" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Sub Category price" name="c_sub_cat_price" required>
          </div>
          <div class="form-group">
            <label for="cat_photo">Upload Sub Category Image</label>
            <input type="file" class="form-control" name="c_sub_cat_photo" accept="image/*" required>
          </div>
          <div class="form-group">
            <select name="cat_id" class="form-control" required>
              <option value="">-- Select Sub Category --</option>
              <?php
              $q = "SELECT * FROM customize_cat_tbl"; 
              $rs = mysqli_query($cn, $q);
              while ($row = mysqli_fetch_assoc($rs)) {
                  echo "<option value='" . $row['c_cat_id'] . "'>" . $row['c_cat_name'] . "</option>";
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" value="Add Category" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php include("./php/footer.php")?>