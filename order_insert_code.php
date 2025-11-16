<?php
include("connect.php");

// Get data from POST (assumed sent from a form)
$prod_id = $_POST['prod_id'];
$user_id = $_POST['user_id'];
$order_qty = $_POST['order_qty'];
$total_amt = $_POST['total_amt'];
$order_status = "Pending"; // or get from form if needed

// Automatically set current date for order_date
$order_date = date("Y-m-d");

// Create insert query
$q = "INSERT INTO order_master_tbl (prod_id, user_id, order_qty, total_amt, order_date, order_status)
      VALUES ('$prod_id', '$user_id', '$order_qty', '$total_amt', '$order_date', '$order_status')";

// Debug the query (optional)
echo $q;

// Execute the query
$i = mysqli_query($cn, $q);

if ($i == 1) {
    echo "Order inserted successfully.";
    header("Location: order-success.php"); // Redirect after success
    exit();
} else {
    echo "Failed to insert order.";
}
?>
