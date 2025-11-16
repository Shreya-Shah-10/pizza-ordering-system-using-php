<?php
include("connect.php");

// Check if prod_id is provided in the URL
if (isset($_GET['prod_id'])) {
    $prod_id = $_GET['prod_id'];

    // Step 1: Get the product image path to delete it
    $q_img = "SELECT prod_photo FROM product_master_tbl WHERE prod_id = $prod_id";
    $rs_img = mysqli_query($cn, $q_img);
    
    if ($row_img = mysqli_fetch_assoc($rs_img)) {
        $photo_path = $row_img['prod_photo'];
        if (file_exists($photo_path)) {
            unlink($photo_path); // Delete image from server
        }
    }

    // Step 2: Delete the product record
    $q_del = "DELETE FROM product_master_tbl WHERE prod_id = $prod_id";
    
    if (mysqli_query($cn, $q_del)) {
        echo "<script>alert('Product deleted successfully.'); window.location.href='product_view.php';</script>";
    } else {
        echo "<script>alert('Error deleting product: " . mysqli_error($cn) . "'); window.location.href='product_view.php';</script>";
    }

} else {
    echo "<script>alert('Invalid request.'); window.location.href='product_view.php';</script>";
}
?>
