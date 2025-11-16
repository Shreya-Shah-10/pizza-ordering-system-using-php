<?php
include("./php/admin_nav.php");
include("connect.php");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<style>
body {
    font-family: 'Montserrat', sans-serif;
    background-color: #222;
    color: #fff;
}
h1 {
    margin: 20px 0;
    text-align: center;
}

/* Transparent Dashboard Cards */
.block-18 {
    background: rgba(255,255,255,0.02); /* transparent */
    border-radius: 10px;
    padding: 10px;
    margin: 15px 0;
    transition: all 0.3s;
    text-align: center;
}
.block-18:hover {
    border: 2px solid #ff6f61; /* border on hover */
    transform: translateY(-5px);
}
.block-18 .icon {
    font-size: 3rem;
    color: #ff6f61;
    margin-bottom: 10px;
}
.block-18 .number {
    font-size: 2rem;
    font-weight: 700;
}
.block-18 span {
    color: #ccc;
    display: block;
    margin-top: 5px;
}
</style>

<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <?php
        // All tables in your database
        $stats = [
            ["table"=>"admin_tbl", "label"=>"Admin", "icon"=>"fa-user-shield"],
            ["table"=>"user_master_tbl", "label"=>"Users", "icon"=>"fa-users"],
            ["table"=>"category_tbl", "label"=>"Categories", "icon"=>"fa-pencil-alt"],
            ["table"=>"sub_category_tbl", "label"=>"Sub Categories", "icon"=>"fa-th-large"],
            ["table"=>"product_master_tbl", "label"=>"Products", "icon"=>"fa-box"],
            ["table"=>"customize_cat_tbl", "label"=>"Customize Categories", "icon"=>"fa-layer-group"],
            ["table"=>"customize_sub_cat_tbl", "label"=>"Customize Subcategories", "icon"=>"fa-layer-group"],
            ["table"=>"pizza_order_tbl", "label"=>"Pizza Orders", "icon"=>"fa-pizza-slice"],
            ["table"=>"pizza_order_toppings_tbl", "label"=>"Pizza Order Toppings", "icon"=>"fa-pepper-hot"],
            ["table"=>"cart_master_tbl", "label"=>"Cart Master", "icon"=>"fa-shopping-cart"],
            ["table"=>"comment_tbl", "label"=>"Comments", "icon"=>"fa-comment"],
            ["table"=>"order_master_tbl", "label"=>"Order Master", "icon"=>"fa-receipt"],
            ["table"=>"review_master_tbl", "label"=>"Reviews", "icon"=>"fa-star"],
            ["table"=>"contact_us", "label"=>"Contact Us", "icon"=>"fa-envelope"],
            
        ];

        foreach($stats as $stat){
    $q = "SELECT COUNT(*) FROM ".$stat['table'];
    $res = mysqli_query($cn, $q);

    if($res){ // Check if query succeeded
        $count = ($row = mysqli_fetch_row($res)) ? $row[0] : 0;
    } else {
        $count = 0; // if query failed, count as 0
        // Optional: you can log the error
        // echo "Error in table ".$stat['table'].": ".mysqli_error($cn)."<br>";
    }

    echo '
    <div class="col-md-3 col-sm-6">
        <div class="block-18">
            <div class="icon"><i class="fa '.$stat['icon'].'"></i></div>
            <strong class="number">'.$count.'</strong>
            <span>'.$stat['label'].'</span>
        </div>
    </div>
    ';
}

        ?>
    </div>
</div>

<?php include("./php/footer.php"); ?>
