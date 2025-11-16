<!------------------------category ----------------------------------------------->

<?php 
include("./php/v_header.php");
include("connect.php");

if (isset($_GET['cat_id'])) {
    $cat_id = intval($_GET['cat_id']); // prevent SQL injection

    // ✅ Fetch DISTINCT subcategories (unique names)
    $q = "SELECT DISTINCT sub_cat_id, sub_cat_name, sub_cat_description, sub_cat_photo 
          FROM sub_category_tbl 
          WHERE cat_id = $cat_id";
    $res1 = mysqli_query($cn, $q);
}
?>
<section class="ftco-section" style="padding:4px 0;">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"><strong>Sub Categories</strong></h2>
            <p>“Tasty varieties for every mood — pick your perfect slice today.”</p>
        </div>
    </div>

    <div class="row d-flex">
<?php
    if ($res1 && mysqli_num_rows($res1) > 0) {
        while($row1 = mysqli_fetch_assoc($res1)) {
?>  
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="product_view1.php?sub_cat_id=<?php echo $row1['sub_cat_id']; ?>" 
                 class="block-20" 
                 style="background-image: url('<?php echo $row1['sub_cat_photo']; ?>');width:300px; height:300px"></a>
              <div class="text py-4 d-block">
              	<h3 class="heading mt-2">
                  <a href="#"><?php echo $row1['sub_cat_name']; ?></a>
                </h3>
                <p><?php echo $row1['sub_cat_description']; ?></p>
              </div>
            </div>
          </div>
<?php
        }
    }
?>
    </div>
  </div>
</section>
<?php include("./php/footer.php"); ?>
