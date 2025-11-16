<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ✅ Check login
    if (!isset($_SESSION['user_id'])) {
        echo "<script>alert('You must log in first!'); window.location.href='signin.php';</script>";
        exit();
    }

    $prod_id    = (int)$_POST['prod_id'];
    $user_id    = (int)$_SESSION['user_id'];  // ✅ use user_id, not email
    $prod_qty   = (int)$_POST['prod_qty'];
    $prod_price = (float)$_POST['prod_price'];

    $total_price = $prod_qty * $prod_price;

    // ✅ Check if product already exists in the cart
    $q1 = "SELECT prod_qty FROM cart_master_tbl WHERE prod_id=$prod_id AND user_id=$user_id";
    $res1 = mysqli_query($cn, $q1);

    if ($res1 && mysqli_num_rows($res1) > 0) {
        $row = mysqli_fetch_assoc($res1);
        $old_prod_qty   = (int)$row['prod_qty'];
        $new_prod_qty   = $old_prod_qty + $prod_qty;
        $new_total_price = $new_prod_qty * $prod_price;

        $q = "UPDATE cart_master_tbl 
              SET prod_qty=$new_prod_qty, total_price=$new_total_price 
              WHERE user_id=$user_id AND prod_id=$prod_id";
    } else {
        $q = "INSERT INTO cart_master_tbl(prod_id, user_id, prod_qty, prod_price, total_price) 
              VALUES ($prod_id, $user_id, $prod_qty, $prod_price, $total_price)";
    }

    $i = mysqli_query($cn, $q);

    if ($i) {
        echo "<script>window.location.href='cart_view.php?user_id=$user_id';</script>";
        exit();
    } else {
        echo "SQL Error: " . mysqli_error($cn); // ✅ Debug error
        echo "<script>alert('Failed to add to cart!'); window.history.back();</script>";
    }
}
?>
