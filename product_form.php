<?php include("./php/admin_nav.php"); ?>
<?php include("connect.php"); ?>

<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100"
    style="background: url('./images/p1.png') no-repeat center center / cover;">
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1>Add Product</h1>
      </div>

      <div class="col-md-7 ftco-animate">
        <form action="product_code.php" class="contact-form" method="post" enctype="multipart/form-data">
          
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Product Name" name="prod_name" required>
          </div>
          
          <div class="form-group">
            <textarea class="form-control" placeholder="Product Description" name="prod_description" required></textarea>
          </div>
          
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Price Small" name="price_small" required>
          </div>
          
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Price Medium" name="price_medium" required>
          </div>
          
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Price Large" name="price_large" required>
          </div>
          
          <div class="form-group">
            <input type="file" class="form-control" name="prod_photo" required>
          </div>
          
          <div class="form-group">
            <select name="cat_id" class="form-control" required>
              <option value="">-- Select Category --</option>
              <?php
              $q = "SELECT * FROM category_tbl"; 
              $rs = mysqli_query($cn, $q);
              while ($row = mysqli_fetch_assoc($rs)) {
                  echo "<option value='" . $row['cat_id'] . "'>" . $row['cat_name'] . "</option>";
              }
              ?>
            </select>
          </div>
          
          <div class="form-group">
            <select name="sub_cat_id" class="form-control" required>
              <option value="">-- Select Subcategory --</option>
              <?php
              $q = "SELECT * FROM sub_category_tbl"; 
              $rs = mysqli_query($cn, $q);
              while ($row = mysqli_fetch_assoc($rs)) {
                  echo "<option value='" . $row['sub_cat_id'] . "'>" . $row['sub_cat_name'] . "</option>";
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <input type="submit" value="Add Product" class="btn btn-primary py-3 px-5">
          </div>
          
        </form>
      </div>
    </div>
  </div>
</section>

<?php include("./php/footer.php"); ?>
