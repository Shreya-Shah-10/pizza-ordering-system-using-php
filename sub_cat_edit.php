<?php include("./php/admin_nav.php");
    include("connect.php");
?>
<?php 
    $sub_cat_id=$_GET["sub_cat_id"];
    $q="SELECT * FROM sub_category_tbl WHERE sub_cat_id=$sub_cat_id";
    $res=mysqli_query($cn,$q);
?>
<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100"
    style="background: url('./images/p1.png') no-repeat center center / cover;">
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1>Sub Category Update Form</h1>
      </div>

      <div class="col-md-7 ftco-animate">
        <form action="sub_cat_edit_code.php" class="contact-form" method="post" enctype="multipart/form-data">
          <?php 
          while ($row=mysqli_fetch_row($res)) 
            {
            ?>
            
        <div class="form-group">
            <input type="hidden" class="form-control" value="<?php print $row[0];?>" placeholder="Sub Category id" name="sub_cat_id" >
            
            <input type="text" class="form-control" value="<?php print $row[1];?>" placeholder="Sub Category Name" name="sub_cat_name" >
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Sub Category Description" name="sub_cat_description" rows="4" >
                <?php print $row[2];?>
            </textarea>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" value="<?php print $row[3];?>" placeholder="Sub Category Price" name="sub_cat_price" >
          </div>
          <div class="form-group">
              <label for="sub_cat_photo">Upload Sub Category Image</label><br>
              <img src="<?php echo $row[4]; ?>" width="100" height="100"><br><br>
              
              <!-- Hidden input to store old image path -->
              <input type="hidden" name="old_photo" value="<?php echo $row[4]; ?>">
              
              <input type="file" class="form-control" name="sub_cat_photo" accept="image/*">
          </div>
          <div class="form-group">
  <select name="cat_id" class="form-control">
    <option value="">-- Select Category --</option>
    <?php
    // Get current subcategory row’s category ID
    $current_cat_id = $row[4];

    // Fetch all categories
    $q_cat = "SELECT * FROM category_tbl"; 
    $rs_cat = mysqli_query($cn, $q_cat);
    while ($cat = mysqli_fetch_assoc($rs_cat)) {
        // If category matches current one, mark as selected
        $selected = ($cat['cat_id'] == $current_cat_id) ? 'selected' : '';
        echo "<option value='{$cat['cat_id']}' $selected>{$cat['cat_name']}</option>";
    }
    ?>
  </select>
</div>
          <?php
        }
        ?>
          <div class="form-group">
            <input type="submit" value="Add Category" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php include("./php/footer.php")?>