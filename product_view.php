<?php include("./php/admin_nav.php"); ?>
<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100 vw-100">
  <div class="container" >
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1>Product Details</h1>
      </div>
        <p>	<a href="product_form.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">ADD the Product</a></p>
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th>Product Id</th>
              <th>Product Name</th>
              <th>Product Description</th>
              <th>Product Photo</th>
              <th>Small Price</th>
              <th>Medium Price</th>
              <th>Large Price</th>
              <th>Category Name</th>
              <th>Subcategory Name</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include("connect.php");
            $q = "SELECT p.*, c.cat_name, s.sub_cat_name 
                  FROM product_master_tbl p
                  JOIN category_tbl c ON p.cat_id = c.cat_id
                  JOIN sub_category_tbl s ON p.sub_cat_id = s.sub_cat_id";
            $rs = mysqli_query($cn, $q);
            while ($row = mysqli_fetch_assoc($rs)) {
              ?>
              <tr>
                <td><?php echo $row['prod_id']; ?></td>
                <td><?php echo $row['prod_name']; ?></td>
                <td><?php echo $row['prod_description']; ?></td>
                <td><img src="<?php echo $row['prod_photo']; ?>" width="100" height="100"></td>
                <td>₹<?php echo $row['price_small']; ?></td>
                <td>₹<?php echo $row['price_medium']; ?></td>
                <td>₹<?php echo $row['price_large']; ?></td>
                <td><?php echo $row['cat_name']; ?></td>
                <td><?php echo $row['sub_cat_name']; ?></td>
                <td>
                  <a href="product_edit.php?prod_id=<?php echo $row['prod_id']; ?>">
                    <input type="button" value="Edit" class="btn btn-success">
                  </a>
                </td>
                <td>
                  <a href="product_delete.php?prod_id=<?php echo $row['prod_id']; ?>" onclick="return confirm('Are you sure you want to delete this product?');">
                    <input type="button" value="Delete" class="btn btn-danger">
                  </a>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<?php include("./php/footer.php"); ?>
