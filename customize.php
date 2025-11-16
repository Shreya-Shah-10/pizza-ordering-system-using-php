<?php
session_start();
include("connect.php");

// Enable MySQLi error reporting (helpful during development)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// ✅ Ensure user logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit;
}

// ✅ Ensure pizza base is selected
if (!isset($_SESSION['pizza_base'])) {
    header("Location: reg_home.php");
    exit;
}

$pizza = $_SESSION['pizza_base'];
$toppings = $pizza['toppings'] ?? [];
$basePrice = floatval($pizza['c_cat_price']);

// ✅ Calculate toppings total
$toppingsTotal = 0;
foreach ($toppings as $t) {
    $toppingsTotal += floatval($t['price']);
}

$totalPrice = $basePrice + $toppingsTotal;

// ✅ Handle Add to Cart
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $qty = isset($_POST['prod_qty']) ? max(1, (int)$_POST['prod_qty']) : 1;
    $user_id = $_SESSION['user_id'];
    $prod_id = 0; // Always 0 for custom pizzas
    $prod_price = $basePrice + $toppingsTotal;
    $total_price = $prod_price * $qty;

    // ✅ Save quantity in session
    $_SESSION['pizza_base']['quantity'] = $qty;

    // ✅ Insert into cart_master_tbl
    $stmt = $cn->prepare("
        INSERT INTO cart_master_tbl (prod_id, user_id, prod_qty, prod_price, total_price)
        VALUES (?, ?, ?, ?, ?)
    ");
    $stmt->bind_param("iiidd", $prod_id, $user_id, $qty, $prod_price, $total_price);
    $stmt->execute();
    $cart_id = $stmt->insert_id;
    $stmt->close();

    // ✅ ALSO insert into pizza_order_tbl
    $c_cat_id = $pizza['c_cat_id'];
    $c_cat_name = $pizza['c_cat_name'];

    $stmt2 = $cn->prepare("
        INSERT INTO pizza_order_tbl (user_id, c_cat_id, c_cat_name, base_price, total_price, quantity, created_at)
        VALUES (?, ?, ?, ?, ?, ?, NOW())
    ");
    $stmt2->bind_param("iisddi", $user_id, $c_cat_id, $c_cat_name, $basePrice, $total_price, $qty);
    $stmt2->execute();
    $order_id = $stmt2->insert_id;
    $stmt2->close();

    // ✅ Insert toppings into pizza_order_toppings_tbl
    if (!empty($toppings)) {
        $tstmt = $cn->prepare("
            INSERT INTO pizza_order_toppings_tbl (order_id, topping_id, topping_name, topping_price)
            VALUES (?, ?, ?, ?)
        ");
        foreach ($toppings as $t) {
            $tid = $t['id'];
            $tname = $t['name'];
            $tprice = floatval($t['price']);
            $tstmt->bind_param("iisd", $order_id, $tid, $tname, $tprice);
            $tstmt->execute();
        }
        $tstmt->close();
    }

    // ✅ Update cart count
    if (!isset($_SESSION['cart_count'])) {
        $_SESSION['cart_count'] = 0;
    }
    $_SESSION['cart_count'] += 1;

    // ✅ Redirect to cart view page
    header("Location: cart_view.php?cart_id=" . $cart_id);
    exit;
}

// ✅ Include header
include("./php/r_header.php");
?>

<div class="shop-detail-box-main" style="margin-top:50px;">
  <div class="container">
    <div class="row">
      <!-- Pizza Image -->
      <div class="col-xl-5 col-lg-5 col-md-6">
        <img src="images/bg_1.png" alt="Pizza" style="width:100%;height:450px;">
      </div>

      <!-- Pizza Details -->
      <div class="col-xl-7 col-lg-7 col-md-6">
        <div class="single-product-details">
          <h1>Customized <?php echo htmlspecialchars($pizza['c_cat_name']); ?></h1>

          <strong><h5>Short Description :</h5></strong>
          <p><?php echo htmlspecialchars($pizza['description'] ?? ''); ?></p>

          <strong><h5>Base Price: ₹<?php echo number_format($basePrice, 2); ?></h5></strong>

          <?php if (!empty($toppings)): ?>
            <strong><h5>Selected Toppings:</h5></strong>
            <ul>
              <?php foreach ($toppings as $t): ?>
                <li><?php echo htmlspecialchars($t['name']); ?> (₹<?php echo number_format($t['price'], 2); ?>)</li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <strong><h4>Total Price: ₹<span id="totalPrice"><?php echo number_format($totalPrice, 2); ?></span></h4></strong>

          <!-- Quantity Form -->
          <form method="post" class="p-3 mb-3">
            <div class="row align-items-center">
              <div class="col-md-3">
                <label for="prod_qty">Quantity</label>
                <input type="number" name="prod_qty" id="prod_qty" class="form-control"
                       min="1" value="<?php echo $_SESSION['pizza_base']['quantity'] ?? 1; ?>">
              </div>
              <div class="col-md-3">
                <button type="submit" class="btn btn-primary mt-4">Add To Cart ➡</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<script>
// ✅ Live total price update
const qtyInput = document.getElementById('prod_qty');
const totalPriceElem = document.getElementById('totalPrice');

qtyInput.addEventListener('input', function() {
  let qty = parseInt(this.value) || 1;
  let total = (<?php echo $basePrice; ?> + <?php echo $toppingsTotal; ?>) * qty;
  totalPriceElem.textContent = total.toFixed(2);
});
</script>

<?php include("./php/footer.php"); ?>
