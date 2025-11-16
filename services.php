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



    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Services</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p>Our pizza website offers seamless online ordering, a wide variety of customizable pizzas, and convenient delivery or carry-out options</p>
          </div>
        </div>
        <!--icons-->
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
                <span class="flaticon-diet"></span></div>
              <div class="media-body">
                <h3 class="heading">Combo Offers & Deals</h3>
                <p>Save big with our exclusive pizza combos, family meals, and party packs.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-chef"></span></div>
              <div class="media-body">
                <h3 class="heading">Expert Chefs</h3>
                <p>Our pizzas are crafted by skilled chefs using authentic techniques and the finest ingredients.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-medal"></span></div>
              <div class="media-body">
                <h3 class="heading">Award Winning Taste</h3>
                <p>Recognized for our delicious, consistent flavor by thousands of happy customers.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-chef"></span></div>
              <div class="media-body">
                <h3 class="heading">Expert Chefs</h3>
                <p>Our pizzas are crafted by skilled chefs using authentic techniques and the finest ingredients.</p>
              </div>
            </div>    
            </div>
        </div>
    	</div>
    </section>   
<!------------------------------------------------------------->
    <!-- Include jQuery (required) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Magnific Popup CSS & JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!--photo Gallery section-->
<section class="ftco-gallery ftco-section">
  <div class="container-fluid px-0">
    <div class="row no-gutters">
      <div class="col-md-12 text-center mb-5">
        <h2 class="mb-4">Pizza Moments Gallery</h2>
        <p>Feast your eyes on our sizzling pizzas, cozy ambience, and happy customers.</p>
      </div>

      <!-- Gallery Images with descriptions -->
      <div class="col-md-3">
        <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" 
           style="background-image: url(images/gallery-1.jpg);" 
           data-caption="Cheesy Margherita fresh from the oven!">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" 
           style="background-image: url(images/gallery-2.jpg);" 
           data-caption="Our cozy ambience makes every bite special.">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" 
           style="background-image: url(images/gallery-3.jpg);" 
           data-caption="Happy customers enjoying their favorite pizzas.">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" 
           style="background-image: url(images/gallery-4.jpg);" 
           data-caption="A close-up of our signature pizza with fresh toppings.">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
    $('.image-popup').magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      },
      image: {
        titleSrc: function(item) {
          return item.el.attr('data-caption'); // fetch the caption from data-caption
        }
      }
    });
  });
</script>



<?php include("./php/footer.php")?>