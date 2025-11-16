<?php
include("connect.php");

// Check if c_sub_cat_id is passed via URL
if (isset($_GET['c_sub_cat_id'])) {
    $c_sub_cat_id = $_GET['c_sub_cat_id'];

    // Optional: Get the image path and delete the photo file
    $q_img = "SELECT c_sub_cat_photo FROM customize_sub_cat_tbl WHERE c_sub_cat_id = $c_sub_cat_id";
    $rs_img = mysqli_query($cn, $q_img);
    if ($row_img = mysqli_fetch_assoc($rs_img)) {
        $file_path = $row_img['c_sub_cat_photo'];
        if (file_exists($file_path)) {
            unlink($file_path); // Delete image file
        }
    }

    // Now delete the customize sub category record
    $q_del = "DELETE FROM customize_sub_cat_tbl WHERE c_sub_cat_id = $c_sub_cat_id";
    if (mysqli_query($cn, $q_del)) {
        echo "<script>alert('Customize Sub Category Deleted Successfully'); window.location.href='customize_sub_cat_view.php';</script>";
    } else {
        echo "<script>alert('Error deleting customize sub category: " . mysqli_error($cn) . "'); window.location.href='customize_sub_cat_view.php';</script>";
    }
} else {
    echo "<script>alert('Invalid Request'); window.location.href='customize_sub_cat_view.php';</script>";
}
?>
