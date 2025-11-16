<?php include("./php/nav.php"); ?>
<?php include("connect.php"); ?>

<?php
// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Visitor: show full menu page

    // ------------------- Our Best Menu Section -------------------
    ?><section class="ftco-section" style="padding-top: 0.9em; margin-top: 0;">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Best Menu</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
            </div>
        </div>
    </div>

    <?php
    // ✅ Show all 9 categories (or all if more exist)
    $q = "SELECT * FROM category_tbl LIMIT 6";
    $res = mysqli_query($cn, $q);
    ?>
    <div class="container-wrap">
        <div class="row no-gutters d-flex">
            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="category_view1.php" class="img <?php echo ($row['cat_id'] > 3) ? 'order-lg-last' : ''; ?>" 
                           style="background-image: url('<?php echo $row['cat_photo']; ?>');"></a>
                        <div class="text p-4">
                            <h3><?php echo $row['cat_name']; ?></h3>
                            <p><?php echo $row['cat_description']; ?></p>
                            <a href="category_view1.php" class="ml-2 btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


    <?php
    // ------------------- Menu Pricing Section -------------------
    /*$q = "SELECT * FROM category_tbl";
    $res = mysqli_query($cn, $q);
    $left_column = $right_column = [];
    $index = 0;
    while ($row = mysqli_fetch_assoc($res)) {
        if ($index % 2 == 0) $left_column[] = $row;
        else $right_column[] = $row;
        $index++;
    }*/
    ?>
<section class="ftco-section" style="padding:3em 0;">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4" style="font-weight:700;">Our Best Seller</h2>
                <p style="font-size:16px; color:#555;">Discover our chef’s special pizzas, loved by our customers!</p>
            </div>
        </div>
        <div class="row">
            <?php
            $q = "SELECT * FROM product_master_tbl ORDER BY rand(price_small) LIMIT 6"; // featured pizzas
            $res = mysqli_query($cn, $q);
            while($pizza = mysqli_fetch_assoc($res)) { ?>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff shadow-sm" 
                         style="border-radius:15px; overflow:hidden;
                                transition:transform 0.3s; display:flex; flex-direction:column; height:100%; width=100%;">
                        <!-- Pizza Image with Top Seller Badge -->
                        <div style="position:relative; flex:2;">
                            <div class="img mb-0" 
                                 style="background-image:url('<?php echo $pizza['prod_photo']; ?>'); 
                                        height: 300px; width:300px; background-size:cover; 
                                        background-position:center; border-radius:0;">
                            </div>
                            <?php if($pizza['price_medium'] > 500) { ?>
                                <span style="position:absolute; top:10px; left:10px; 
                                             background:#e74c3c; color:#fff; padding:5px 10px; 
                                             font-weight:600; border-radius:5px;">Top Seller</span>
                            <?php } ?>
                        </div>

                        <!-- Pizza Info -->
                        <div class="info text-center p-3" style="flex:1; display:flex; flex-direction:column; justify-content:center;">
                            <h3 style="margin-bottom:10px;"><a href="#"><?php echo $pizza['prod_name']; ?></a></h3>
                            <span class="position" style="font-weight:600; color:#e74c3c; margin-bottom:10px;"><h4>₹<?php echo $pizza['price_medium']; ?></h4></span>
                            <a href="r_product_detail.php?prod_id=<?php echo $pizza['prod_id']; ?>" class="btn btn-primary mt-auto">View Product</a>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="ftco-section" style="padding:3em 0; background:rgba(255,255,255,0.01);">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center">
                <h2 class="mb-4" style="font-weight:700;">What Our Customers Say</h2>
            </div>
        </div>

        <?php
        // Fetch 6 random users
        $q = "SELECT user_name, user_photo FROM user_master_tbl ORDER BY RAND() LIMIT 6";
        $res = mysqli_query($cn, $q);

        // Predefined testimonial messages
        $testimonials_text = [
            "The pizza was amazing, fresh and hot!",
            "Fast delivery and delicious taste.",
            "Best pizza in town, highly recommend!",
            "Superb flavors and great service. thanks",
            "I loved the cheesy pizza goodness!",
            "My favorite pizza place is your website!",
            "Amazing taste and quick delivery."
        ];

        $users = [];
        while($row = mysqli_fetch_assoc($res)) {
            $row['testimonial'] = $testimonials_text[array_rand($testimonials_text)];
            $users[] = $row;
        }

        // Split users into chunks of 3 for the carousel slides
        $chunks = array_chunk($users, 3);
        ?>
        <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2500">
            <div class="carousel-inner">
                <?php foreach($chunks as $index => $group) { ?>
                <div class="carousel-item <?php echo ($index == 0) ? 'active' : ''; ?>">
                    <div class="row justify-content-center">
                        <?php foreach($group as $user) { ?>
                        <div class="col-md-4 d-flex">
                            <div class="card shadow-sm" 
                                 style="width:100%; height:250px; border:1px solid #ffd700; border-radius:10px; margin:10px; 
                                        background:rgba(255,255,255,0.03); display:flex; flex-direction:column; align-items:center; 
                                        text-align:center; padding:20px; justify-content:center; transition: transform 0.5s ease;">

                                <!-- User Image -->
                                <img src="<?php echo $user['user_photo']; ?>" alt="<?php echo $user['user_name']; ?>" 
                                     style="width:80px; height:80px; border-radius:50%; object-fit:cover; margin-bottom:15px; border:2px solid #ffd700;">

                                <!-- Testimonial Text -->
                                <p style="font-style:italic; color:#555; flex-grow:1;">"<?php echo $user['testimonial']; ?>"</p>

                                <!-- User Name -->
                                <h6 style="margin-top:10px; font-weight:600;">- <?php echo $user['user_name']; ?></h6>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS (make sure you include this) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Hover effect for pizza cards
    document.querySelectorAll('.staff').forEach(card => {
        card.addEventListener('mouseenter', () => card.style.transform = 'scale(1.03)');
        card.addEventListener('mouseleave', () => card.style.transform = 'scale(1)');
    });
</script>


    
<?php
} else {
    // Logged-in user: show only category section
    ?>

    <section class="ftco-section" style="padding:4px 0;">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4"><strong>Category</strong></h2>
                    <p>“Good friends, great times, and even better pizza — happiness in every slice.”</p>
                </div>
            </div>
            <div class="row d-flex">
                <?php
                $q = "SELECT * FROM category_tbl";
                $res1 = mysqli_query($cn, $q);

                while ($row1 = mysqli_fetch_row($res1)) { ?>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="sub_cat_view1.php?cat_id=<?php echo $row1[0]; ?>" 
                               class="block-20" style="background-image: url('<?php echo $row1[3]; ?>'); width:300px; height:300px"></a>
                            <div class="text py-4 d-block">
                                <h3 class="heading mt-2"><a href="#"><?php echo $row1[1]; ?></a></h3>
                                <p><?php echo $row1[2]; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php } ?>

<?php include("php/footer.php"); ?>
