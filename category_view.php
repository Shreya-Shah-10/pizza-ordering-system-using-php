<?php include("./php/admin_nav.php") ?>

<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100">
  <div class="container" >
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1>Category</h1>
      </div>
      <p>	<a href="category.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">ADD the Category</a></p>
						
        <table class="table table-striped">
		<th>category id</th>
		<th>category Name</th>
		<th>category description</th>
		<th>category photo</th>
		<th>category edit</th>
		<th>category delete</th>
		<?php
	include("connect.php");
	$q="select * from category_tbl";
	$rs = mysqli_query($cn, $q);
    while ($row = mysqli_fetch_row($rs)) 
	{
    ?>
    <tr>
		<td><?php print $row[0];?> </td>
		<td><?php print $row[1];?> </td>
		<td><?php print $row[2];?> </td>
		<td><img src="<?php print $row[3];?>" width="100" height="100"></td>
		<td><a href="category_edit.php?cat_id=<?php print $row[0];?>"><input type="button" value="edit" class="btn btn-success"></a></td>
		<td><a href="category_delete.php?cat_id=<?php print $row[0];?>"><input type="button" value="delete" class="btn btn-danger"></a></td>

	</tr>
    <?php   
    }
	?>
	</table>

	
      </div>
    </div>
  </div>
</section>

    
<?php include("./php/footer.php")?>