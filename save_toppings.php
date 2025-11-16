<?php
session_start();

// Get JSON data from JS
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($_SESSION['pizza_base'])) {
    echo json_encode(['status' => 'error', 'message' => 'Pizza base not found in session']);
    exit;
}

// Ensure toppings is an array
$_SESSION['pizza_base']['toppings'] = is_array($data) ? $data : [];

// Recalculate total price: base + toppings
$base_price = floatval($_SESSION['pizza_base']['c_cat_price']);
$topping_total = 0;

foreach($_SESSION['pizza_base']['toppings'] as $t) {
    $topping_total += floatval($t['price']);
}

// Update total_price in session
$_SESSION['pizza_base']['total_price'] = $base_price + $topping_total;

// Return success
echo json_encode(['status' => 'success', 'total_price' => $_SESSION['pizza_base']['total_price']]);
