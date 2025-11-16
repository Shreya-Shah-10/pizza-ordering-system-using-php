<?php
session_start();
include("./php/nav.php");
?>
<script>
  window.onload = function() {
    const popup = document.getElementById("videoPopup");
    const video = document.getElementById("popupVideo");

    popup.style.display = "block";
    video.play();
  }

  function closeVideo() {
    const video = document.getElementById("popupVideo");
    video.pause();
    document.getElementById("videoPopup").style.display = "none";
  }
</script>

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
						<a href="reg_home.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> 
						<a href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
						<a href="customize_cat.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Customize you Pizza</a>
					</p>
				</div>
				<div class="col-md-6 ftco-animate">
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
						<a href="reg_home.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> 
						<a href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
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
						<a href="reg_home.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> 
						<a href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
						<a href="customize_cat.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Customize you Pizza</a>
					</p>
				</div>

			</div>
			</div>
		</div>
		</section>
	<!--slider end -->
	<!--menu bar -->
	<style>
		.craving-section {
  padding: 40px 40px;
  font-family: 'Segoe UI', sans-serif;
}

.section-title {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 10px;
}

.divider span {
  display: inline-block;
  width: 50px;
  height: 2px;
  background-color: #00a99d;
  margin: 10px 0 30px;
}
.craving-items {
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-between;
  gap: 5px; /* Smaller gap */
  overflow-x: hidden; /* Hide scroll */
  padding: 0 10px;
}

.craving-items::-webkit-scrollbar {
  display: none;
}

.craving-item {
  width: 140px;
  text-align: center;
}

.craving-item img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.craving-item img:hover {
  transform: scale(1.05);
}

.craving-item p {
  margin-top: 10px;
  font-size: 14px;
  font-weight: 600;
  color:white;
}

	</style>
	<section class="craving-section">
  <div class="container text-center">
    <h2 class="section-title">What Are You Craving For?</h2>
    <div class="divider"><span></span></div>

    <div class="craving-items">
      <?php
      include("connect.php");
      $q = "SELECT * FROM category_tbl";
      $res1 = mysqli_query($cn, $q);

      while($row1 = mysqli_fetch_row($res1)) {
        // $row1[0] = cat_id
        // $row1[1] = cat_name
        // $row1[3] = cat_photo
      ?>
      
      <div class="craving-item">
        <!-- ✅ Clickable image link -->
        <a href="sub_cat_view1.php?cat_id=<?php echo $row1[0]; ?>">
          <img src="<?php echo $row1[3]; ?>" alt="<?php echo $row1[1]; ?>" width="100" height="100">
        </a>
        <p><?php echo $row1[1]; ?></p>
      </div>

      <?php } ?>
    </div>
  </div>
</section>



<!--about section start-->

		<section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>91+ 18001 2020 2020 </h3>
	    						<a href="contact.php" class="btn btn-white btn-outline-white test-align-center">Contact</a>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>60 Feet Road, K P Boarding campus, </h3>
								<p>Surendranagar-363035,</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open All day</h3>
	    						<p>special offers only on sat - sun</p>
	    					</div>
	    				</div>
						
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="https://x.com/pizzaDelicious"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/pizzaDelicious/"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/pizzaDelicious/?hl=en"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about/about1.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <b><h1 class="mb-4">Welcome to <span class="flaticon-pizza">Pizza</span> Delicious </h1></b>
		  <h3 style="color:#FFEA99;">how pizza Delicious came to be </h3>
        </div>
        <div>
  			<p>Born from the desire to revolutionize the pizza experience, we recognized a unique opportunity to infuse classic Italian flavors with the vibrant tastes of India. Our journey began with just 12 outlets, driven by a commitment to quality and a vision that transcended mere commercial interests.</p>
			<p>pizza Delicious was founded by Mr. Rakesh Kumar and Mr. Akshay Kumar, the visionary owners behind the brand. At La Milano, we believe in more than just serving delicious pizza; we strive to create a community. We're not just making pizzas; we're creating a place where families, friends, and pizza lovers of all ages come together to share something truly special. Our vision extends beyond delicious food; we aspire to build a global community united by the love of pizza.</p>
		</div>
    	</div>
    </section>
<!--about section end-->


<!--service section-->
		<section class="ftco-section ftco-services">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h2 class="mb-4">Our Services</h2>
				<p>Our pizza website offers seamless online ordering, a wide variety of customizable pizzas, and convenient delivery or carry-out options</p>
			</div>
			</div>
				<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
					<div class="icon d-flex justify-content-center align-items-center mb-5">
						<span class="flaticon-bicycle"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Fast Delivery</h3>
						<p>Get your hot and fresh pizza delivered to your doorstep in under 30 minutes</p>
					</div>
					</div>      
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
					<div class="icon d-flex justify-content-center align-items-center mb-5">
						<span class="flaticon-pizza-1"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Customizable Pizzas</h3>
						<p>Choose your crust, toppings, and sauces – make your pizza your way.</p>
					</div>
					</div>      
				</div>
				<div class="col-md-4 ftco-animate">
            		<div class="media d-block text-center block-6 services">
              		<div class="icon d-flex justify-content-center align-items-center mb-5">
                		<span class="flaticon-diet"></span>
					</div>
              		<div class="media-body">
						<h3 class="heading">Combo Offers & Deals</h3>
						<p>Save big with our exclusive pizza combos, family meals, and party packs.</p>
              		</div>
            		</div>    
          		</div>
	<!---------------------------------------extra ------------------------------------------------>
			
			</div>
			</div>
		</section>

		
<!---------------------------------------our best menu end---------------------------------------------->

		<section class="ftco-gallery">
			<div class="container-wrap">
				<div class="row no-gutters">
						<div class="col-md-3 ftco-animate">
							<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
								<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							</a>
						</div>
						<div class="col-md-3 ftco-animate">
							<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
								<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							</a>
						</div>
						<div class="col-md-3 ftco-animate">
							<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
								<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							</a>
						</div>
						<div class="col-md-3 ftco-animate">
							<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
								<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							</a>
						</div>
			</div>
			</div>
		</section>


			<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="row">
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
						<div class="text">
							<div class="icon"><span class="flaticon-pizza-1"></span></div>
							<strong class="number" data-number="100">0</strong>
							<span>Pizza Branches</span>
						</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
						<div class="text">
							<div class="icon"><span class="flaticon-medal"></span></div>
							<strong class="number" data-number="85">0</strong>
							<span>Number of Awards</span>
						</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
						<div class="text">
							<div class="icon"><span class="flaticon-laugh"></span></div>
							<strong class="number" data-number="10567">0</strong>
							<span>Happy Customer</span>
						</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
						<div class="text">
							<div class="icon"><span class="flaticon-chef"></span></div>
							<strong class="number" data-number="900">0</strong>
							<span>Staff</span>
						</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		</section>

	<?php include("./php/footer.php")?>