<?php
	include("connect.php");
	$user_name=$_POST['user_name'];
	$user_address=$_POST['user_address'];
	$user_city=$_POST['user_city'];
	$user_pincode=$_POST['user_pincode'];
	$user_email=$_POST['user_email'];
	$user_password=$_POST['user_password'];
	$user_mobile=$_POST['user_mobile'];
	$user_photo=$_FILES['user_photo']['name'];
	$path="user_image/".$_FILES['user_photo']['name'];
	move_uploaded_file($_FILES['user_photo']['tmp_name'],$path);
	$q="INSERT INTO user_master_tbl(user_name,user_address,user_city,user_pincode,user_email,user_password,user_mobile,user_photo) VALUES ('$user_name','$user_address','$user_city','$user_pincode','$user_email','$user_password','$user_mobile','$path')";
	$i=mysqli_query($cn,$q);
	if($i==1)
	{
		print "<script>";
		print "alert('User Created Successfully');";
		print "window.location.href='login.php'";
		print "</script>";
	}
	else
	{
		echo "not";
	}
?>