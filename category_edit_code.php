<?php
include("connect.php");

$cat_id = $_POST['cat_id'];
$cat_name = $_POST['cat_name'];
$cat_description = $_POST['cat_description'];

// Get current photo from DB
$q_old = "SELECT cat_photo FROM category_tbl WHERE cat_id = $cat_id";
$res_old = mysqli_query($cn, $q_old);
$row_old = mysqli_fetch_assoc($res_old);
$old_photo = $row_old['cat_photo'];

// Check if new file is uploaded
if(isset($_FILES['cat_photo']) && $_FILES['cat_photo']['error'] == 0){
    $cat_photo = "images/cat_photo/" . $_FILES['cat_photo']['name'];
    move_uploaded_file($_FILES['cat_photo']['tmp_name'], $cat_photo);

    $q = "UPDATE category_tbl 
          SET cat_name='$cat_name', 
              cat_description='$cat_description',
              cat_photo='$cat_photo' 
          WHERE cat_id=$cat_id";
} else {
    // keep old photo if no new upload
    $q = "UPDATE category_tbl 
          SET cat_name='$cat_name', 
              cat_description='$cat_description',
              cat_photo='$old_photo'
          WHERE cat_id=$cat_id";
}

$i = mysqli_query($cn, $q);

if($i){
    //echo "Data updated successfully!";
    header("Location: category_view.php");
    exit();
} else {
    echo "Update failed: " . mysqli_error($cn);
}
?>
