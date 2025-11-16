<?php
session_start();
include("connect.php");

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login to manage your cart!'); window.location.href='signin.php';</script>";
    exit();
}

// Validate cart_id
if (isset($_GET['cart_id'])) {
    $cart_id = (int)$_GET['cart_id'];

    $q = "DELETE FROM cart_master_tbl WHERE cart_id = $cart_id";
    $res = mysqli_query($cn, $q);

    if ($res) {
        echo "<script>alert('Item removed from cart!'); window.location.href='cart_view.php';</script>";
    } else {
        echo "<script>alert('Failed to remove item.'); window.location.href='cart_view.php';</script>";
    }
} else {
    echo "<script>window.location.href='cart_view.php';</script>";
}
?>
<?php
session_start();
unset($_SESSION['pizza_base']); // clear customized pizza
header("Location: cart_view.php");
exit();
?>
