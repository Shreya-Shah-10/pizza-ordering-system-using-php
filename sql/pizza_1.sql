/*user_master_tbl query*/
INSERT INTO `user_master_tbl` 
(`user_id`, `user_name`, `user_email`, `user_address`, `user_mobile`, `user_password`, `user_photo`) 
VALUES
(1, 'Raj Patel', 'raj_patel@gmail.com', 'Ahmedabad, Gujarat', '9876543210', 'raj@123', './images/user_photo/u1.jpg'),
(2, 'Priya Sharma', 'priya_sharma@gmail.com', 'Delhi', '9812345678', 'priya@456', './images/user_photo/u9.jpg'),
(3, 'Amit Verma', 'amit_verma@gmail.com', 'Lucknow, Uttar Pradesh', '9123456789', 'amit@789', './images/user_photo/u2.jpg'),
(4, 'Sneha Iyer', 'sneha_iyer@gmail.com', 'Chennai, Tamil Nadu', '9001234567', 'sneha@001', './images/user_photo/u10.jpg'),
(5, 'Ravi Mehra', 'ravi_mehra@gmail.com', 'Jaipur, Rajasthan', '9876501234', 'ravi@999', './images/user_photo/u3.jpg'),
(6, 'Anjali Desai', 'anjali_desai@gmail.com', 'Surat, Gujarat', '9988776655', 'anjali@234', './images/user_photo/u11.jpg'),
(7, 'Manish Kapoor', 'manish_kapoor@gmail.com', 'Mumbai, Maharashtra', '9876543201', 'manish@abc', './images/user_photo/u4.jpg'),
(8, 'Neha Joshi', 'neha_joshi@gmail.com', 'Pune, Maharashtra', '9023456789', 'neha@xyz', './images/user_photo/u12.jpg'),
(9, 'Karan Singh', 'karan_singh@gmail.com', 'Amritsar, Punjab', '9898989898', 'karan@321', './images/user_photo/u5.jpg'),
(10, 'Pooja Nair', 'pooja_nair@gmail.com', 'Kochi, Kerala', '9900112233', 'pooja@pass', './images/user_photo/u13.jpg'),
(11, 'Arjun Reddy', 'arjun_reddy@gmail.com', 'Hyderabad, Telangana', '9876512340', 'arjun@123','./images/user_photo/u6.jpg'),
(12, 'Divya Bhatia', 'divya_bhatia@gmail.com', 'Indore, Madhya Pradesh', '9811122233', 'divya@456', './images/user_photo/u14.jpg'),
(13, 'Suresh Kumar', 'suresh_kumar@gmail.com', 'Patna, Bihar', '9334455667', 'suresh@abc', './images/user_photo/u7.jpg'),
(14, 'Meena Roy', 'meena_roy@gmail.com', 'Kolkata, West Bengal', '9009988776', 'meena@pwd', './images/user_photo/u15.jpg'),
(15, 'Vikram Chauhan', 'vikram_chauhan@gmail.com', 'Dehradun, Uttarakhand', '9765432109', 'vikram@789', './images/user_photo/u8.jpg');

/*category_tbl query*/
INSERT INTO `category_tbl` (`cat_id`, `cat_name`, `cat_description`, `cat_photo`) VALUES
(1, 'Italian Pizza', 'Classic Italian style pizza with authentic ingredients', './images/cat_photo/italian.jpg'),
(2, 'Mexican Wave', 'Spicy Mexican flavored pizza with a zesty twist', './images/cat_photo/mexican.jpg'),
(3, 'Peri Peri Delight', 'Hot and tangy peri peri flavored pizza', './images/cat_photo/peri_peri_delight.png'),
(4, 'Paneer Supreme', 'Loaded with paneer cubes and Indian spices', './images/cat_photo/paneer_supreme.jpg'),
(5, 'Margherita Classic', 'Simple and cheesy margherita with fresh basil', './images/cat_photo/margherita_classic.jpg'),
(6, 'Stuffed Garlic Bread', 'Garlic bread stuffed with cheesy fillings', './images/cat_photo/stuffed_garlic_bread.jpg'),
(7, 'Desserts', 'Sweet treats to complete your meal', './images/cat_photo/dessert.jpg'),
(8, 'Other Items', 'Special party combos and meal offers', './images/cat_photo/other_items.jpg'),
(9, 'Beverages', 'Refreshing hot and cold drinks', './images/cat_photo/beverages.jpg');

