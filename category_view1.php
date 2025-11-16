<!------------------------category ----------------------------------------------->

<?php include("./php/nav.php");
include("connect.php");?>
<section class="ftco-section" style="padding:4px 0;">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"><strong>Category </strong></h2>
            <p>“Good friends, great times, and even better pizza — happiness in every slice.”</p>
        </div>
    </div>
    <div class="row d-flex">
<?php
    $q = "SELECT * FROM category_tbl";
    $res1 = mysqli_query($cn, $q);

    while($row1 = mysqli_fetch_row($res1)) {
    ?>  
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="sub_cat_view1.php?cat_id=<?php echo $row1[0]; ?>" class="block-20" style="background-image: url('<?php echo $row1[3]; ?>'); 
              width:300px; height:300px"></a>
              <div class="text py-4 d-block">
              	<h3 class="heading mt-2"><a href="#"><?php echo $row1[1]; ?></a></h3>
                <p><?php echo $row1[2]; ?></p>
              </div>
            </div>
          </div>
    <?php
    }
    ?>
    </div>
  </div>
</section>
<?php include("./php/footer.php"); ?>
