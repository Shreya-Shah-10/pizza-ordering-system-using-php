<?php 
include("./php/v_header.php");
include("connect.php");

// Initialize variables
$page_title = "";
$res2 = null;

// Case 1: Search
if (isset($_GET['q'])) {
    $search = mysqli_real_escape_string($cn, $_GET['q']);

    $q2 = "SELECT * FROM product_master_tbl 
           WHERE prod_name LIKE '%$search%' 
           OR prod_description LIKE '%$search%'";
    $res2 = mysqli_query($cn, $q2);

    $page_title = "Search Results for \"$search\"";

// Case 2: Subcategory
} elseif (isset($_GET['sub_cat_id'])) {
    $sub_cat_id = intval($_GET['sub_cat_id']); // prevent SQL injection

    // Fetch sub category details
    $q1 = "SELECT sub_cat_name, sub_cat_description FROM sub_category_tbl WHERE sub_cat_id = $sub_cat_id";
    $res1 = mysqli_query($cn, $q1);
    $sub_cat = mysqli_fetch_assoc($res1);

    // Fetch products under this subcategory
    $q2 = "SELECT * FROM product_master_tbl WHERE sub_cat_id = $sub_cat_id";
    $res2 = mysqli_query($cn, $q2);

    $page_title = $sub_cat['sub_cat_name']." Products";
} else {
    $page_title = "All Products";
    $q2 = "SELECT * FROM product_master_tbl";
    $res2 = mysqli_query($cn, $q2);
}
?>
<section class="ftco-section" style="padding:4px 0;">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"><strong>Products</strong></h2>
            
              <p>“Discover the perfect slice of pizza crafted to match every mood and craving.”</p>
            
        </div>
    </div>

    <div class="row d-flex">
<?php
        if ($res2 && mysqli_num_rows($res2) > 0) {
            while($row2 = mysqli_fetch_assoc($res2)) {
    ?>  
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="r_product_detail.php?prod_id=<?php echo $row2['prod_id']; ?>" 
                 class="block-20" 
                 style="background-image: url('<?php echo $row2['prod_photo']; ?>'); width:250px; height:250px">
              </a>
              <div class="text py-4 d-block">
              	<h3 class="heading mt-2">
                  <a href="r_product_detail.php?prod_id=<?php echo $row2['prod_id']; ?>">
                    <?php echo htmlspecialchars($row2['prod_name']); ?>
                  </a>
                </h3>
                <p><?php echo htmlspecialchars($row2['prod_description']); ?></p>
              </div>
            </div>
          </div>
    <?php
    }
} else {
    echo "<p>No products found.</p>";
}
?>
    </div>
  </div>
</section>
<?php include("./php/footer.php"); ?>
