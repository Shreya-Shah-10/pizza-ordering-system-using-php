<?php
include("connect.php");

// Check if sub_cat_id is passed via URL
if (isset($_GET['sub_cat_id'])) {
    $sub_cat_id = $_GET['sub_cat_id'];

    // Step 1: Delete associated photo file if it exists
    $q_img = "SELECT sub_cat_photo FROM sub_category_tbl WHERE sub_cat_id = $sub_cat_id";
    $rs_img = mysqli_query($cn, $q_img);
    if ($row_img = mysqli_fetch_assoc($rs_img)) {
        $file_path = $row_img['sub_cat_photo'];
        if (file_exists($file_path)) {
            unlink($file_path); // Delete the image file
        }
    }

    // Step 2: Delete the sub-category from the table
    $q_del = "DELETE FROM sub_category_tbl WHERE sub_cat_id = $sub_cat_id";
    if (mysqli_query($cn, $q_del)) {
        echo "<script>alert('Sub Category deleted successfully'); window.location.href='sub_cat_view.php';</script>";
    } else {
        echo "<script>alert('Error deleting sub category: " . mysqli_error($cn) . "'); window.location.href='sub_cat_view.php';</script>";
    }

} else {
    echo "<script>alert('Invalid request!'); window.location.href='sub_cat_view.php';</script>";
}
?>
