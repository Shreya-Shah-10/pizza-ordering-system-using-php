<?php
include("connect.php");

// Check if review_id is passed via URL
if (isset($_GET['review_id'])) {
    $review_id = $_GET['review_id'];

    // Optional: Get the image path and delete the review photo file
    $q_img = "SELECT review_photo FROM review_master_tbl WHERE review_id = $review_id";
    $rs_img = mysqli_query($cn, $q_img);
    if ($row_img = mysqli_fetch_assoc($rs_img)) {
        $file_path = $row_img['review_photo'];
        if (file_exists($file_path)) {
            unlink($file_path); // Delete image file
        }
    }

    // Now delete the review record
    $q_del = "DELETE FROM review_master_tbl WHERE review_id = $review_id";
    if (mysqli_query($cn, $q_del)) {
        echo "<script>alert('Review Deleted Successfully'); window.location.href='review_view.php';</script>";
    } else {
        echo "<script>alert('Error deleting review: " . mysqli_error($cn) . "'); window.location.href='review_view.php';</script>";
    }
} else {
    echo "<script>alert('Invalid Request'); window.location.href='review_view.php';</script>";
}
?>
