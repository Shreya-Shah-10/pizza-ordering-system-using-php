<?php
include("connect.php");

$prod_id          = $_POST['prod_id'];
$prod_name        = $_POST['prod_name'];
$prod_description = $_POST['prod_description'];
$price_small      = $_POST['price_small'];
$price_medium     = $_POST['price_medium'];
$price_large      = $_POST['price_large'];
$cat_id           = $_POST['cat_id'];
$sub_cat_id       = $_POST['sub_cat_id'];

// Get current photo from DB
$q_old = "SELECT prod_photo FROM product_master_tbl WHERE prod_id = $prod_id";
$res_old = mysqli_query($cn, $q_old);
$row_old = mysqli_fetch_assoc($res_old);
$old_photo = $row_old['prod_photo'];

// Check if new file uploaded
if (isset($_FILES['prod_photo']) && $_FILES['prod_photo']['error'] == 0) {
    $prod_photo = "images/prod_photo/" . $_FILES['prod_photo']['name'];
    move_uploaded_file($_FILES['prod_photo']['tmp_name'], $prod_photo);

    $q = "UPDATE product_master_tbl 
          SET prod_name='$prod_name',
              prod_description='$prod_description',
              prod_photo='$prod_photo',
              price_small='$price_small',
              price_medium='$price_medium',
              price_large='$price_large',
              cat_id='$cat_id',
              sub_cat_id='$sub_cat_id'
          WHERE prod_id='$prod_id'";
} else {
    // keep old photo if no new one uploaded
    $q = "UPDATE product_master_tbl 
          SET prod_name='$prod_name',
              prod_description='$prod_description',
              prod_photo='$old_photo',
              price_small='$price_small',
              price_medium='$price_medium',
              price_large='$price_large',
              cat_id='$cat_id',
              sub_cat_id='$sub_cat_id'
          WHERE prod_id='$prod_id'";
}

$i = mysqli_query($cn, $q);

if ($i) {
    header("Location: product_view.php"); // redirect to product list after update
    exit();
} else {
    echo "Update failed: " . mysqli_error($cn);
}
?>
