<?php
include("connect.php");

// Get form data
$c_sub_cat_name = $_POST['c_sub_cat_name'];
$c_sub_cat_discription = $_POST['c_sub_cat_discription'];
$c_sub_cat_price = $_POST['c_sub_cat_price'];
$c_cat_id = $_POST['c_cat_id'];

// Handle file upload
$c_sub_cat_photo = "images/customize_sub_cat_photo/" . $_FILES['c_sub_cat_photo']['name'];
move_uploaded_file($_FILES['c_sub_cat_photo']['tmp_name'], $c_sub_cat_photo);

// Insert query
$q = "INSERT INTO customize_sub_cat_tbl(c_sub_cat_name, c_sub_cat_discription, c_sub_cat_photo, c_cat_id, c_sub_cat_price) 
      VALUES ('$c_sub_cat_name', '$c_sub_cat_discription', '$c_sub_cat_photo', '$c_cat_id', '$c_sub_cat_price')";

// Execute query
$i = mysqli_query($cn, $q);

if($i) {
    echo "Data inserted successfully!";
    header("Location: customize_sub_cat_view.php"); // redirect to your view page
    exit();
} else {
    echo "Insert failed: " . mysqli_error($cn);
}
?>
