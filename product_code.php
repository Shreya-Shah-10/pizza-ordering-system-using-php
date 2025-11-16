<?php
include("connect.php");

// Get form values
$prod_name        = $_POST['prod_name'];
$prod_description = $_POST['prod_description'];
$price_small      = $_POST['price_small'];
$price_medium     = $_POST['price_medium'];
$price_large      = $_POST['price_large'];
$cat_id           = $_POST['cat_id'];
$sub_cat_id       = $_POST['sub_cat_id'];

// Handle file upload
if (isset($_FILES['prod_photo']) && $_FILES['prod_photo']['error'] == 0) {
    $prod_photo = "images/prod_photo/" . basename($_FILES['prod_photo']['name']);
    if (move_uploaded_file($_FILES['prod_photo']['tmp_name'], $prod_photo)) {

        // Insert into DB
        $q = "INSERT INTO product_master_tbl 
              (prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)
              VALUES 
              ('$prod_name', '$prod_description', '$prod_photo', '$price_small', '$price_medium', '$price_large', '$cat_id', '$sub_cat_id')";

        $i = mysqli_query($cn, $q);

        if ($i) {
            header("Location: product_view.php");
            exit();
        } else {
            echo "Insert failed: " . mysqli_error($cn);
        }

    } else {
        echo "File upload failed.";
    }
} else {
    echo "No file uploaded or upload error.";
}
?>
