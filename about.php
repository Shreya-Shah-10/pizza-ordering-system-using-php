<?php
session_start(); // Make sure session is started

if (isset($_SESSION['user_id'])) {
    // User is logged in, show registered user navbar
    include("./php/r_header.php");
} else {
    // User is not logged in, show guest navbar
    include("./php/nav.php");
}
?>

<!--about section-->
<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">About</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>


    
<!-- text section in about page -->
    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about/about1.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <b><h1 class="mb-4">Welcome to <span class="flaticon-pizza">Pizza</span> Delicious </h1></b>
		  <h3 style="color:#FFEA99;">how pizza Delicious came to be </h3>
        </div>
        <div>
  			<p>Born from the desire to revolutionize the pizza experience, we recognized a unique opportunity to infuse classic Italian flavors with the vibrant tastes of India. Our journey began with just 12 outlets, driven by a commitment to quality and a vision that transcended mere commercial interests.</p>
			<p>La Milano was founded by Mr. Rakesh Kumar and Mr. Akshay Kumar, the visionary owners behind the brand. At La Milano, we believe in more than just serving delicious pizza; we strive to create a community. We're not just making pizzas; we're creating a place where families, friends, and pizza lovers of all ages come together to share something truly special. Our vision extends beyond delicious food; we aspire to build a global community united by the love of pizza.</p>
		</div>
    	</div>
    </section>

	<section class="ftco-about d-md-flex">
		<div class="one-half ftco-animate">
			<div class="heading-section ftco-animate ">
				<b><h4 class="mb-4">- since 2021 </h4></b>
				<h3 style="color:#FFEA99;">Our journey doesn't stop here! </h3>
			</div>
			<div>
				<p>We envision a global presence, spreading the joy of pizza and creating delicious memories. Join us on this exciting journey, where your success as a franchisee aligns with our mission to deliver exceptional experiences to pizza lovers everywhere!</p>
				<p>At La Milano Pizzeria, we believe in collaboration over competition, fostering meaningful partnerships with our franchisees while maintaining our commitment to quality. With over 90 outlets, each location reflects our dedication to excellence and the trust we share with our franchise family.We envision a global presence, spreading the joy of pizza and creating delicious memories. Join us on this exciting journey, where your success as a franchisee aligns with our mission to deliver exceptional experiences to pizza lovers everywhere!</p>
			</div>
    	</div>
		<div class="one-half img" style="background-image: url(images/about/about2.jpg);"></div>
    </section>


    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Chef</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">In the heart of our kitchens, far from the ordinary, our master chefs craft every pizza with passion, precision, and a pinch of magic—bringing flavors to life that tell their own delicious stories.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/about/person_1.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tom Smith</a></h3>
      					<span class="position">Tandoori Pizza Specialist</span>
      					<div class="text">
	        				<p>Known for his bold fusion flavors, Rajiv blends Indian spices with cheesy perfection in every bite.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/about/person_2.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Mark Wilson</a></h3>
      					<span class="position">Wood-Fired Oven Maestro</span>
      					<div class="text">
	        				<p>Carlos specializes in authentic wood-fired techniques, giving pizzas a rich, smoky finish.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/about/person_3.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
      					<span class="position">Mediterranean Flavor Consultant</span>
      					<div class="text">
	        				<p>Omar infuses pizzas with olives, feta, and sun-dried tomatoes, creating unforgettable flavor profiles.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/about/person_4.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
      					<span class="position">Asian-Fusion Pizza Innovator</span>
      					<div class="text">
	        				<p>Ivan crafts modern twists with ingredients like teriyaki, wasabi, and soy-glazed toppings.</p>
	        			</div>
      				</div>
        		</div>
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