<?php include("./php/admin_nav.php") ?>

<section class="ftco-section contact-section d-flex justify-content-center align-items-center vh-100">
  <div class="container" >
    <div class="row block-9 justify-content-center align-items-center">
      <div class="col-md-8 contact-info ftco-animate text-center">
        <h1>Sub Category</h1>
      </div>
      <p>	<a href="customize_sub_cat_form.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">ADD the Sub Category</a></p>
        <table class="table table-striped">
		<th>Customize Sub Category Id</th>
		<th>Customize Sub Category Name</th>
		<th>Customize Sub Category Description</th>
		<th>Customize Sub Category Photo</th>
    <th>Customize Sub Category Price</th>
		<th>Customize Category Name</th>
		<th>Edit</th>
		<th>Delete</th>
		<?php
	include("connect.php");
	$q="select * from customize_sub_cat_tbl";
	$rs = mysqli_query($cn, $q);
    while ($row = mysqli_fetch_row($rs)) 
	{
    ?>
    <tr>
		<td><?php print $row[0];?> </td> 
		<td><?php print $row[1];?> </td> 
		<td><?php print $row[2];?> </td> 
		<td><img src="<?php print $row[3];?>" width="100" height="100"></td> 
    <td><?php print $row[5];?> </td> 
        <td>
            <?php
            $c_cat_id = $row[4]; 
            $q1 = "SELECT c_cat_name FROM customize_cat_tbl WHERE c_cat_id = $c_cat_id";
            $res1 = mysqli_query($cn, $q1);
            if ($res1 && $row1 = mysqli_fetch_row($res1)) {
                print $row1[0]; 
            } else {
                print "Unknown";
            }
            ?>
        </td>    
        <td><a href="customize_sub_cat_edit.php?c_sub_cat_id=<?php print $row[0];?>"><input type="button" value="Edit" class="btn btn-success"></a></td>
		<td><a href="customize_sub_cat_delete.php?c_sub_cat_id=<?php print $row[0];?>"><input type="button" value="Delete" class="btn btn-danger"></a></td>

	</tr>
    <?php   
    }
	?>
	</table>
      </div>
    </div>
  </div>
</section>

<?php include("./php/footer.php") ?>
