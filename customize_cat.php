<?php 
session_start();
include("./php/r_header.php");
include("connect.php");
?>

<section class="ftco-section" style="padding:4px 0;">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"><strong>Choose Your Pizza Size</strong></h2>
            <p>“Good friends, great times, and even better pizza — happiness in every slice.”</p>
        </div>
    </div>
    <div class="row d-flex">
    <?php
    $q = "SELECT * FROM customize_cat_tbl";
    $res1 = mysqli_query($cn, $q);
    while($row = mysqli_fetch_assoc($res1)) { 
        // Build link to customize_sub_cat.php and pass all pizza details via GET
        $link = "customize_sub_cat.php?c_cat_id={$row['c_cat_id']}&c_cat_name=".urlencode($row['c_cat_name'])."&c_cat_price={$row['c_cat_price']}&c_cat_photo=".urlencode($row['c_cat_photo'])."&c_cat_description=".urlencode($row['c_cat_discription']);
    ?>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="<?php echo $link; ?>" class="block-20" style="background-image: url('<?php echo $row['c_cat_photo']; ?>'); width:300px; height:300px;"></a>
          <div class="text py-4 d-block">
            <h3 class="heading mt-2">
              <a href="<?php echo $link; ?>"><?php echo $row['c_cat_name']; ?></a>
            </h3>
            <h2 class="heading mt-2">
              Price: ₹<?php echo $row['c_cat_price']; ?>
            </h2>
            <p><?php echo $row['c_cat_discription']; ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</section>

<?php include("./php/footer.php"); ?>
