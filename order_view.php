<?php include("./php/admin_nav.php"); ?>

<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100">
  <div class="container">
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1>Orders</h1>
      </div>

      <table class="table table-striped text-center mt-4">
        <thead class="table-dark">
          <tr>
            <th>Order ID</th>
            <th>Product ID</th>
            <th>User ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Order Date</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include("connect.php");

          // Fetch order details along with product name from product_master_tbl
          $q = "SELECT o.order_id, o.prod_id, o.user_id, p.prod_name, o.prod_price, o.prod_qty, o.total_price, o.order_date 
                FROM order_master_tbl o 
                LEFT JOIN product_master_tbl p ON o.prod_id = p.prod_id";

          $rs = mysqli_query($cn, $q);

          if (mysqli_num_rows($rs) > 0) {
            while ($row = mysqli_fetch_assoc($rs)) {
          ?>
              <tr>
                <td><?php echo $row['order_id']?? '0'; ?></td>
                <td><?php echo $row['prod_id']?? '0'; ?></td>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['prod_name'] ?? 'N/A'; ?></td>
                <td>₹<?php echo $row['prod_price']; ?></td>
                <td><?php echo $row['prod_qty']; ?></td>
                <td>₹<?php echo $row['total_price']; ?></td>
                <td><?php echo $row['order_date']; ?></td>
                <td>
                  <a href="order_delete.php?order_id=<?php echo $row['order_id']; ?>" 
                     onclick="return confirm('Are you sure you want to delete this order?');">
                     <input type="button" value="Delete" class="btn btn-danger btn-sm">
                  </a>
                </td>
              </tr>
          <?php
            }
          } else {
            echo "<tr><td colspan='9'>No orders found.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<?php include("./php/footer.php"); ?>
