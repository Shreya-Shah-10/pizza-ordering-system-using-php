<?php 
include("./php/admin_nav.php");
include("connect.php");
?>
<?php 
    $c_cat_id=$_GET["c_cat_id"];
    $q="SELECT * FROM customize_cat_tbl WHERE c_cat_id=$c_cat_id";
    $res=mysqli_query($cn,$q);
?>
<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100"
    style="background: url('./images/p1.png') no-repeat center center / cover;">
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1>customize Category Update Form</h1>
      </div>

      <div class="col-md-7 ftco-animate">
        <form action="customize_cat_edit_code.php" class="contact-form" method="post" enctype="multipart/form-data">
        <?php 
          while ($row=mysqli_fetch_row($res)) 
            {
            ?>
        <div class="form-group">
            <input type="hidden" class="form-control" value="<?php print $row[0];?>" placeholder="Category id" name="c_cat_id" >
        
            <input type="text" class="form-control" value="<?php print $row[1];?>" placeholder="Category Name" name="c_cat_name" >
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Category Description" name="c_cat_description" rows="4" >
            <?php print $row[2];?>
            </textarea>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" value="<?php print $row[4];?>" placeholder="Category price" name="c_cat_price" >
          </div>
          <div class="form-group">
            <label for="cat_photo">Upload Category Image</label>
            <img src="<?php print $row[3];?>" wide="100" height="100">
            <input type="file" class="form-control" name="c_cat_photo" accept="image/*" >
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

<?php include("./php/footer.php") ?>
