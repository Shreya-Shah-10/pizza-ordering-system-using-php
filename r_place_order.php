<?php
include("connect.php");
session_start();

$user_id = isset($_GET['user_id']) ? (int)$_GET['user_id'] : 0;
$order_date = date("Y-m-d H:i:s");

if ($user_id <= 0) {
    echo "<script>alert('Invalid user!'); window.location.href='reg_home.php';</script>";
    exit;
}

// ======================
// Step 1: Place normal cart items
// ======================
$cart_res = mysqli_query($cn, "SELECT * FROM cart_master_tbl WHERE user_id=$user_id");

if ($cart_res && mysqli_num_rows($cart_res) > 0) {
    while ($row = mysqli_fetch_assoc($cart_res)) {
        $prod_id = (int)$row['prod_id'];
        $prod_qty = (int)$row['prod_qty'];
        $prod_price = (float)$row['prod_price'];
        $total_price = (float)$row['total_price'];

        $insert_sql = "INSERT INTO order_master_tbl (prod_id, user_id, prod_qty, prod_price, total_price, order_date)
                       VALUES ($prod_id, $user_id, $prod_qty, $prod_price, $total_price, '$order_date')";
        mysqli_query($cn, $insert_sql);
    }

    // Clear cart after order
    mysqli_query($cn, "DELETE FROM cart_master_tbl WHERE user_id=$user_id");
}

// ======================
// Step 2: Place customized pizzas
// ======================
$custom_res = mysqli_query($cn, "SELECT * FROM pizza_order_tbl WHERE user_id=$user_id");

if ($custom_res && mysqli_num_rows($custom_res) > 0) {
    while ($pizza = mysqli_fetch_assoc($custom_res)) {
        $pizza_order_id = (int)$pizza['order_id'];
        $prod_qty = (int)$pizza['quantity'];
        $prod_price = (float)$pizza['base_price'];
        $total_price = (float)$pizza['total_price'];

        // ✅ Use NULL for prod_id to avoid FK constraint
        $insert_sql = "INSERT INTO order_master_tbl (prod_id, user_id, prod_qty, prod_price, total_price, order_date)
                       VALUES (NULL, $user_id, $prod_qty, $prod_price, $total_price, '$order_date')";

        if (mysqli_query($cn, $insert_sql)) {
            $last_order_id = mysqli_insert_id($cn);

            // Insert toppings for this pizza
            $topping_res = mysqli_query($cn, "SELECT * FROM pizza_order_toppings_tbl WHERE order_id=$pizza_order_id");
            if ($topping_res && mysqli_num_rows($topping_res) > 0) {
                while ($topping = mysqli_fetch_assoc($topping_res)) {
                    $topping_name = addslashes($topping['topping_name']);
                    $topping_price = (float)$topping['topping_price'];
                    $topping_id = (int)$topping['topping_id'];

                    mysqli_query($cn, "INSERT INTO pizza_order_toppings_tbl (order_id, topping_id, topping_name, topping_price)
                                       VALUES ($last_order_id, $topping_id, '$topping_name', $topping_price)");
                }
            }
        }
    }
    // Clear custom pizza tables after placing order
    mysqli_query($cn, "DELETE FROM pizza_order_toppings_tbl WHERE order_id IN (SELECT order_id FROM pizza_order_tbl WHERE user_id=$user_id)");
    mysqli_query($cn, "DELETE FROM pizza_order_tbl WHERE user_id=$user_id");
}

// ======================
// Redirect after order
// ======================
echo "<script>alert('✅ Thank you! Your order has been placed successfully.'); window.location.href='reg_home.php';</script>";
exit;
?>
