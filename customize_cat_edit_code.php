<?php
include("connect.php");

// Get POST values
$c_cat_id = $_POST['c_cat_id'];
$c_cat_name = $_POST['c_cat_name'];
$c_cat_description = $_POST['c_cat_description'];
$c_cat_price = $_POST['c_cat_price'];

// Get current photo from DB
$q_old = "SELECT c_cat_photo FROM customize_cat_tbl WHERE c_cat_id = $c_cat_id";
$res_old = mysqli_query($cn, $q_old);
$row_old = mysqli_fetch_assoc($res_old);
$old_photo = $row_old['c_cat_photo'];

// Check if new file is uploaded
if(isset($_FILES['c_cat_photo']) && $_FILES['c_cat_photo']['error'] == 0){
    $c_cat_photo = "images/customize_cat_photo/" . $_FILES['c_cat_photo']['name'];
    move_uploaded_file($_FILES['c_cat_photo']['tmp_name'], $c_cat_photo);

    $q = "UPDATE customize_cat_tbl 
          SET c_cat_name='$c_cat_name', 
              c_cat_discription='$c_cat_description',
              c_cat_photo='$c_cat_photo',
              c_cat_price='$c_cat_price'
          WHERE c_cat_id=$c_cat_id";
} else {
    // keep old photo if no new upload
    $q = "UPDATE customize_cat_tbl 
          SET c_cat_name='$c_cat_name', 
              c_cat_discription='$c_cat_description',
              c_cat_photo='$old_photo',
              c_cat_price='$c_cat_price'
          WHERE c_cat_id=$c_cat_id";
}

$i = mysqli_query($cn, $q);

if($i){
    header("Location: customize_cat_view.php"); // Redirect to your customize cat view page
    exit();
} else {
    echo "Update failed: " . mysqli_error($cn);
}
?>
