<?php
ob_start();
session_start();
include("./php/r_header.php");

if (!isset($_SESSION['pizza'])) {
    header("Location: customize.php");
    exit;
}

// If form submitted, save quantity and go to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pizza_qty'])) {
    $qty = (int)$_POST['pizza_qty'];
    if ($qty > 0) {
        $_SESSION['pizza']['qty'] = $qty;
        header("Location: cart_view.php");
        exit;
    } else {
        $error = "Please enter a valid quantity.";
    }
}

$pizza = $_SESSION['pizza'];
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Select Pizza Quantity</h2>
            <div class="card p-3">
                <img src="<?php echo $pizza['image']; ?>" class="img-fluid mb-3" alt="Pizza">
                <h4><?php echo htmlspecialchars($pizza['size']); ?></h4>
                <p><?php echo htmlspecialchars($pizza['description']); ?></p>
                <h5>Price: ₹ <?php echo number_format($pizza['price'],2); ?></h5>

                <?php if(isset($error)) { ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php } ?>

                <form method="post">
                    <div class="mb-3">
                        <label for="pizza_qty" class="form-label">Quantity</label>
                        <input type="number" name="pizza_qty" id="pizza_qty" class="form-control" min="1" value="<?php echo $pizza['qty'] ?? 1; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Go to Cart ➡</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("./php/footer.php"); 
ob_end_flush();?>