/*sub_cat_tbl query*/
INSERT INTO sub_category_tbl 
(sub_cat_id, sub_cat_name, sub_cat_description, sub_cat_photo, cat_id, sub_cat_price) VALUES

-- Italian Pizza
(1, 'Veg', 'Tasty vegetarian italian pizza options', 'images/sub_cat_photo/veg.jpg', 1, 199),
(2, 'Cheese', 'Loaded with premium cheese', 'images/sub_cat_photo/cheese.jpg', 1, 249),
(3, 'Mania', 'Mini budget-friendly pizzas', 'images/sub_cat_photo/mania.jpg', 1, 149),
(4, 'Only Pizza Slice', 'Single slice servings', 'images/sub_cat_photo/only_pizza_slice.jpg', 1, 79),
(5, 'Cheese Burst Pizza', 'Cheese-filled crust pizzas', 'images/sub_cat_photo/cheese_burst_pizza.jpg', 1, 299),
(6, 'Spicy Pizza', 'Hot and spicy pizzas', 'images/sub_cat_photo/spicy_pizza.jpg', 1, 249),
(7, 'Big Big Pizza', 'Oversized giant pizzas', 'images/sub_cat_photo/big_big_pizza.jpg', 1, 399),

-- Mexican Wave
(8, 'Veg', 'Tasty vegetarian Mexican pizzas', 'images/sub_cat_photo/veg.jpg', 2, 209),
(9, 'Cheese', 'Loaded with premium cheese & spices', 'images/sub_cat_photo/cheese.jpg', 2, 259),
(10, 'Spicy Pizza', 'Zesty and spicy Mexican style pizzas', 'images/sub_cat_photo/spicy_pizza.jpg', 2, 269),
(11, 'Only Pizza Slice', 'Single Mexican slice servings', 'images/sub_cat_photo/only_pizza_slice.jpg', 2, 89),

-- Peri Peri Delight
(12, 'Veg', 'Vegetarian peri peri pizzas', 'images/sub_cat_photo/veg.jpg', 3, 229),
(13, 'Cheese Burst Pizza', 'Peri peri cheese burst pizzas', 'images/sub_cat_photo/cheese_burst_pizza.jpg', 3, 319),
(14, 'Only Pizza Slice', 'Peri peri slice option', 'images/sub_cat_photo/only_pizza_slice.jpg', 3, 99),
(15, 'Spicy Pizza', 'Super spicy peri peri pizza', 'images/sub_cat_photo/spicy_pizza.jpg', 3, 289),
(16, 'Mania', 'Mini peri peri pizzas', 'images/sub_cat_photo/mania.jpg', 3, 159),

-- Paneer Supreme
(17, 'Veg', 'Paneer loaded veggie pizza', 'images/sub_cat_photo/veg.jpg', 4, 239),
(18, 'Cheese', 'Paneer with extra cheese', 'images/sub_cat_photo/cheese.jpg', 4, 269),
(19, 'Cheese Burst Pizza', 'Paneer stuffed cheesy crust pizza', 'images/sub_cat_photo/cheese_burst_pizza.jpg', 4, 329),
(20, 'Spicy Pizza', 'Paneer spicy masala pizza', 'images/sub_cat_photo/spicy_pizza.jpg', 4, 289),
(21, 'Only Pizza Slice', 'Paneer slice option', 'images/sub_cat_photo/only_pizza_slice.jpg', 4, 99),

-- Margherita Classic
(22, 'Veg', 'Classic vegetarian margherita', 'images/sub_cat_photo/veg.jpg', 5, 199),
(23, 'Cheese', 'Extra cheesy margherita', 'images/sub_cat_photo/cheese.jpg', 5, 249),
(24, 'Mania', 'Mini margherita pizzas', 'images/sub_cat_photo/mania.jpg', 5, 149),
(25, 'Spicy Pizza', 'Spicy margherita pizza', 'images/sub_cat_photo/spicy_pizza.jpg', 5, 239),
(26, 'Only Pizza Slice', 'Margherita slice option', 'images/sub_cat_photo/only_pizza_slice.jpg', 5, 89),

-- Stuffed Garlic Bread
(27, 'Garlic Breads & More', 'Fresh garlic breads and sides', 'images/sub_cat_photo/garlic_bread.jpg', 6, 129),

-- Desserts
(28, 'cake', 'Sweet treats to end your meal', 'images/sub_cat_photo/desserts.jpg', 7, 149),
(29, 'Choco Lava Cake', 'Rich molten lava cake', 'images/sub_cat_photo/choco_lava_cake.jpeg', 7, 129),
(30, 'Cup Cake', 'Soft and fluffy cupcakes', 'images/sub_cat_photo/cup_cake.jpeg', 7, 99),
(31, 'Softy', 'Delicious creamy softy', 'images/sub_cat_photo/softy.jpeg', 7, 59),

