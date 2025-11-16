<?php 
include("php/nav.php");
include("connect.php"); 
?>
<!--slider start-->
		<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">
		<div class="slider-item">
			<div class="overlay"></div>
			<div class="container">
			<div class="row slider-text align-items-center" data-scrollax-parent="true">
				<div class="col-md-6 col-sm-12 ftco-animate">
					<span class="subheading">Delicious</span>
				<h1 class="mb-4">Italian Cuizine</h1>
				<p class="mb-4 mb-md-5">Italian pizza is a culinary creation featuring a flattened bread base topped with tomato sauce, mozzarella cheese, and various ingredients, traditionally baked in a wood-fired oven</p>
					<p>	
						<a href="category_view1.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> 
						<a href="customize_cat.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Customize you Pizza</a>
					</p>
				</div>
				<div class="col-md-6 ftco-animate" >
					<img src="images/bg_1.png" class="img-fluid" alt="">
				</div>
			</div>
			</div>
		</div>

		<div class="slider-item">
			<div class="overlay"></div>
			<div class="container">
			<div class="row slider-text align-items-center" data-scrollax-parent="true">

				<div class="col-md-6 col-sm-12 order-md-last ftco-animate">
					<span class="subheading">Crunchy</span>
				<h1 class="mb-4">Mexican Wave</h1>
				<p class="mb-4 mb-md-5">A Mexican wave is a wave-like motion created by a crowd of people standing up and sitting down in sequence, one after the other, often seen at sporting events</p>
				<p>	
						<a href="category_view1.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> 
						<a href="customize_cat.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Customize you Pizza</a>
					</p>
				</div>
				<div class="col-md-6 ftco-animate">
					<img src="images/bg_2.png" class="img-fluid" alt="">
				</div>

			</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
			<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="col-md-7 col-sm-12 text-center ftco-animate">
					<span class="subheading">Welcome</span>
				<h1 class="mb-4">We cooked your desired Pizza Recipe</h1>
				<p class="mb-4 mb-md-5">Create a pizza with your choice of crust, sauce, cheese, and toppings for a personalized culinary experience.</p>
				<p>	
						<a href="category_view1.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> 
						<a href="customize_cat.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Customize you Pizza</a>
					</p>
				</div>

			</div>
			</div>
		</div>
		</section>
	<!--slider end -->
 <section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h3 class="contact_title" style="font-size: 49px;text-align:center;margin:50px;">🌟 New Arrivals 🌟</h3>
      </div>
      <div class="row">
         <?php 
            $q = "select * from product_master_tbl order by rand() limit 9";
            $res = mysqli_query($cn,$q);
            while($row = mysqli_fetch_row($res)) {
         ?>
         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box" style="height:400px;margin:20px;">
               <div class="img-box">
                  <a href="r_product_detail.php?prod_id=<?php print $row[0];?>">
                     <img style="width:100%;height:320px;" src="<?php print $row[3];?>" alt="" />
                  </a>
               </div>
               <div class="detail-box" style="text-align:center;margin:10px;">
                  <a href="r_product_detail.php?prod_id=<?php print $row[0];?>"><h5><?php print $row[1];?></h5></a>
                  <!-- ✅ Order Button -->
                  <a href="r_product_detail.php?prod_id=<?php print $row[0];?>" 
                     class="btn btn-primary mt-2 px-4 py-2">
                     Order Now
                  </a>
               </div>
            </div>
         </div>
         <?php 
            }
         ?>
      </div>
   </div>
</section>
<br><br>

<br><br>
<?php include("php/footer.php"); ?>