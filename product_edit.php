<?php 
include("./php/admin_nav.php");
include("connect.php");

$prod_id = $_GET["prod_id"];
$q = "SELECT * FROM product_master_tbl WHERE prod_id=$prod_id";
$res = mysqli_query($cn, $q);
$row = mysqli_fetch_assoc($res);
?>

<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100"
    style="background: url('./images/p1.png') no-repeat center center / cover;">
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1>Product Edit Form</h1>
      </div>

      <div class="col-md-7 ftco-animate">
        <form action="product_edit_code.php" class="contact-form" method="post" enctype="multipart/form-data">
          <input type="hidden" name="prod_id" value="<?php echo $row['prod_id']; ?>">

          <div class="form-group">
            <input type="text" class="form-control" name="prod_name" placeholder="Product Name" value="<?php echo $row['prod_name']; ?>">
          </div>

          <div class="form-group">
            <textarea class="form-control" name="prod_description" placeholder="Product Description"><?php echo $row['prod_description']; ?></textarea>
          </div>

          <div class="form-group">
            <input type="number" class="form-control" name="price_small" placeholder="Small Price" value="<?php echo $row['price_small']; ?>">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" name="price_medium" placeholder="Medium Price" value="<?php echo $row['price_medium']; ?>">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" name="price_large" placeholder="Large Price" value="<?php echo $row['price_large']; ?>">
          </div>

          <div class="form-group">
            <label>Current Product Image</label><br>
            <img src="<?php echo $row['prod_photo']; ?>" width="100" height="100"><br><br>
            <input type="file" class="form-control" name="prod_photo">
          </div>

          <div class="form-group">
            <select name="cat_id" class="form-control">
              <option value="">-- Select Category --</option>
              <?php
              $q_cat = "SELECT * FROM category_tbl"; 
              $rs_cat = mysqli_query($cn, $q_cat);
              while ($cat = mysqli_fetch_assoc($rs_cat)) {
                  $selected = ($cat['cat_id'] == $row['cat_id']) ? "selected" : "";
                  echo "<option value='" . $cat['cat_id'] . "' $selected>" . $cat['cat_name'] . "</option>";
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <select name="sub_cat_id" class="form-control">
              <option value="">-- Select Subcategory --</option>
              <?php
              $q_sub = "SELECT * FROM sub_category_tbl"; 
              $rs_sub = mysqli_query($cn, $q_sub);
              while ($sub = mysqli_fetch_assoc($rs_sub)) {
                  $selected = ($sub['sub_cat_id'] == $row['sub_cat_id']) ? "selected" : "";
                  echo "<option value='" . $sub['sub_cat_id'] . "' $selected>" . $sub['sub_cat_name'] . "</option>";
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <input type="submit" value="Update Product" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include("./php/footer.php"); ?>