-- Other Items
(32, 'Party Combos', 'Perfect for celebrations', 'images/sub_cat_photo/party_combos.jpg', 8, 499),
(33, 'Meal for 1', 'Ideal combo for individuals', 'images/sub_cat_photo/meal_for_1.jpg', 8, 299),
(34, '5 Course Launch Feast', 'Complete 5-course meal deal', 'images/sub_cat_photo/5_course.jpg', 8, 599),
(35, 'Burgers', 'Combo offer with pasta', 'images/sub_cat_photo/burgers.jpg', 8, 349),
(36, 'Pastas', 'Combo offer with burger', 'images/sub_cat_photo/pastas.jpg', 8, 329),
(37, 'Pizza cup cake', 'a pizza in a mini cup.', 'images/sub_cat_photo/pizza_cup_cake.jpg', 8, 329),
(38, 'Pizza cones', 'pizza cones...', 'images/sub_cat_photo/pizza_cones.jpg', 8, 329),
(39, ' mini Pizza', 'mini pizza ', 'images/sub_cat_photo/mini_pizza.jpg', 8, 329),

-- Beverages
(40, 'Cold-Drinks', 'Chilled refreshing drinks', 'images/sub_cat_photo/cold_drinks.jpg', 9, 69),
(41, 'Coffee', 'Hot brewed coffees', 'images/sub_cat_photo/coffees.jpg', 9, 89);
(42, 'Smoothy', 'Hot brewed coffees', 'images/sub_cat_photo/smoothy.jpg', 9, 89);

/* contact_us insert queries 1 to 20 */
INSERT INTO contact_us (id, user_id, message_type, subject, message) VALUES
(1, 1, 'Complaint', 'Late Delivery Issue', 'I received my order 40 minutes late. Please look into it.'),
(2, 2, 'Feedback - Good', 'Great Service!', 'The pizza was hot and fresh. I loved the overall experience.'),
(3, 3, 'Feedback - Bad', 'Cold Pizza', 'The pizza I received was not warm at all. Very disappointed.'),
(4, 4, 'Other Inquiry', 'Do you offer catering services?', 'I have a party next week and want to inquire about bulk orders.'),
(5, 5, 'Complaint', 'Incorrect Toppings', 'I ordered a Margherita but received one with mushrooms.'),
(6, 6, 'Feedback - Good', 'Excellent App Interface', 'Your website and app UI is very smooth and user-friendly.'),
(7, 7, 'Feedback - Bad', 'Rude Delivery Executive', 'The delivery guy was not polite. Please train your staff better.'),
(8, 8, 'Other Inquiry', 'Partnership Proposal', 'I run a cafe. Interested in collaborating. Please contact me.'),
(9, 9, 'Complaint', 'Order Not Delivered', 'I placed an order and it never arrived. I want a refund.'),
(10, 10, 'Feedback - Good', 'Loved the Garlic Bread!', 'The garlic bread was amazing. Will order again soon!'),
(11, 11, 'Customer Idea - Business Growth', 'Loyalty Program Suggestion', 'Introduce a loyalty program where customers earn points for every order. This can boost repeat purchases.'),
(12, 12, 'Feedback - Good', 'Quick Delivery', 'Got my order in under 20 minutes. Impressive service!'),
(13, 13, 'Complaint', 'Overcharged', 'I was charged extra for toppings I did not select.'),
(14, 14, 'Feedback - Bad', 'Packaging Issue', 'The box was damaged and the pizza was cold when delivered.'),
(15, 15, 'Other Inquiry', 'Franchise Availability', 'I am interested in opening a franchise in my city. Let me know the process.'),
(16, 2, 'Customer Idea - Business Growth', 'Student Discount Plan', 'Create a discount plan for college students to increase orders during lunch hours.'),
(17, 4, 'Complaint', 'Spilled Drink', 'My drink spilled during delivery. Please improve your packaging.'),
(18, 6, 'Feedback - Good', 'Superb Veg Pizza', 'One of the best veg pizzas I’ve had in a long time.'),
(19, 8, 'Customer Idea - Business Growth', 'Referral System', 'Add a referral system. Give discounts for referring friends to your app.'),
(20, 9, 'Other Inquiry', 'Nutritional Information', 'Can you provide detailed calorie information on your menu?');
