<?php

include("connect.php");
$sub_cat_name=$_POST['sub_cat_name'];
$sub_cat_description=$_POST['sub_cat_description'];
$sub_cat_price=$_POST['sub_cat_price'];
$sub_cat_photo = "images/sub_cat_photo/" . $_FILES['sub_cat_photo']['name'];
$cat_id=$_POST['cat_id'];

move_uploaded_file($_FILES['sub_cat_photo']['tmp_name'],$sub_cat_photo);

$q="INSERT INTO sub_category_tbl(sub_cat_name,sub_cat_description,sub_cat_photo,cat_id,sub_cat_price) VALUES 
('$sub_cat_name','$sub_cat_description','$sub_cat_photo','$cat_id','$sub_cat_price')";
echo $q;
$i = mysqli_query($cn, $q);

if($i==1)
{
    echo "data inserted..";
    header("Location: index.php"); 
    exit();
}
else {
    echo "not inserted...";
}

?>