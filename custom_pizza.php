<?php
include("connect.php");

// 1. Get category and toppings from form
$c_cat_id = isset($_POST['cat_id']) ? (int)$_POST['cat_id'] : 0; // ✅ FIXED name
$topping_ids = isset($_POST['toppings']) ? $_POST['toppings'] : [];

// If no toppings selected → send back
if (empty($topping_ids)) {
    echo "<script>alert('Please select at least one topping!'); window.history.back();</script>";
    exit;
}

// 2. Create a custom name & description
$customize_name = "My Custom Pizza";
$customize_description = "Toppings IDs: " . implode(", ", $topping_ids);

// 3. Calculate price (example: ₹200 base + ₹50 per topping)
$base_price = 200;
$topping_price = 50;
$price = $base_price + (count($topping_ids) * $topping_price);

// 4. Save only the first topping in main table (since schema only has one sub_cat_id column)
$first_topping = $topping_ids[0];

// 5. Insert into customize_pizza_tbl
$sql = "INSERT INTO customize_pizza_tbl 
            (customize_name, customize_description, price, c_cat_id, c_sub_cat_id) 
        VALUES 
            ('$customize_name', '$customize_description', $price, $c_cat_id, $first_topping)";

if (mysqli_query($cn, $sql)) {
    $new_id = mysqli_insert_id($cn);

    // ✅ Optional: Save all toppings in a separate mapping table
    foreach ($topping_ids as $topping_id) {
        $q_map = "INSERT INTO customize_pizza_toppings_tbl (customize_id, c_sub_cat_id) 
                  VALUES ($new_id, $topping_id)";
        mysqli_query($cn, $q_map);
    }

    // 6. Redirect to customize.php page
    header("Location: customize.php?customize_id=$new_id");
    exit;
} else {
    echo "Error: " . mysqli_error($cn);
}
?>
