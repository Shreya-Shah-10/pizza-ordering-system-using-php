<?php
include("connect.php");

$sub_cat_id          = $_POST['sub_cat_id'];
$sub_cat_name        = $_POST['sub_cat_name'];
$sub_cat_description = $_POST['sub_cat_description'];
$sub_cat_price       = $_POST['sub_cat_price'];
$cat_id              = $_POST['cat_id'];

// Get current photo from DB
$q_old = "SELECT sub_cat_photo FROM sub_category_tbl WHERE sub_cat_id = $sub_cat_id";
$res_old = mysqli_query($cn, $q_old);
$row_old = mysqli_fetch_assoc($res_old);
$old_photo = $row_old['sub_cat_photo'];

// Check if new file is uploaded
if(isset($_FILES['sub_cat_photo']) && $_FILES['sub_cat_photo']['error'] == 0){
    $sub_cat_photo = "images/sub_cat_photo/" . $_FILES['sub_cat_photo']['name'];
    move_uploaded_file($_FILES['sub_cat_photo']['tmp_name'], $sub_cat_photo);

    $q = "UPDATE sub_category_tbl 
          SET sub_cat_name='$sub_cat_name', 
              sub_cat_description='$sub_cat_description',
              sub_cat_photo='$sub_cat_photo',
              cat_id='$cat_id',
              sub_cat_price='$sub_cat_price'
          WHERE sub_cat_id=$sub_cat_id";
} else {
    // keep old photo if no new upload
    $q = "UPDATE sub_category_tbl 
          SET sub_cat_name='$sub_cat_name', 
              sub_cat_description='$sub_cat_description',
              sub_cat_photo='$old_photo',
              cat_id='$cat_id',
              sub_cat_price='$sub_cat_price'
          WHERE sub_cat_id=$sub_cat_id";
}

$i = mysqli_query($cn, $q);

if($i){
    header("Location: sub_cat_view.php");
    exit();
} else {
    echo "Update failed: " . mysqli_error($cn);
}
?>
