<?php
include("connect.php");

// Get POST values
$c_cat_name = $_POST['c_cat_name'];
$c_cat_description = $_POST['c_cat_description'];
$c_cat_price = $_POST['c_cat_price'];

// Handle image upload
$c_cat_photo = "images/customize_cat_photo/" . $_FILES['c_cat_photo']['name'];

if(move_uploaded_file($_FILES['c_cat_photo']['tmp_name'], $c_cat_photo)) {
    // Prepare SQL insert
    $q = "INSERT INTO customize_cat_tbl(c_cat_name, c_cat_discription, c_cat_photo, c_cat_price) 
          VALUES ('$c_cat_name', '$c_cat_description', '$c_cat_photo', '$c_cat_price')";
    
    $i = mysqli_query($cn, $q);

    if($i) {
        echo "Data inserted successfully!";
        header("Location: customize_cat_view.php"); // redirect to your view page
        exit();
    } else {
        echo "Error inserting data: " . mysqli_error($cn);
    }
} else {
    echo "Error uploading image.";
}
?>
