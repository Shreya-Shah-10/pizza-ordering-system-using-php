<?php
$cn = mysqli_connect("localhost", "root", "", "pizzadb");

if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
