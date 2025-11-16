<?php include("./php/admin_nav.php");
    include("connect.php");
?>
<?php 
    $c_sub_cat_id=$_GET["c_sub_cat_id"];
    $q="SELECT * FROM customize_sub_cat_tbl WHERE c_sub_cat_id=$c_sub_cat_id";
    $res=mysqli_query($cn,$q);
?>
<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100"
    style="background: url('./images/p1.png') no-repeat center center / cover;">
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1>Customize Sub Category Update Form</h1>
      </div>

      <div class="col-md-7 ftco-animate">
        <form action="customize_sub_cat_edit_code.php" class="contact-form" method="post" enctype="multipart/form-data">
          <?php 
          while ($row=mysqli_fetch_row($res)) 
            {
            ?>
            
        <div class="form-group">
            <input type="hidden" class="form-control" value="<?php print $row[0];?>" placeholder="Category Name" name="c_sub_cat_id" >
            
            <input type="text" class="form-control" value="<?php print $row[1];?>" placeholder="Sub Category Name" name="c_sub_cat_name" >
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Sub Category Description" name="c_sub_cat_discription" rows="4"><?php echo $row[2]; ?></textarea>

          </div>
          <div class="form-group">
            <input type="text" class="form-control" value="<?php print $row[5];?>" placeholder="Sub Category Name" name="c_sub_cat_price" >
          </div>
          <div class="form-group">
              <label for="c_sub_cat_photo">Upload Sub Category Image</label><br>
              <img src="<?php echo $row[3]; ?>" width="100" height="100"><br><br>
              
              <!-- Hidden input to store old image path -->
              <input type="hidden" name="old_photo" value="<?php echo $row[3]; ?>">
              
              <input type="file" class="form-control" name="c_sub_cat_photo" accept="image/*">
          </div>
          <div class="form-group">
  <select name="c_cat_id" class="form-control">
    <option value="">-- Select Category --</option>
    <?php
    // Get current subcategory row’s category ID
    $current_cat_id = $row[4];

    // Fetch all categories
    $q_cat = "SELECT * FROM customize_cat_tbl"; 
    $rs_cat = mysqli_query($cn, $q_cat);
    while ($cat = mysqli_fetch_assoc($rs_cat)) {
        // If category matches current one, mark as selected
        $selected = ($cat['c_cat_id'] == $current_cat_id) ? 'selected' : '';
        echo "<option value='{$cat['c_cat_id']}' $selected>{$cat['c_cat_name']}</option>";
    }
    ?>
  </select>
</div>

          <?php
        }
        ?>
          <div class="form-group">
            <input type="submit" value="Add Sub Category" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php include("./php/footer.php")?>