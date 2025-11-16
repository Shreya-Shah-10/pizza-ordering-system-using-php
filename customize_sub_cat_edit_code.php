<?php
include("connect.php");

// Get form data
$c_sub_cat_id          = $_POST['c_sub_cat_id'];
$c_sub_cat_name        = $_POST['c_sub_cat_name'];
$c_sub_cat_discription = $_POST['c_sub_cat_discription'];
$c_sub_cat_price       = $_POST['c_sub_cat_price'];
$c_cat_id              = $_POST['c_cat_id'];

// Get current photo from DB
$q_old = "SELECT c_sub_cat_photo FROM customize_sub_cat_tbl WHERE c_sub_cat_id = $c_sub_cat_id";
$res_old = mysqli_query($cn, $q_old);
$row_old = mysqli_fetch_assoc($res_old);
$old_photo = $row_old['c_sub_cat_photo'];

// Check if new file is uploaded
if(isset($_FILES['c_sub_cat_photo']) && $_FILES['c_sub_cat_photo']['error'] == 0){
    $c_sub_cat_photo = "images/customize_sub_cat_photo/" . $_FILES['c_sub_cat_photo']['name'];
    move_uploaded_file($_FILES['c_sub_cat_photo']['tmp_name'], $c_sub_cat_photo);

    $q = "UPDATE customize_sub_cat_tbl
          SET c_sub_cat_name='$c_sub_cat_name',
              c_sub_cat_discription='$c_sub_cat_discription',
              c_sub_cat_photo='$c_sub_cat_photo',
              c_cat_id='$c_cat_id',
              c_sub_cat_price='$c_sub_cat_price'
          WHERE c_sub_cat_id=$c_sub_cat_id";
} else {
    // keep old photo if no new upload
    $q = "UPDATE customize_sub_cat_tbl
          SET c_sub_cat_name='$c_sub_cat_name',
              c_sub_cat_discription='$c_sub_cat_discription',
              c_sub_cat_photo='$old_photo',
              c_cat_id='$c_cat_id',
              c_sub_cat_price='$c_sub_cat_price'
          WHERE c_sub_cat_id=$c_sub_cat_id";
}

// Execute query
$i = mysqli_query($cn, $q);

if($i){
    header("Location: customize_sub_cat_view.php"); // redirect to your view page
    exit();
} else {
    echo "Update failed: " . mysqli_error($cn);
}
?>
