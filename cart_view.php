<?php
session_start();
include("php/r_header.php");
include("connect.php");

if (!isset($_SESSION['user_id'])) {
    echo "
    <div class='container my-5 text-center'>
        <h3 class='text-danger mb-4'>⚠ You must log in to view your cart.</h3>
        <a href='signin.php' class='btn btn-primary btn-lg'>🔑 Sign In</a>
    </div>";
    include("php/footer.php");
    exit();
}

$user_id = (int)$_SESSION['user_id'];
$grand_total = 0;
?>

<div class="container my-5">
    <div class="text-center mb-4">
        <h1>Your Cart</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Photo</th>
                    <th>Product / Pizza Details</th>
                    <th>Quantity</th>
                    <th>Price (₹)</th>
                    <th>Total (₹)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php
// ✅ Fetch all cart items for the user
$res = mysqli_query($cn, "SELECT * FROM cart_master_tbl WHERE user_id = $user_id ORDER BY cart_id DESC");

if ($res && mysqli_num_rows($res) > 0) {
    while ($cartRow = mysqli_fetch_assoc($res)) {
        $prod_id = (int)$cartRow['prod_id'];
        $prod_qty = (int)$cartRow['prod_qty'];
        $prod_price = (float)$cartRow['prod_price'];
        $total_price = (float)$cartRow['total_price'];
        $grand_total += $total_price;

        if ($prod_id > 0) {
            // ✅ Normal Product
            $prodRes = mysqli_query($cn, "SELECT * FROM product_master_tbl WHERE prod_id = $prod_id");
            if ($prodRes && $prodRow = mysqli_fetch_assoc($prodRes)) {
                ?>
                <tr>
                    <td><img src="<?php echo htmlspecialchars($prodRow['prod_photo']); ?>" width="100" height="100" style="object-fit:cover;border-radius:8px;"></td>
                    <td>
                        <strong><?php echo htmlspecialchars($prodRow['prod_name']); ?></strong><br>
                        <small><?php echo htmlspecialchars($prodRow['prod_description']); ?></small>
                    </td>
                    <td><?php echo $prod_qty; ?></td>
                    <td>₹<?php echo number_format($prod_price, 2); ?></td>
                    <td>₹<?php echo number_format($total_price, 2); ?></td>
                    <td>
                        <a href="cart_delete.php?cart_id=<?php echo $cartRow['cart_id']; ?>" class="btn btn-danger btn-sm">🗑 Delete</a>
                    </td>
                </tr>
                <?php
            }
              } else {
            // ✅ Customized Pizza (prod_id = 0)
            $cart_id = (int)$cartRow['cart_id'];

            // Fetch custom pizza name and details from pizza_order_tbl
            $pizzaRes = mysqli_query($cn, "
                SELECT * 
                FROM pizza_order_tbl 
                WHERE user_id = $user_id 
                ORDER BY order_id DESC 
                LIMIT 1
            ");

            $pizza_name = "Customized Pizza";
            $toppingsList = [];

            if ($pizzaRes && mysqli_num_rows($pizzaRes) > 0) {
                $pizzaRow = mysqli_fetch_assoc($pizzaRes);
                $order_id = (int)$pizzaRow['order_id'];
                $pizza_name = htmlspecialchars($pizzaRow['c_cat_name']);

                // ✅ Fetch toppings for that pizza from pizza_order_toppings_tbl
                $toppingsRes = mysqli_query($cn, "
                    SELECT topping_name, topping_price 
                    FROM pizza_order_toppings_tbl 
                    WHERE order_id = $order_id
                ");

                if ($toppingsRes && mysqli_num_rows($toppingsRes) > 0) {
                    while ($tRow = mysqli_fetch_assoc($toppingsRes)) {
                        $toppingsList[] = $tRow['topping_name'] . " (₹" . number_format($tRow['topping_price'], 2) . ")";
                    }
                }
            }
            ?>
            <tr>
                <td><img src="images/bg_1.png" width="100" height="100" style="object-fit:cover;border-radius:8px;"></td>
                <td>
                    <strong><?php echo $pizza_name; ?></strong><br>
                    <?php if (!empty($toppingsList)) { ?>
                        <small><strong>Toppings:</strong> <?php echo implode(", ", $toppingsList); ?></small>
                    <?php } ?>
                </td>
                <td><?php echo $prod_qty; ?></td>
                <td>₹<?php echo number_format($prod_price, 2); ?></td>
                <td>₹<?php echo number_format($total_price, 2); ?></td>
                <td>
                    <a href="cart_delete.php?cart_id=<?php echo $cartRow['cart_id']; ?>" class="btn btn-danger btn-sm">🗑 Delete</a>
                </td>
            </tr>
            <?php
        }

        
    }
} else {
    echo "<tr><td colspan='6' class='text-center text-muted'>🛒 Your cart is empty.</td></tr>";
}
?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-end"><strong>Grand Total</strong></td>
                    <td colspan="2"><strong>₹ <?php echo number_format($grand_total, 2); ?></strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <a href="reg_home.php" class="btn btn-success">⬅ Back to Shopping</a>
                    </td>
                    <td colspan="3" class="text-end">
                        <?php if ($grand_total > 0) { ?>
                            <a href="r_place_order.php?user_id=<?php echo $user_id; ?>" class="btn btn-primary">Place Order ➡</a>
                        <?php } ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<?php include("php/footer.php"); ?>
