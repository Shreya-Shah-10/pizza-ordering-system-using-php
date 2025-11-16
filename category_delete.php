<?php
include("connect.php");

// Check if cat_id is passed via URL
if (isset($_GET['cat_id'])) {
    $cat_id = $_GET['cat_id'];

    // Optional: Get the image path and delete the photo file
    $q_img = "SELECT cat_photo FROM category_tbl WHERE cat_id = $cat_id";
    $rs_img = mysqli_query($cn, $q_img);
    if ($row_img = mysqli_fetch_assoc($rs_img)) {
        $file_path = $row_img['cat_photo'];
        if (file_exists($file_path)) {
            unlink($file_path); // Delete image file
        }
    }

    // Now delete the category record
    $q_del = "DELETE FROM category_tbl WHERE cat_id = $cat_id";
    if (mysqli_query($cn, $q_del)) {
        echo "<script>alert('Category Deleted Successfully'); window.location.href='category_view.php';</script>";
    } else {
        echo "<script>alert('Error deleting category: " . mysqli_error($cn) . "'); window.location.href='category_view.php';</script>";
    }
} else {
    echo "<script>alert('Invalid Request'); window.location.href='category_view.php';</script>";
}
?>
