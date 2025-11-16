<?php
include("connect.php");

// Check if order_id is provided in the URL
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    // Step 1: Delete the order record
    $q_del = "DELETE FROM pizza_order_tbl WHERE order_id = $order_id";
    
    if (mysqli_query($cn, $q_del)) {
        echo "<script>alert('Order deleted successfully.'); window.location.href='order_view.php';</script>";
    } else {
        echo "<script>alert('Error deleting order: " . mysqli_error($cn) . "'); window.location.href='order_view.php';</script>";
    }

} else {
    echo "<script>alert('Invalid request.'); window.location.href='order_view.php';</script>";
}
?>

<?php
include("connect.php");

// Check if order_id is provided in the URL
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    // Step 1: Delete the order record
    $q_del = "DELETE FROM order_master_tbl WHERE order_id = $order_id";
    
    if (mysqli_query($cn, $q_del)) {
        echo "<script>alert('Order deleted successfully.'); window.location.href='order_view.php';</script>";
    } else {
        echo "<script>alert('Error deleting order: " . mysqli_error($cn) . "'); window.location.href='order_view.php';</script>";
    }

} else {
    echo "<script>alert('Invalid request.'); window.location.href='order_view.php';</script>";
}
?>
