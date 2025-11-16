<?php

include("connect.php");
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_address=$_POST['user_address'];
$user_mobile=$_POST['user_mobile'];
$user_password=$_POST['user_password'];
$user_photo=$_FILES['user_photo']['name'];

$path="user_photo/".$_FILES['user_photo']['name'];
move_uploaded_file($_FILES['user_photo']['tmp_name'],$path);

$q="INSERT INTO user_master_tbl(user_name,user_email,user_address,user_mobile,user_password, user_photo) VALUES 
('$user_name','$user_email','$user_address','$user_mobile','$user_password','$path')";
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