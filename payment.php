<?php
session_start();
include("php/r_header.php");
include("connect.php");

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login to place an order!'); window.location.href='signin.php';</script>";
    exit();
}

$user_id = (int) $_SESSION['user_id'];

// Fetch cart items with product details (join to avoid missing fields)
$q = "SELECT c.*, p.prod_name, p.prod_photo
      FROM cart_master_tbl c
      LEFT JOIN product_master_tbl p ON c.prod_id = p.prod_id
      WHERE c.user_id = $user_id";
$res = mysqli_query($cn, $q);

$grand_total = 0;
$cart_items = [];

if ($res && mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        // Ensure numeric values are cast
        $row['prod_qty'] = (int)$row['prod_qty'];
        $row['prod_price'] = (float)$row['prod_price'];
        $row['total_price'] = (float)$row['total_price'];

        $grand_total += $row['total_price'];
        $cart_items[] = $row;
    }
} else {
    echo "<div class='container my-4'><h3 class='text-muted'>🛒 Your cart is empty. <a href='category_view1.php'>Shop Now</a></h3></div>";
    include("php/footer.php");
    exit();
}

// Handle order placement
if (isset($_POST['place_order'])) {
    $payment_mode = "Cash on Delivery";

    $q_order = "INSERT INTO order_master_tbl (user_id, grand_total, payment_mode)
                VALUES ($user_id, $grand_total, '$payment_mode')";
    $res_order = mysqli_query($cn, $q_order);

    if ($res_order) {
        // Optionally: get order id with mysqli_insert_id($cn) and save order items to order_details table
        mysqli_query($cn, "DELETE FROM cart_master_tbl WHERE user_id = $user_id");

        echo "<script>alert('✅ Order placed successfully!'); window.location.href='reg_home.php';</script>";
        exit();
    } else {
        echo "<script>alert('❌ Failed to place order. Try again!');</script>";
    }
}
?>

<div class="container my-5">
    <h2 class="text-center mb-4">Confirm Your Order</h2>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Product</th>
                <th>Product Name</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Price (₹)</th>
                <th>Total (₹)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cart_items as $item) { ?>
            <tr>
                <td>
                    <?php if (!empty($item['prod_photo'])) { ?>
                        <img src="<?php echo htmlspecialchars($item['prod_photo']); ?>" alt="img" style="width:80px;height:80px;object-fit:cover;margin-right:8px;">
                    <?php } ?>
                    
                </td>
                <td><?php echo htmlspecialchars($item['prod_name'] ?? 'Product'); ?></td>
                <td><?php echo (int)$item['prod_id']; ?></td>
                <td><?php echo (int)$item['prod_qty']; ?></td>
                <td>₹ <?php echo number_format($item['prod_price'], 2); ?></td>
                <td>₹ <?php echo number_format($item['total_price'], 2); ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <!-- There are 5 columns in the table header,
                 so set colspan=4 and put the grand total in the 5th cell -->
            <tr>
                <td colspan="4" class="text-end"><strong>Grand Total</strong></td>
                <td><strong>₹ <?php echo number_format($grand_total, 2); ?></strong></td>
            </tr>
        </tfoot>
    </table>

    <form method="post">
        <div class="text-center">
            <button type="submit" name="place_order" class="btn btn-primary btn-lg">
                ✅ Place Order (Cash on Delivery)
            </button>
        </div>
    </form>
</div>

<?php include("php/footer.php"); ?>
