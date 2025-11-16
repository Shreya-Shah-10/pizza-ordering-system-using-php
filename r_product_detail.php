<?php
session_start();
include("php/nav.php");
include("connect.php");

// Get current product
$prod_id = isset($_GET['prod_id']) ? (int)$_GET['prod_id'] : 0;

// Fetch reviews for this product
$q = "SELECT r.review_message, r.review_photo, r.review_date, u.user_name 
      FROM review_master_tbl r 
      JOIN user_master_tbl u ON r.user_id = u.user_id 
      WHERE r.prod_id = $prod_id 
      ORDER BY r.review_date DESC";
$res_reviews = mysqli_query($cn, $q);

// Get current product details
$q_prod = "SELECT * FROM product_master_tbl WHERE prod_id = $prod_id LIMIT 1";
$res_prod = mysqli_query($cn, $q_prod);
$current_product = mysqli_fetch_assoc($res_prod);

$cat_id = (int)$current_product['cat_id'];
$sub_cat_id = (int)$current_product['sub_cat_id'];

// Fetch related products (same category/sub-category but not this product)
$q_related = "SELECT * FROM product_master_tbl 
              WHERE cat_id = $cat_id AND sub_cat_id = $sub_cat_id 
              AND prod_id != $prod_id 
              LIMIT 5";
$res_related = mysqli_query($cn, $q_related);
?>

<!--single product start-->
<div class="shop-detail-box-main" style="margin-top:50px;">
  <div class="container">
    <!-- Product Section -->
    <div class="row">
      <?php
      $q = "SELECT * FROM product_master_tbl WHERE prod_id = $prod_id";
      $res = mysqli_query($cn, $q);

      if ($row = mysqli_fetch_assoc($res)) { ?>
        <div class="col-xl-5 col-lg-5 col-md-6">
          <img src="<?php echo htmlspecialchars($row['prod_photo']); ?>" alt="product" style="width:100%;height:450px;">
        </div>

        <div class="col-xl-7 col-lg-7 col-md-6">
          <div class="single-product-details">
            <h2><?php echo htmlspecialchars($row['prod_name']); ?></h2>
            <h5>Short Description:</h5>
            <p><?php echo htmlspecialchars($row['prod_description']); ?></p>

            <!-- sizes / price -->
            <?php
            $sizes = [
              ['label'=>'Small','price'=>$row['price_small']],
              ['label'=>'Medium','price'=>$row['price_medium']],
              ['label'=>'Large','price'=>$row['price_large']],
            ];
            foreach ($sizes as $s) { ?>
              <form action="add_to_cart.php" method="post" class="p-3 mb-3">
                <input type="hidden" name="prod_id" value="<?php echo $prod_id; ?>">
                 <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; ?>">
                <input type="hidden" name="prod_price" value="<?php echo $s['price']; ?>">

                <div class="row align-items-center">
                  <div class="col-md-2"><h6><?php echo $s['label']; ?> Pizza</h6></div>
                  <div class="col-md-3"><h5>RS. ₹ <?php echo htmlspecialchars($s['price']); ?></h5></div>
                  <div class="col-md-3">
                    <input type="number" name="prod_qty" class="form-control" min="0" value="0">
                  </div>
                  <div class="col-md-3">
                    <?php if (isset($_SESSION['user_email'])) { ?>
          <button type="submit" class="btn btn-primary">Add</button>
        <?php } else { ?>
          <a href="signin.php" class="btn btn-primary">Login to Buy</a>
        <?php } ?>
                  </div>
                </div>
              </form>
            <?php } ?>
            
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<!--product single end-->

<!--review start-->
<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <!-- Reviews Section -->
      <div class="col-md-8 ftco-animate">
        <div class="pt-5 mt-5">
          <!-- Show all reviews -->
          <ul class="comment-list">
            <?php if (mysqli_num_rows($res_reviews) > 0) { ?>
              <?php while ($row = mysqli_fetch_assoc($res_reviews)) { ?>
                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo $row['review_photo'] ? $row['review_photo'] : 'images/bg_1.png'; ?>" 
                         alt="User Photo" style="width:75px;height:75px;border-radius:90%;">
                  </div>
                  <div class="comment-body">
                    <h3><?php echo htmlspecialchars($row['user_name']); ?></h3>
                    <div class="meta"><?php echo date("F j, Y", strtotime($row['review_date'])); ?></div>
                    <p><?php echo nl2br(htmlspecialchars($row['review_message'])); ?></p>
                  </div>
                </li>
              <?php } ?>
            <?php } else { ?>
              <p>No reviews yet. Be the first to review!</p>
            <?php } ?>
          </ul>

          <!-- Review Form -->
          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a Review</h3>
            <?php if (isset($_SESSION['user_email'])) { ?>
              <form action="review_insert_code.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="prod_id" value="<?php echo $prod_id; ?>">

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="review_message" id="message" cols="30" rows="5" class="form-control" required></textarea>
                </div>

                <!--<div class="form-group">
                  <label for="review_photo">Upload Photo (optional)</label>
                  <input type="file" name="review_photo" class="form-control">
                </div>-->

                <div class="form-group">
                  <input type="submit" value="Post Review" class="btn py-3 px-4 btn-primary">
                </div>
              </form>
            <?php } else { ?>
              <p>You must <a href="signin.php">sign in</a> to leave a review.</p>
            <?php } ?>
          </div>
        </div>
      </div>

      <!-- Related Products Sidebar -->
      <div class="col-md-4 sidebar ftco-animate">
        <!--<div class="sidebar-box">
          <form action="search.php" class="search-form">
            <div class="form-group">
              <div class="icon">
                <span class="icon-search"></span>
              </div>
              <input type="text" name="q" class="form-control" placeholder="Search...">
            </div>
          </form>
        </div>-->

        <div class="sidebar-box ftco-animate">
          <h3>Related Products</h3>
          <?php if (mysqli_num_rows($res_related) > 0) { ?>
            <?php while ($rel = mysqli_fetch_assoc($res_related)) { ?>
              <div class="block-21 mb-4 d-flex">
                <a href="r_product_detail.php?prod_id=<?php echo $rel['prod_id']; ?>" 
                   class="blog-img mr-4" 
                   style="background-image: url('<?php echo $rel['prod_photo']; ?>');"></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="r_product_detail.php?prod_id=<?php echo $rel['prod_id']; ?>">
                      <?php echo htmlspecialchars($rel['prod_name']); ?>
                    </a>
                  </h3>
                  <div class="meta">
                    <div><span class="icon-dollar-sign"></span> ₹<?php echo $rel['price_small']; ?></div>
                    <a href="r_product_detail.php?prod_id=<?php echo $rel['prod_id']; ?>" 
                       class="btn btn-sm btn-primary mt-2">View Product</a>
                  </div>
                </div>
              </div>
            <?php } ?>
          <?php } else { ?>
            <p>No related products found.</p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("php/footer.php"); ?>
