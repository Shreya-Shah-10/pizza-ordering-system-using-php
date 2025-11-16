/*product query*/

/*category italian(1) and sub_category veg(1)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(1, 'Pizza Margherita', 'Classic Neapolitan pizza with tomato sauce, mozzarella, basil', 'images/prod_photo/margherita.jpg', 199, 249, 299, 1, 1),
(2, 'Pizza Marinara', 'Cheeseless pizza with tomato sauce, garlic, oregano, and olive oil', 'images/prod_photo/marinara.jpg', 179, 229, 279, 1, 1),
(3, 'Quattro Formaggi', 'Four cheese pizza made with mozzarella, gorgonzola, fontina, and parmesan', 'images/prod_photo/quattro_formaggi.jpg', 259, 309, 359, 1, 1),
(4, 'Pizza ai Funghi', 'Mushroom pizza with sautéed mushrooms on a Margherita base', 'images/prod_photo/funghi.jpg', 219, 269, 319, 1, 1),
(5, 'Pizza Caprese', 'White pizza with fresh mozzarella, cherry tomatoes, and basil', 'images/prod_photo/caprese.jpg', 239, 289, 339, 1, 1),
(6, 'Pizza alla Norma', 'Sicilian pizza with tomato sauce, eggplant, mozzarella, basil', 'images/prod_photo/alla_norma.jpg', 249, 299, 349, 1, 1),
(7, 'Pizza Radicchio e Gorgonzola', 'Pizza with sautéed radicchio, mozzarella, and sharp gorgonzola', 'images/prod_photo/radicchio_gorgonzola.jpg', 269, 319, 369, 1, 1),
(8, 'Pizza Pugliese', 'Pizza from Puglia with tomato sauce, mozzarella, and sliced red onions', 'images/prod_photo/pugliese.jpg', 219, 269, 319, 1, 1),
(9, 'Pizza Capricciosa (Vegetarian)', 'Vegetarian version with mushrooms, artichoke hearts, and black olives', 'images/prod_photo/capricciosa.jpg', 249, 299, 349, 1, 1),
(10, 'Pizza Quattro Stagioni (Vegetarian)', 'Four-seasons pizza with olives, mushrooms, artichokes, and tomatoes', 'images/prod_photo/quattro_stagioni.jpg', 279, 329, 379, 1, 1),
(11, 'Pizza Pesto e Stracchino', 'White pizza with Genovese pesto and creamy stracchino cheese', 'images/prod_photo/pesto_stracchino.jpg', 259, 309, 359, 1, 1),
(12, 'Pizza Bufalina', 'Variation of Margherita with creamy buffalo mozzarella', 'images/prod_photo/bufalina.jpg', 269, 319, 369, 1, 1),
(13, 'Pizza Zucchine e Scamorza', 'Grilled zucchini and smoked scamorza cheese on a crisp crust', 'images/prod_photo/zucchine_scamorza.jpg', 239, 289, 339, 1, 1),
(14, 'Pizza ai Peperoni (Italian style)', 'Vegetarian pizza with roasted sweet peppers, mozzarella, parmesan', 'images/prod_photo/peperoni.jpg', 229, 279, 329, 1, 1),
(15, 'Pizza Rucola e Grana', 'Margherita pizza finished with fresh rocket and Grana Padano', 'images/prod_photo/rucola_grana.jpg', 249, 299, 349, 1, 1);

/*category italian(1) and sub_category cheese(2)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(16, 'Margherita Pizza', 'Classic tomato sauce, mozzarella & basil', 'images/prod_photo/margherita1.jpg', 199, 249, 299, 1, 2),
(17, 'Pepperoni Pizza', 'Loaded with pepperoni and cheese', 'images/prod_photo/pepperoni1.jpg', 229, 279, 329, 1, 2),
(18, 'BBQ Chicken Pizza', 'Grilled chicken, BBQ sauce & onions', 'images/prod_photo/bbq_chicken.jpg', 239, 289, 339, 1, 2),
(19, 'Veggie Delight Pizza', 'Capsicum, onion, olives, tomato, sweetcorn', 'images/prod_photo/veggie_delight.jpg', 209, 259, 309, 1, 2),
(20, 'Farmhouse Pizza', 'Cheese, onion, tomato & farm fresh veggies', 'images/prod_photo/farmhouse.jpg', 219, 269, 319, 1, 2),
(21, 'Hawaiian Pizza', 'Chicken, pineapple & mozzarella cheese', 'images/prod_photo/hawaiian.jpg', 229, 279, 329, 1, 2),
(22, 'Paneer Tikka Pizza', 'Spicy paneer tikka & mozzarella', 'images/prod_photo/paneer_tikka.jpg', 219, 269, 319, 1, 2),
(23, 'Mexican Green Wave Pizza', 'Jalapeños, onion, capsicum, tomatoes', 'images/prod_photo/mexican_green.jpg', 219, 269, 319, 1, 2),
(24, 'Chicken Supreme Pizza', 'Loaded chicken chunks, onion, capsicum', 'images/prod_photo/chicken_supreme.jpg', 249, 299, 349, 1, 2),
(25, 'Cheese Burst Pizza', 'Extra cheese-filled crust for cheese lovers', 'images/prod_photo/cheese_burst.jpg', 239, 289, 339, 1, 2),
(26, 'Spicy Triple Tango Pizza', 'Spicy jalapeños, peri peri, hot cheese', 'images/prod_photo/spicy_tango.jpg', 229, 279, 329, 1, 2),
(27, 'Peri Peri Chicken Pizza', 'Peri peri chicken with herbs & cheese', 'images/prod_photo/peri_peri_chicken.jpg', 249, 299, 349, 1, 2),
(28, 'Deluxe Veggie Pizza', 'Veggie mix with cheese & Italian herbs', 'images/prod_photo/deluxe_veggie.jpg', 209, 259, 309, 1, 2),
(29, 'Italian Pepperoni Pizza', 'Authentic Italian pepperoni & cheese', 'images/prod_photo/italian_pepperoni.jpg', 249, 299, 349, 1, 2),
(30, 'Tandoori Chicken Pizza', 'Smoky tandoori chicken, onion & capsicum', 'images/prod_photo/tandoori_chicken.jpg', 249, 299, 349, 1, 2);

/*category italian(1) and sub_category mania(3)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(31, 'Pizza Margherita', 'Classic Neapolitan pizza with tomato sauce, mozzarella, and basil.', 'images/prod_photo/pizza_margherita3.jpg', 249, 299, 349, 1, 3),
(32, 'Pizza Marinara', 'Ancient Neapolitan pizza with tomato sauce, garlic, and oregano (no cheese).', 'images/prod_photo/pizza_marinara.jpg', 229, 279, 329, 1, 3),
(33, 'Pizza Capricciosa', 'Pizza with mozzarella, artichokes, mushrooms, and olives.', 'images/prod_photo/pizza_capricciosa.jpg', 299, 349, 399, 1, 3),
(34, 'Quattro Formaggi', 'Four-cheese pizza with mozzarella, gorgonzola, fontina, and Parmigiano-Reggiano.', 'images/prod_photo/pizza_quattro_formaggi.jpg', 329, 379, 429, 1, 3),
(35, 'Quattro Stagioni', 'Four-seasons pizza with toppings like mushrooms, artichokes, ham, and olives.', 'images/prod_photo/pizza_quattro_stagioni.jpg', 319, 369, 419, 1, 3),
(36, 'Pizza Diavola', 'Spicy pizza topped with tomato sauce, mozzarella, and spicy salami.', 'images/prod_photo/pizza_diavola.jpg', 309, 359, 409, 1, 3),
(37, 'Pizza Boscaiola', 'Woodsman-style pizza with sausage and mushrooms.', 'images/prod_photo/pizza_boscaiola.jpg', 319, 369, 419, 1, 3),
(38, 'Pizza Ortolana', 'The gardener’s pizza topped with assorted seasonal vegetables.', 'images/prod_photo/pizza_ortolana.jpg', 289, 339, 389, 1, 3),
(39, 'Pizza Pugliese', 'Pizza from Puglia with tomato sauce, mozzarella, and red onion.', 'images/prod_photo/pizza_pugliese.jpg', 299, 349, 399, 1, 3),
(40, 'Pizza Tirolese', 'Alpine-style pizza with tomato sauce, mozzarella, and smoked speck.', 'images/prod_photo/pizza_tirolese.jpg', 329, 379, 429, 1, 3),
(41, 'Pizza alla Norma', 'Sicilian pizza with tomato, eggplant, ricotta salata, and basil.', 'images/prod_photo/pizza_norma.jpg', 319, 369, 419, 1, 3),
(42, 'Pizza Patate e Rosmarino', 'White pizza topped with thin potato slices and rosemary.', 'images/prod_photo/pizza_patate_rosmarino.jpg', 289, 339, 389, 1, 3),
(43, 'Pizza ai Funghi Porcini', 'Deluxe mushroom pizza featuring porcini mushrooms.', 'images/prod_photo/pizza_funghi_porcini.jpg', 349, 399, 449, 1, 3),
(44, 'Pizza Radicchio e Gorgonzola', 'Bold pizza with bitter radicchio and pungent gorgonzola.', 'images/prod_photo/pizza_radicchio_gorgonzola.jpg', 359, 409, 459, 1, 3),
(45, 'Pizza con Fiori di Zucca', 'Delicate white pizza with zucchini blossoms and mozzarella.', 'images/prod_photo/pizza_fiori_zucca.jpg', 299, 349, 399, 1, 3);

/*category italian(1) and sub_category only slice(4)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(46, 'Margherita Slice', 'Classic slice with tomato sauce, mozzarella, and fresh basil.', 'images/prod_photo/slice_margherita.jpg', 99, 119, 139, 1, 4),
(47, 'Ortolana Slice', 'Gardener’s slice topped with seasonal grilled zucchini, bell peppers, and eggplant.', 'images/prod_photo/slice_ortolana.jpg', 119, 139, 159, 1, 4),
(48, 'Patate e Rosmarino Slice', 'Roman slice topped with thin potato slices, rosemary, and olive oil.', 'images/prod_photo/slice_patate_rosmarino.jpg', 109, 129, 149, 1, 4),
(49, 'Zucchine e Ricotta Slice', 'Slice with zucchini, creamy ricotta, and a touch of salt.', 'images/prod_photo/slice_zucchine_ricotta.jpg', 115, 135, 155, 1, 4),
(50, 'Fiori di Zucca Slice', 'Delicate slice with zucchini blossoms, mozzarella, and optional anchovies.', 'images/prod_photo/slice_fiori_zucca.jpg', 125, 145, 165, 1, 4),
(51, 'Funghi Slice', 'Earthy slice topped generously with mixed mushrooms.', 'images/prod_photo/slice_funghi.jpg', 119, 139, 159, 1, 4),
(52, 'Cipolle Slice', 'Slice featuring the sweetness of caramelized onions.', 'images/prod_photo/slice_cipolle.jpg', 109, 129, 149, 1, 4),
(53, 'Pesto e Pomodorini Slice', 'Slice with a vibrant pesto base, mozzarella, and cherry tomatoes.', 'images/prod_photo/slice_pesto_pomodorini.jpg', 129, 149, 169, 1, 4),
(54, 'Quattro Formaggi Slice', 'Four-cheese slice with mozzarella, Gorgonzola, fontina, and Parmigiano.', 'images/prod_photo/slice_quattro_formaggi.jpg', 139, 159, 179, 1, 4),
(55, 'Bufalina Slice', 'Luxurious slice with buffalo mozzarella, a Margherita variation.', 'images/prod_photo/slice_bufalina.jpg', 139, 159, 179, 1, 4),
(56, 'Burrata e Pomodorini Slice', 'Slice topped with cherry tomatoes and creamy burrata after baking.', 'images/prod_photo/slice_burrata_pomodorini.jpg', 145, 165, 185, 1, 4),
(57, 'Provola Affumicata Slice', 'Slice featuring smoked provola cheese for a bold flavor.', 'images/prod_photo/slice_provola_affumicata.jpg', 135, 155, 175, 1, 4),
(58, 'Ricotta e Spinaci Slice', 'Comforting slice with fresh ricotta and spinach.', 'images/prod_photo/slice_ricotta_spinaci.jpg', 129, 149, 169, 1, 4),
(59, 'Bianca con Stracchino Slice', 'Simple white slice topped with soft, mild stracchino cheese.', 'images/prod_photo/slice_bianca_stracchino.jpg', 119, 139, 159, 1, 4),
(60, 'Pizza Rossa Slice', 'Roman classic: slice with just tomato sauce, no cheese.', 'images/prod_photo/slice_rossa.jpg', 89, 109, 129, 1, 4);

/*category italian(1) and sub_category Cheese Burst Pizza(5)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(61, 'Margherita Ricotta Cheese Burst', 'Classic Margherita pizza with a ricotta-stuffed crust.', 'images/prod_photo/cb_margherita_ricotta.jpg', 151, 189, 227, 1, 5),
(62, 'Salsiccia e Friarielli Ripieno Cheese Burst', 'Pizza with ricotta-stuffed crust, Italian sausage, and broccoli rabe.', 'images/prod_photo/cb_salsiccia_friarielli.jpg', 159, 199, 239, 1, 5),
(63, 'Prosciutto e Ricotta Ripieno Cheese Burst', 'Ham and ricotta-filled crust with mozzarella and prosciutto cotto topping.', 'images/prod_photo/cb_prosciutto_ricotta.jpg', 156, 195, 234, 1, 5),
(64, 'Tartufo Ripieno Cheese Burst', 'Gourmet pizza with truffle-flavored ricotta-stuffed crust, mushrooms, and truffle paste.', 'images/prod_photo/cb_tartufo.jpg', 183, 229, 275, 1, 5),
(65, 'Speck e Provola Ripieno Cheese Burst', 'Provola-stuffed crust with smoked speck topping.', 'images/prod_photo/cb_speck_provola.jpg', 164, 205, 246, 1, 5),
(66, 'Quattro Formaggi Ripieno Cheese Burst', 'Four-cheese pizza with a creamy cheese-filled crust.', 'images/prod_photo/cb_quattro_formaggi.jpg', 172, 215, 258, 1, 5),
(67, 'Pizza alla Bufala Cheese Burst', 'Indulgent pizza with creamy buffalo mozzarella bursting with flavor.', 'images/prod_photo/cb_bufala.jpg', 159, 199, 239, 1, 5),
(68, 'Burrata e Pomodorini Cheese Burst', 'Pizza topped with burrata cheese and cherry tomatoes, burrata added after baking.', 'images/prod_photo/cb_burrata_pomodorini.jpg', 167, 209, 251, 1, 5),
(69, 'Pizza ai Cinque Formaggi Cheese Burst', 'An even richer version of Quattro Formaggi with five cheeses.', 'images/prod_photo/cb_cinque_formaggi.jpg', 175, 219, 263, 1, 5),
(70, 'Pizza con Cacio e Pepe Cheese Burst', 'Inspired by Roman pasta, with pecorino-pepper cheese sauce.', 'images/prod_photo/cb_cacio_pepe.jpg', 159, 199, 239, 1, 5),
(71, 'Pizza al Provolone Piccante Cheese Burst', 'Sharp, spicy provolone cheese for a bold flavor.', 'images/prod_photo/cb_provolone_piccante.jpg', 164, 205, 246, 1, 5),
(72, 'Pizza Stracciatella e Pesto Cheese Burst', 'Pizza with creamy stracciatella cheese and basil pesto.', 'images/prod_photo/cb_stracciatella_pesto.jpg', 167, 209, 251, 1, 5),
(73, 'Nduja e Stracciatella Cheese Burst', 'Fiery pizza with spicy Calabrian nduja and creamy stracciatella.', 'images/prod_photo/cb_nduja_stracciatella.jpg', 175, 219, 263, 1, 5),
(74, 'Diavola con Cornicione Ripieno Cheese Burst', 'Spicy salami pizza with decadent cheese-stuffed crust.', 'images/prod_photo/cb_diavola_ripieno.jpg', 172, 215, 258, 1, 5),
(75, 'Arrabbiata Ricotta Cheese Burst', 'Spicy tomato sauce with chili flakes and ricotta-stuffed crust.', 'images/prod_photo/cb_arrabbiata_ricotta.jpg', 164, 205, 246, 1, 5);

/*category italian(1) and sub_category spicy Pizza(6)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(76, 'Pizza Diavola', 'Classic spicy “devil’s pizza” with tomato base, mozzarella, and hot salami.', 'images/prod_photo/spicy_diavola.jpg', 159, 199, 239, 1, 6),
(77, 'Pizza Calabrese', 'Spicy Calabrian pizza with nduja, provolone, and hot peppers.', 'images/prod_photo/spicy_calabrese.jpg', 175, 219, 263, 1, 6),
(78, 'Nduja e Burrata', 'Fiery nduja paired with creamy burrata for a Southern Italian balance.', 'images/prod_photo/spicy_nduja_burrata.jpg', 183, 229, 275, 1, 6),
(79, 'Pizza Arrabbiata', 'Angry-style pizza with chili tomato sauce, garlic, roasted peppers, and cheese.', 'images/prod_photo/spicy_arrabbiata.jpg', 159, 199, 239, 1, 6),
(80, 'Pizza con Salsiccia Piccante', 'Spicy Italian sausage (salsiccia piccante) with mozzarella on tomato base.', 'images/prod_photo/spicy_salsiccia_piccante.jpg', 167, 209, 251, 1, 6),
(81, 'Pizza al Salame Piccante', 'Popular spicy salami pizza with mozzarella and tomato base.', 'images/prod_photo/spicy_salame_piccante.jpg', 164, 205, 246, 1, 6),
(82, 'Pizza con Olive e Peperoncino', 'Vegetarian spicy pizza with black olives and chili flakes.', 'images/prod_photo/spicy_olive_peperoncino.jpg', 156, 195, 234, 1, 6),
(83, 'Nduja e Cipolle', 'Fiery nduja with sweet caramelized onions for a bold balance.', 'images/prod_photo/spicy_nduja_cipolle.jpg', 175, 219, 263, 1, 6),
(84, 'Pizza con Peperoni e Caprino', 'Spicy Italian peppers with tangy goat cheese.', 'images/prod_photo/spicy_peperoni_caprino.jpg', 180, 225, 270, 1, 6),
(85, 'Diavola con Olive Nere', 'Diavola pizza enhanced with briny black olives.', 'images/prod_photo/spicy_diavola_olive.jpg', 167, 209, 251, 1, 6),
(86, 'Salsiccia e Friarielli Piccante', 'Spicy twist on Neapolitan sausage and broccoli rabe pizza.', 'images/prod_photo/spicy_salsiccia_friarielli.jpg', 183, 229, 275, 1, 6),
(87, 'Pizza Rossa Piccante', 'Roman-style pizza al taglio with simple spicy tomato sauce, no cheese.', 'images/prod_photo/spicy_rossa.jpg', 143, 179, 215, 1, 6),
(88, 'Pizza Piccante con Acciughe', 'Anchovies on spicy tomato base for a pungent, zesty flavor.', 'images/prod_photo/spicy_acciughe.jpg', 159, 199, 239, 1, 6),
(89, 'Nduja e Gorgonzola', 'Intense nduja spice combined with sharp gorgonzola cheese.', 'images/prod_photo/spicy_nduja_gorgonzola.jpg', 183, 229, 275, 1, 6),
(90, 'Diavola con Miele Piccante', 'Classic Diavola finished with a drizzle of hot honey.', 'images/prod_photo/spicy_diavola_miele.jpg', 175, 219, 263, 1, 6);
/*----------------------------------------------------------------------------------------------------------------------------------------------*/
/*category italian(1) and sub_category big big Pizza(7)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(91, 'Pizza al Metro', 'Long, rectangular pizza from Naples, literally "pizza by the meter," made to be shared.', 'images/prod_photo/large_al_metro.jpg', 399, 499, 599, 1, 7),
(92, 'Pizza alla Pala', 'Long, oval-shaped pizza served on a wooden paddle with airy, crisp dough.', 'images/prod_photo/large_alla_pala.jpg', 391, 489, 587, 1, 7),
(93, 'Pizza al Taglio', 'Roman-style pizza baked in large trays and sold by the cut or weight.', 'images/prod_photo/large_al_taglio.jpg', 367, 459, 551, 1, 7),
(94, 'Pizza in Teglia', 'Roman-style pan pizza baked in large rectangular pans.', 'images/prod_photo/large_in_teglia.jpg', 375, 469, 563, 1, 7),
(95, 'Pizza Gigante', 'Extra-large round pizza, also called family pizza, perfect for sharing.', 'images/prod_photo/large_gigante.jpg', 479, 599, 719, 1, 7),
(96, 'Schiacciata', 'Dense, crunchy, and sometimes stuffed Tuscan flatbread made in large sizes.', 'images/prod_photo/large_schiacciata.jpg', 343, 429, 515, 1, 7),
(97, 'Sfincione', 'Sicilian thick-crust pizza baked in large pans, soft and spongy with rich toppings.', 'images/prod_photo/large_sfincione.jpg', 351, 439, 527, 1, 7),
(98, 'Margherita al Metro', 'Classic tomato, mozzarella, and basil, perfect for a large-format pizza.', 'images/prod_photo/large_margherita.jpg', 383, 479, 575, 1, 7),
(99, 'Quattro Stagioni al Metro', 'Four Seasons pizza with mushrooms, artichokes, ham, and olives divided into sections.', 'images/prod_photo/large_quattro_stagioni.jpg', 399, 499, 599, 1, 7),
(100, 'Capricciosa al Metro', 'Hearty pizza with mushrooms, artichokes, ham, and olives mixed together.', 'images/prod_photo/large_capricciosa.jpg', 396, 495, 594, 1, 7),
(101, 'Boscaiola al Metro', 'Rustic woodsman’s pizza with sausage and mushrooms.', 'images/prod_photo/large_boscaiola.jpg', 391, 489, 587, 1, 7),
(102, 'Ortolana al Metro', 'Vegetarian pizza topped with grilled seasonal vegetables.', 'images/prod_photo/large_ortolana.jpg', 380, 475, 570, 1, 7),
(103, 'Salsiccia e Friarielli al Metro', 'Neapolitan large pizza with sausage and broccoli rabe.', 'images/prod_photo/large_salsiccia_friarielli.jpg', 399, 499, 599, 1, 7),
(104, 'Patate e Salsiccia al Metro', 'Rustic large pizza topped with sliced potatoes and sausage.', 'images/prod_photo/large_patate_salsiccia.jpg', 396, 495, 594, 1, 7),
(105, 'Quattro Formaggi al Metro', 'Four-cheese pizza on a large, sauceless base.', 'images/prod_photo/large_quattro_formaggi.jpg', 412, 515, 618, 1, 7);

/*category mexican wav(2) and sub_category veg Pizza(8)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(106, 'Fiesta Bean Pizza', 'Classic pizza with refried bean base, corn, onions, and a Mexican cheese blend.', 'images/prod_photo/mex_fiesta_bean.jpg', 263, 329, 395, 2, 8),
(107, 'Rajma Corn Fiesta', 'Indian-Mexican fusion pizza with kidney bean masala (rajma) and sweet corn.', 'images/prod_photo/mex_rajma_corn.jpg', 271, 339, 407, 2, 8),
(108, 'Black Bean & Chipotle', 'Smoky black bean sauce base with chipotle peppers and cilantro-lime drizzle.', 'images/prod_photo/mex_blackbean_chipotle.jpg', 279, 349, 419, 2, 8),
(109, 'Chili Cornbread Pizza', 'Unique cornbread crust topped with vegetarian chili, cheese, and jalapeños.', 'images/prod_photo/mex_chili_cornbread.jpg', 287, 359, 431, 2, 8),
(110, 'Three-Bean & Roasted Pepper', 'Pizza with black beans, pinto beans, kidney beans, roasted peppers, and cheese.', 'images/prod_photo/mex_threebean_pepper.jpg', 276, 345, 414, 2, 8),
(111, 'Smoky Bean & Corn Pizza', 'Charred corn and black beans bring a smoky twist to this Mexican-style pizza.', 'images/prod_photo/mex_smoky_beancorn.jpg', 268, 335, 402, 2, 8),
(112, 'Avocado Cream Pizza', 'Topped with fresh avocado slices and creamy Mexican crema drizzle.', 'images/prod_photo/mex_avocado_cream.jpg', 292, 365, 438, 2, 8),
(113, 'Queso Fundido Pizza', 'Inspired by queso fundido: melted cheese with roasted poblano peppers.', 'images/prod_photo/mex_queso_fundido.jpg', 295, 369, 443, 2, 8),
(114, 'Street Corn Pizza (Elote)', 'Pizza topped with roasted corn, cotija cheese, chili powder, and garlic-lime crema.', 'images/prod_photo/mex_elote.jpg', 284, 355, 426, 2, 8),
(115, 'Creamy Cilantro Lime', 'Cilantro-lime sauce base topped with mozzarella, onion, and bell peppers.', 'images/prod_photo/mex_cilantro_lime.jpg', 279, 349, 419, 2, 8),
(116, 'Jalapeño Popper Pizza', 'Cream cheese, pickled jalapeños, and melted cheese for a spicy-savory treat.', 'images/prod_photo/mex_jalapeno_popper.jpg', 284, 355, 426, 2, 8),
(117, 'Nacho Pizza', 'Pizza crust topped with refried beans, cheddar, Monterey Jack, and nacho toppings.', 'images/prod_photo/mex_nacho.jpg', 287, 359, 431, 2, 8),
(118, 'Pico de Gallo Supreme', 'Pizza topped with fresh pico de gallo, lettuce, cheese, and guacamole.', 'images/prod_photo/mex_pico_supreme.jpg', 276, 345, 414, 2, 8),
(119, 'Salsa Verde & Tomatillo', 'Green salsa base with roasted tomatillos and cotija cheese.', 'images/prod_photo/mex_salsa_verde.jpg', 271, 339, 407, 2, 8),
(120, 'Mexican Green Wave', 'Pizza with onions, capsicum, tomatoes, and jalapeños, seasoned with Mexican herbs.', 'images/prod_photo/mex_green_wave.jpg', 268, 335, 402, 2, 8);

/*category mexican wav(2) and sub_category chesse Pizza(9)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(121, 'Fiesta Four Cheese', 'Mexican twist on quattro formaggi with Oaxaca, cotija, queso fresco, and Monterey Jack.', 'images/prod_photo/mex_fiesta_four_cheese.jpg', 295, 369, 443, 2, 9),
(122, 'Queso Fundido Pizza', 'Inspired by queso fundido, topped with bubbling cheese blend and roasted poblano peppers.', 'images/prod_photo/mex_queso_fundido1.jpg', 287, 359, 431, 2, 9),
(123, 'El Cheesy Clásico', 'Classic Mexican cheese pizza with a rich and satisfying melted blend.', 'images/prod_photo/mex_el_cheesy_clasico.jpg', 279, 349, 419, 2, 9),
(124, 'Taco Cheese Melt', 'Taco-seasoned cheese with onions, tomatoes, and fresh cilantro.', 'images/prod_photo/mex_taco_cheese_melt.jpg', 284, 355, 426, 2, 9),
(125, 'Triple Cheesy Enchilada', 'Enchilada sauce base with three Mexican cheeses and fresh cilantro garnish.', 'images/prod_photo/mex_triple_cheesy_enchilada.jpg', 295, 369, 443, 2, 9),
(126, 'Cotija & Corn', 'White pizza with salty cotija cheese and charred corn.', 'images/prod_photo/mex_cotija_corn.jpg', 276, 345, 414, 2, 9),
(127, 'Smoky Chipotle & Asadero', 'Smoky chipotle sauce base with melting asadero cheese.', 'images/prod_photo/mex_chipotle_asadero.jpg', 287, 359, 431, 2, 9),
(128, 'Ranchero Black Bean Pizza', 'Refried black bean base with roasted peppers, onions, and crumbled cotija cheese.', 'images/prod_photo/mex_ranchero_blackbean2.jpg', 292, 365, 438, 2, 9),
(129, 'Mexican Street Corn Pizza', 'Roasted corn, cotija cheese, chili powder, and garlic-lime sauce.', 'images/prod_photo/mex_street_corn2.jpg', 284, 355, 426, 2, 9),
(130, 'Tinga de Hongos Pizza', 'Chipotle-braised mushrooms layered with melted cheese.', 'images/prod_photo/mex_tinga_hongos2.jpg', 292, 365, 438, 2, 9),
(131, 'Avocado Cream Dream', 'Avocado-lime sauce base topped with fresh avocado slices and cheese.', 'images/prod_photo/mex_avocado_dream2.jpg', 287, 359, 431, 2, 9),
(132, 'Jalapeño Popper Pizza', 'Cream cheese base, pickled jalapeños, and melted cheese blend.', 'images/prod_photo/mex_jalapeno_popper3.jpg', 284, 355, 426, 2, 9),
(133, 'Loaded Nacho Pizza', 'Refried beans, cheddar, Monterey Jack, and nacho toppings.', 'images/prod_photo/mex_loaded_nacho.jpg', 295, 369, 443, 2, 9),
(134, 'Veracruzana Pizza', 'Green olives, pickled jalapeños, capers, roasted tomatoes, and cheese.', 'images/prod_photo/mex_veracruzana_cheese.jpg', 287, 359, 431, 2, 9),
(135, 'Salsa Verde & Poblano', 'Tomatillo salsa verde base with roasted poblano, corn, and cotija.', 'images/prod_photo/mex_salsa_verde_poblano2.jpg', 279, 349, 419, 2, 9);

/*category mexican wav(2) and sub_category spicy Pizza(10)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(136, 'Habanero Heat Wave', 'A fiery pizza with a habanero-infused sauce, roasted bell peppers, onions, and a cooling drizzle of sour cream', 'images/prod_photo/habanero_heat_wave.jpg', 279, 349, 419, 2, 10),
(137, 'Chipotle Flame', 'A pizza with a smoky and spicy chipotle sauce base, topped with grilled chicken or roasted vegetables, and a mix of cheeses', 'images/prod_photo/chipotle_flame.jpg', 271, 339, 407, 2, 10),
(138, 'Jalapeño Popper Pizza', 'Topped with a cream cheese base, slices of pickled jalapeño, and a blend of mozzarella and cheddar', 'images/prod_photo/jalapeno_popper.jpg', 263, 329, 395, 2, 10),
(139, 'Salsa Roja Fiery Pizza', 'A simple yet potent pizza with a spicy red salsa base, sliced jalapeños, onions, and melted cheese', 'images/prod_photo/salsa_roja_fiery.jpg', 255, 319, 383, 2, 10),
(140, 'Poblano Pepper Inferno', 'Features roasted poblano peppers, which provide a mild to medium heat, along with onions and Mexican cheese blend', 'images/prod_photo/poblano_inferno.jpg', 271, 339, 407, 2, 10),
(141, 'Serrano Spice', 'For those who prefer a sharp, fresh heat, this pizza is topped with thinly sliced serrano peppers, cilantro, and onion', 'images/prod_photo/serrano_spice.jpg', 263, 329, 395, 2, 10),
(142, 'Diablo Mexicana', 'A pizza with a very spicy red chili sauce, spicy sausage like chorizo or salami, and cheese', 'images/prod_photo/diablo_mexicana.jpg', 287, 359, 431, 2, 10),
(143, 'Salsa Verde Kick', 'A tangy and spicy pizza with a salsa verde base, roasted peppers, and a sprinkle of cotija cheese', 'images/prod_photo/salsa_verde_kick.jpg', 263, 329, 395, 2, 10),
(144, 'Spicy Ranchero', 'A pizza with a spicy ranchero sauce base, topped with black beans, corn, onions, and cheese', 'images/prod_photo/spicy_ranchero.jpg', 271, 339, 407, 2, 10),
(145, 'Mole Poblano Pizza', 'A rich and complex pizza with a savory mole sauce base, mild heat, topped with cheese and vegetables', 'images/prod_photo/mole_poblano.jpg', 295, 369, 443, 2, 10),
(146, 'Mexican Hot Honey', 'A pizza drizzled with spicy honey after baking, combining sweetness with fiery peppers and cheese', 'images/prod_photo/mexican_hot_honey.jpg', 279, 349, 419, 2, 10),
(147, 'Chili-Cheese Burst', 'A savory chili base, melted Mexican cheese, and a garnish of fresh jalapeños and cilantro', 'images/prod_photo/chili_cheese_burst.jpg', 271, 339, 407, 2, 10),
(148, 'Spicy Tinga Pizza', 'Uses a smoky, spicy mushroom mixture (tinga de hongos) as the topping, with fresh avocado and cilantro', 'images/prod_photo/spicy_tinga.jpg', 279, 349, 419, 2, 10),
(149, 'Elote Caliente', 'A spicy street corn pizza with roasted corn, cotija cheese, and extra chili powder or hot sauce', 'images/prod_photo/elote_caliente.jpg', 263, 329, 395, 2, 10),
(150, 'Habanero Mango Heat', 'A fruity-spicy combo of sweet mango chunks and fiery habanero peppers', 'images/prod_photo/habanero_mango_heat.jpg', 287, 359, 431, 2, 10);

/*category mexican wav(2) and sub_category only pizza slice Pizza(11)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(151, 'Avocado Cream Slice', 'Topped with fresh avocado slices and a creamy, tangy drizzle', 'images/prod_photo/avocado_cream_slice.jpg', 127, 159, 191, 2, 11),
(152, 'Black Bean Fiesta', 'A slice with a refried black bean base, corn, onions, and fresh cilantro', 'images/prod_photo/black_bean_fiesta.jpg', 119, 149, 179, 2, 11),
(153, 'Elote Caliente Slice', 'A slice with roasted corn, cotija cheese, chili powder, and a creamy lime sauce', 'images/prod_photo/elote_caliente_slice.jpg', 135, 169, 203, 2, 11),
(154, 'Verde Tomatillo Slice', 'A tangy slice with a green tomatillo salsa base, roasted peppers, and cheese', 'images/prod_photo/verde_tomatillo_slice.jpg', 127, 159, 191, 2, 11),
(155, 'Jalapeño Popper Slice', 'Topped with a cream cheese base, pickled jalapeños, and a blend of cheeses', 'images/prod_photo/jalapeno_popper_slice.jpg', 119, 149, 179, 2, 11),
(156, 'Three-Bean Medley Slice', 'A hearty slice with black beans, pinto beans, kidney beans, and roasted peppers', 'images/prod_photo/three_bean_medley_slice.jpg', 135, 169, 203, 2, 11),
(157, 'Smoky Bean & Corn Slice', 'A flavorful slice with charred corn and smoky refried beans', 'images/prod_photo/smoky_bean_corn_slice.jpg', 127, 159, 191, 2, 11),
(158, 'Veggie Fajita Slice', 'Features strips of bell peppers and onions, seasoned and roasted, with a melted cheese topping', 'images/prod_photo/veggie_fajita_slice.jpg', 135, 169, 203, 2, 11),
(159, 'Rustic Sweet Potato Slice', 'A satisfying slice with roasted sweet potato cubes, black beans, and chili flakes', 'images/prod_photo/rustic_sweet_potato_slice.jpg', 127, 159, 191, 2, 11),
(160, 'Pico de Gallo Burst', 'A slice topped with mozzarella, finished with fresh pico de gallo after baking', 'images/prod_photo/pico_de_gallo_burst.jpg', 127, 159, 191, 2, 11),
(161, 'Veggie Supreme Mexicana', 'A slice loaded with vegetables like corn, olives, capsicum, and onions with Mexican cheese blend', 'images/prod_photo/veggie_supreme_mexicana_slice.jpg', 143, 179, 215, 2, 11),
(162, 'Mushroom Tinga Slice', 'A smoky and spicy mushroom mixture (tinga de hongos) forms the base of this slice', 'images/prod_photo/mushroom_tinga_slice.jpg', 135, 169, 203, 2, 11),
(163, 'Four Cheese Mexicana', 'A slice with a blend of Oaxaca, cotija, queso fresco, and Monterey Jack cheeses', 'images/prod_photo/four_cheese_mexicana_slice.jpg', 143, 179, 215, 2, 11),
(164, 'Queso Fundido Slice', 'Inspired by the appetizer, with a bubbling layer of melted cheese and roasted poblano peppers', 'images/prod_photo/queso_fundido_slice.jpg', 135, 169, 203, 2, 11),
(165, 'Cotija & Poblano Slice', 'A slice with crumbled cotija cheese and roasted poblano peppers', 'images/prod_photo/cotija_poblano_slice.jpg', 127, 159, 191, 2, 11);

/*category peri peri delight(3) and sub_category veg Pizza(12)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(166, 'Peri Peri Paneer Power', 'Features spicy Peri-Peri marinated paneer cubes, capsicum, and onions.', 'images/prod_photo/peri_peri_paneer_power.jpg', 199, 249, 299, 3, 12),
(167, 'Peri Peri Tandoori Fusion', 'Combines the smoky flavor of Tandoori paneer with the zing of Peri-Peri sauce.', 'images/prod_photo/peri_peri_tandoori_fusion.jpg', 207, 259, 311, 3, 12),
(168, 'Spicy Peri Peri Paneer Supreme', 'A mix of Peri-Peri paneer, red paprika, corn, and jalapeños.', 'images/prod_photo/spicy_peri_peri_paneer_supreme.jpg', 215, 269, 323, 3, 12),
(169, 'Peri Peri Makhani Veggie', 'Combines a rich Makhani sauce base with Peri-Peri spiced vegetables for a creamy and spicy fusion.', 'images/prod_photo/peri_peri_makhani_veggie.jpg', 191, 239, 287, 3, 12),
(170, 'Peri Peri Cottage Delight', 'Uses spiced cottage cheese and a mix of vegetables for a fiery kick.', 'images/prod_photo/peri_peri_cottage_delight.jpg', 183, 229, 275, 3, 12),
(171, 'Peri Peri Corn Fiesta', 'A sweet and spicy mix of Peri-Peri sauce, sweet corn, and chopped onions.', 'images/prod_photo/peri_peri_corn_fiesta.jpg', 175, 219, 263, 3, 12),
(172, 'Smoky Peri Peri Corn', 'Charred corn with a smoky Peri-Peri sauce base and a blend of cheese.', 'images/prod_photo/smoky_peri_peri_corn.jpg', 183, 229, 275, 3, 12),
(173, 'Peri Peri Golden Delight', 'A simple yet delicious combination of golden corn and Peri-Peri sauce.', 'images/prod_photo/peri_peri_golden_delight.jpg', 159, 199, 239, 3, 12),
(174, 'Peri Peri Corn & Cheese Burst', 'A cheesy pizza with a filling of corn and Peri-Peri sauce.', 'images/prod_photo/peri_peri_corn_cheese_burst.jpg', 207, 259, 311, 3, 12),
(175, 'Creamy Peri Peri Veg', 'A pizza featuring a Peri-Peri mayo drizzle and a mix of fresh vegetables.', 'images/prod_photo/creamy_peri_peri_veg.jpg', 199, 249, 299, 3, 12),
(176, 'Paneer Peri Peri Cream', 'A creamy and spicy pizza with Peri-Peri paneer cubes and a drizzle of creamy sauce.', 'images/prod_photo/paneer_peri_peri_cream.jpg', 215, 269, 323, 3, 12),
(177, 'Peri Peri Zucchini & Ricotta', 'A fresh and spicy pizza with zucchini slices, creamy ricotta, and a drizzle of Peri-Peri sauce.', 'images/prod_photo/peri_peri_zucchini_ricotta.jpg', 191, 239, 287, 3, 12),
(178, 'Peri Peri Garlic Mushroom', 'A combination of creamy garlic sauce, sautéed mushrooms, and Peri-Peri seasoning.', 'images/prod_photo/peri_peri_garlic_mushroom.jpg', 183, 229, 275, 3, 12),
(179, 'Peri Peri Veggie Supreme', 'Loaded with a mix of bell peppers, red onions, olives, and jalapeños with Peri-Peri sauce.', 'images/prod_photo/peri_peri_veggie_supreme.jpg', 223, 279, 335, 3, 12),
(180, 'African Peri Peri Veg', 'Inspired by the sauce origins, with a mix of vibrant, fresh vegetables.', 'images/prod_photo/african_peri_peri_veg.jpg', 199, 249, 299, 3, 12);

/*category peri peri delight(3) and sub_category Cheese Burst Pizza(13)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(181, 'Peri Peri Paneer Lava', 'A pizza with a cheesy crust and a topping of spicy Peri-Peri paneer cubes.', 'images/prod_photo/peri_peri_paneer_lava.jpg', 239, 299, 359, 3, 13),
(182, 'Volcanic Paneer Burst', 'An extra-spicy mix of Peri-Peri paneer and red chili flakes, erupting from a cheese-filled crust.', 'images/prod_photo/volcanic_paneer_burst.jpg', 255, 319, 383, 3, 13),
(183, 'Smoky Paneer Peri Peri Explosion', 'Features smoky Peri-Peri marinated paneer and a cheese-burst crust.', 'images/prod_photo/smoky_paneer_peri_peri_explosion.jpg', 263, 329, 395, 3, 13),
(184, 'Tandoori Paneer Peri Peri Bomb', 'A fusion of smoky Tandoori paneer, Peri-Peri seasoning, and a cheese-stuffed crust.', 'images/prod_photo/tandoori_paneer_peri_peri_bomb.jpg', 271, 339, 407, 3, 13),
(185, 'Paneer Peri Peri Supreme Burst', 'A loaded pizza with Peri-Peri paneer, red paprika, corn, and jalapeños, featuring a cheese-filled crust.', 'images/prod_photo/paneer_peri_peri_supreme_burst.jpg', 263, 329, 395, 3, 13),
(186, 'Spicy Paneer Makhani Melt', 'A creamy Makhani sauce base with Peri-Peri spiced paneer and a cheese-burst crust.', 'images/prod_photo/spicy_paneer_makhani_melt.jpg', 255, 319, 383, 3, 13),
(187, 'Paneer Blast Peri Peri', 'A straightforward name emphasizing the cheese burst and the heat of Peri-Peri paneer.', 'images/prod_photo/paneer_blast_peri_peri.jpg', 239, 299, 359, 3, 13),
(188, 'Cheesy Peri Peri Burst', 'A classic Peri-Peri veggie pizza with a delicious, cheesy stuffed crust.', 'images/prod_photo/cheesy_peri_peri_burst.jpg', 231, 289, 347, 3, 13),
(189, 'Creamy Peri Peri Veggie Blast', 'A pizza with a creamy Peri-Peri sauce drizzle and a cheese-burst crust.', 'images/prod_photo/creamy_peri_peri_veggie_blast.jpg', 239, 299, 359, 3, 13),
(190, 'Ricotta Peri Peri Volcano', 'A pizza with creamy ricotta and Peri-Peri marinated vegetables, erupting from a cheesy crust.', 'images/prod_photo/ricotta_peri_peri_volcano.jpg', 255, 319, 383, 3, 13),
(191, 'Gooey Garlic Peri Peri', 'Features a creamy garlic sauce base and Peri-Peri seasoned vegetables, with a cheese-burst crust.', 'images/prod_photo/gooey_garlic_peri_peri.jpg', 231, 289, 347, 3, 13),
(192, 'Peri Peri Zucchini Burst', 'Thin slices of zucchini, creamy ricotta, and a drizzle of Peri-Peri, all within a cheesy rim.', 'images/prod_photo/peri_peri_zucchini_burst.jpg', 247, 309, 371, 3, 13),
(193, 'Mushroom Peri Peri Cheese Bomb', 'A classic combination of mushrooms and Peri-Peri, with a cheesy, stuffed crust.', 'images/prod_photo/mushroom_peri_peri_cheese_bomb.jpg', 239, 299, 359, 3, 13),
(194, 'Peri Peri Corn & Cheese Burst', 'A sweet and spicy mix of sweet corn, onions, and Peri-Peri sauce, with a cheesy crust.', 'images/prod_photo/peri_peri_corn_cheese_burst1.jpg', 231, 289, 347, 3, 13),
(195, 'Golden Peri Peri Corn Explosion', 'Highlights the simple yet delicious flavor of golden corn with a spicy kick and a cheese-burst crust.', 'images/prod_photo/golden_peri_peri_corn_explosion.jpg', 239, 299, 359, 3, 13);

/*category peri peri delight(3) and sub_category only Pizza slice(14)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(196, 'Peri Peri Paneer Slice', 'A classic with spicy Peri-Peri marinated paneer cubes', 'images/prod_photo/peri_peri_paneer_slice.jpg', 79, 99, 119, 3, 14),
(197, 'Tandoori Paneer Peri Peri Slice', 'A fusion of smoky Tandoori paneer and fiery Peri-Peri seasoning', 'images/prod_photo/tandoori_paneer_peri_peri_slice.jpg', 87, 109, 131, 3, 14),
(198, 'Volcanic Paneer Slice', 'An extra-spicy mix of Peri-Peri paneer and chili flakes', 'images/prod_photo/volcanic_paneer_slice.jpg', 87, 109, 131, 3, 14),
(199, 'Peri Peri Makhani Slice', 'Combines a creamy Makhani sauce base with Peri-Peri spiced paneer', 'images/prod_photo/peri_peri_makhani_slice.jpg', 95, 119, 143, 3, 14),
(200, 'Paneer Peri Peri Supreme Slice', 'Features Peri-Peri paneer, red paprika, corn, and jalapeños', 'images/prod_photo/paneer_peri_peri_supreme_slice.jpg', 95, 119, 143, 3, 14),
(201, 'Peri Peri Onion Slice', 'A basic but flavorful slice with Peri-Peri sauce and crunchy onions', 'images/prod_photo/peri_peri_onion_slice.jpg', 71, 89, 107, 3, 14),
(202, 'Peri Peri Corn Slice', 'Highlights the sweet and spicy mix of Peri-Peri sauce and corn', 'images/prod_photo/peri_peri_corn_slice.jpg', 71, 89, 107, 3, 14),
(203, 'Peri Peri Tomato Slice', 'A simple slice with Peri-Peri sauce and sliced tomatoes', 'images/prod_photo/peri_peri_tomato_slice.jpg', 71, 89, 107, 3, 14),
(204, 'Peri Peri Capsicum Slice', 'A spicy and crunchy slice with green capsicum and Peri-Peri sauce', 'images/prod_photo/peri_peri_capsicum_slice.jpg', 71, 89, 107, 3, 14),
(205, 'Peri Peri Veggie Slice', 'A basic mix of vegetables with Peri-Peri sauce', 'images/prod_photo/peri_peri_veggie_slice.jpg', 71, 89, 107, 3, 14),
(206, 'Peri Peri Olives Slice', 'A briny and spicy combination of olives and Peri-Peri sauce', 'images/prod_photo/peri_peri_olives_slice.jpg', 76, 95, 114, 3, 14),
(207, 'Peri Peri Mushroom Slice', 'A classic slice with mushrooms and a Peri-Peri kick', 'images/prod_photo/peri_peri_mushroom_slice.jpg', 76, 95, 114, 3, 14),
(208, 'Peri Peri Plain Slice', 'A simple flatbread slice with just Peri-Peri sauce and cheese', 'images/prod_photo/peri_peri_plain_slice.jpg', 63, 79, 95, 3, 14),
(209, 'Peri Peri Garlic Slice', 'A slice with a garlic sauce base and a spicy Peri-Peri kick', 'images/prod_photo/peri_peri_garlic_slice.jpg', 71, 89, 107, 3, 14),
(210, 'Peri Peri Herb Slice', 'A slice with Peri-Peri sauce and a mix of herbs', 'images/prod_photo/peri_peri_herb_slice.jpg', 71, 89, 107, 3, 14);

/*category peri peri delight(3) and sub_category spicy pizza(15)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(211, 'Peri Peri Paneer Blaze', 'Cubes of paneer marinated in Peri-Peri sauce with red paprika, onions, and extra chili flakes', 'images/prod_photo/peri_peri_paneer_blaze.jpg', 239, 299, 359, 3, 15),
(212, 'Volcanic Paneer Fury', 'An extra-spicy mix of Peri-Peri paneer, fiery green chiles, and a cheese topping', 'images/prod_photo/volcanic_paneer_fury.jpg', 247, 309, 371, 3, 15),
(213, 'Tandoori Inferno', 'Smoky tandoori spiced paneer with a fiery Peri-Peri kick', 'images/prod_photo/tandoori_inferno.jpg', 255, 319, 383, 3, 15),
(214, 'Blazing Paneer Fusion', 'A blend of Peri-Peri paneer, red bell peppers, and spicy sauce', 'images/prod_photo/blazing_paneer_fusion.jpg', 239, 299, 359, 3, 15),
(215, 'Peri Peri Paneer Fireball', 'Fiery Peri-Peri paneer cubes with onions and capsicum', 'images/prod_photo/peri_peri_paneer_fireball.jpg', 231, 289, 347, 3, 15),
(216, 'Spicy Paneer Makhani Blast', 'Rich makhani sauce base topped with Peri-Peri spiced paneer', 'images/prod_photo/spicy_paneer_makhani_blast.jpg', 255, 319, 383, 3, 15),
(217, 'Smoky Paneer Heatwave', 'Charred smoky paneer with a powerful Peri-Peri flavor', 'images/prod_photo/smoky_paneer_heatwave.jpg', 239, 299, 359, 3, 15),
(218, 'Paneer Blast Inferno', 'An explosion of flavor and heat with spicy paneer and Peri-Peri', 'images/prod_photo/paneer_blast_inferno.jpg', 247, 309, 371, 3, 15),
(219, 'Peri Peri Pineapple Inferno', 'Sweet pineapple balanced with fiery Peri-Peri sauce', 'images/prod_photo/peri_peri_pineapple_inferno.jpg', 231, 289, 347, 3, 15),
(220, 'Chili Garlic Peri Peri', 'Garlic, fresh green chiles, and a Peri-Peri sauce base', 'images/prod_photo/chili_garlic_peri_peri.jpg', 223, 279, 335, 3, 15),
(221, 'Hot Passion Peri Pizza', 'An intensely spicy pizza with bold Peri-Peri seasonings', 'images/prod_photo/hot_passion_peri_pizza.jpg', 239, 299, 359, 3, 15),
(222, 'Peri Peri Olive Medley Fire', 'Black & green olives with Peri-Peri sauce and red onions', 'images/prod_photo/peri_peri_olive_medley_fire.jpg', 247, 309, 371, 3, 15),
(223, 'Jalapeño Popper Peri Peri', 'Cream cheese base with pickled jalapeños and Peri-Peri kick', 'images/prod_photo/jalapeno_popper_peri_peri.jpg', 255, 319, 383, 3, 15),
(224, 'African Spice Vortex', 'A vortex of African-inspired Peri-Peri spices and heat', 'images/prod_photo/african_spice_vortex.jpg', 263, 329, 395, 3, 15),
(225, 'Volcanic Veggie Scorch', 'Loaded veggie pizza with extra Peri-Peri sauce and fiery chiles', 'images/prod_photo/volcanic_veggie_scorch.jpg', 239, 299, 359, 3, 15);

/*category peri peri delight(3) and sub_category maina pizza(16)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(226, 'Peri Paneer Twist', 'A simple and satisfying pizza featuring cubes of paneer marinated in Peri-Peri sauce, topped with onions.', 'images/prod_photo/peri_paneer_twist.jpg', 159, 199, 239, 3, 16),
(227, 'Spicy Paneer Mania', 'A straightforward take on the spicy paneer pizza, with fiery Peri-Peri paneer cubes and a sprinkle of chili flakes.', 'images/prod_photo/spicy_paneer_mania.jpg', 167, 209, 251, 3, 16),
(228, 'Tandoori Peri Paneer', 'Combines the smoky essence of Tandoori paneer with the zing of Peri-Peri seasoning.', 'images/prod_photo/tandoori_peri_paneer.jpg', 175, 219, 263, 3, 16),
(229, 'Paneer Fireball', 'Small cubes of fiery Peri-Peri paneer, red onions, and capsicum for a flavorful, zesty kick.', 'images/prod_photo/paneer_fireball.jpg', 183, 229, 275, 3, 16),
(230, 'Peri Peri Cottage Delight', 'Uses spiced cottage cheese (paneer) and onions for a flavorful and satisfying, yet simple, pizza.', 'images/prod_photo/peri_peri_cottage_delight1.jpg', 159, 199, 239, 3, 16),
(231, 'Paneer Peri & Corn', 'A sweet and savory combination of Peri-Peri paneer cubes and golden corn.', 'images/prod_photo/paneer_peri_corn.jpg', 167, 209, 251, 3, 16),
(232, 'Zesty Paneer Capsicum', 'A simple pizza with zesty Peri-Peri paneer and crunchy capsicum slices.', 'images/prod_photo/zesty_paneer_capsicum.jpg', 159, 199, 239, 3, 16),
(233, 'Peri Corn Classic', 'A delightful combination of sweet corn and a drizzle of spicy Peri-Peri sauce.', 'images/prod_photo/peri_corn_classic.jpg', 143, 179, 215, 3, 16),
(234, 'Peri Peri Capsicum Punch', 'A pizza focusing on the spicy, crunchy capsicum, with a Peri-Peri sauce base.', 'images/prod_photo/peri_peri_capsicum_punch.jpg', 151, 189, 227, 3, 16),
(235, 'Corn & Capsicum Zinger', 'A sweet corn and capsicum pizza with an extra dose of Peri-Peri heat.', 'images/prod_photo/corn_capsicum_zinger.jpg', 159, 199, 239, 3, 16),
(236, 'Smoky Corn Peri', 'Charred, smoky corn kernels with a light Peri-Peri sauce and cheese.', 'images/prod_photo/smoky_corn_peri.jpg', 151, 189, 227, 3, 16),
(237, 'Golden Corn Peri Delight', 'Highlights the simple sweetness of golden corn paired with a spicy Peri-Peri sauce.', 'images/prod_photo/golden_corn_peri_delight.jpg', 159, 199, 239, 3, 16),
(238, 'Peri Peri Corn & Onion', 'A budget-friendly mix of corn and onions with a spicy Peri-Peri twist.', 'images/prod_photo/peri_peri_corn_onion.jpg', 143, 179, 215, 3, 16),
(239, 'Crunchy Peri Capsicum', 'A simple pizza with extra crunchy capsicum slices and Peri-Peri seasoning.', 'images/prod_photo/crunchy_peri_capsicum.jpg', 151, 189, 227, 3, 16),
(240, 'Veggie Peri Mania', 'A straightforward vegetarian pizza with a mix of everyday vegetables and Peri-Peri sauce.', 'images/prod_photo/veggie_peri_mania.jpg', 159, 199, 239, 3, 16);

/*category paneer supreme(4) and sub_category veg pizza(17)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(241, 'Makhani Paneer Supreme', 'A rich and creamy Makhani sauce base with spiced paneer, onions, and capsicum', 'images/prod_photo/makhani_paneer_supreme.jpg', 199, 249, 299, 4, 17),
(242, 'Tandoori Paneer Supreme', 'Tandoori-marinated paneer with onions, capsicum, and mint mayo garnish', 'images/prod_photo/tandoori_paneer_supreme.jpg', 207, 259, 311, 4, 17),
(243, 'Peppy Paneer Supreme', 'Chunky paneer, crisp capsicum, spicy red pepper, and veggies for a peppy delight', 'images/prod_photo/peppy_paneer_supreme.jpg', 191, 239, 287, 4, 17),
(244, 'Kadhai Paneer Supreme', 'Paneer, onions, and capsicum on a spicy Kadhai sauce base', 'images/prod_photo/kadhai_paneer_supreme.jpg', 199, 249, 299, 4, 17),
(245, 'Achari Paneer Supreme', 'Tangy achari-flavored pizza with paneer, onions, and capsicum', 'images/prod_photo/achari_paneer_supreme.jpg', 183, 229, 275, 4, 17),
(246, 'Desi Paneer Supreme', 'Rustic Indian-style pizza with spiced paneer, onions, tomatoes, and masala', 'images/prod_photo/desi_paneer_supreme.jpg', 191, 239, 287, 4, 17),
(247, 'Royal Spice Paneer Supreme', 'Indulgent paneer pizza with aromatic spices, onions, and tomatoes', 'images/prod_photo/royal_spice_paneer_supreme.jpg', 207, 259, 311, 4, 17),
(248, 'Southern Fiery Paneer Supreme', 'Fiery South Indian-style sauce with paneer and green capsicum', 'images/prod_photo/southern_fiery_paneer_supreme.jpg', 199, 249, 299, 4, 17),
(249, 'Peri Peri Paneer Supreme', 'Spicy Peri-Peri paneer with capsicum, onions, and jalapenos', 'images/prod_photo/peri_peri_paneer_supreme.jpg', 199, 249, 299, 4, 17),
(250, 'Chili Paneer Supreme', 'Indo-Chinese style paneer with Schezwan sauce, onions, and capsicum', 'images/prod_photo/chili_paneer_supreme.jpg', 191, 239, 287, 4, 17),
(251, 'Volcanic Paneer Supreme', 'An extra-spicy mix of paneer, peppers, and chili flakes', 'images/prod_photo/volcanic_paneer_supreme.jpg', 207, 259, 311, 4, 17),
(252, 'Spicy Paneer Blast', 'Loaded with fiery paneer cubes and a hot sauce base', 'images/prod_photo/spicy_paneer_blast.jpg', 191, 239, 287, 4, 17),
(253, 'Fiery Paneer & Corn Supreme', 'Sweet corn with spicy paneer and peppers for a sweet-heat combo', 'images/prod_photo/fiery_paneer_corn_supreme.jpg', 199, 249, 299, 4, 17),
(254, 'Jalapeño Paneer Supreme', 'Paneer with jalapeños, onions, and spicy sauce', 'images/prod_photo/jalapeno_paneer_supreme.jpg', 191, 239, 287, 4, 17),
(255, 'Creamy Paneer Supreme', 'White sauce base with creamy paneer, onions, and vegetables', 'images/prod_photo/creamy_paneer_supreme.jpg', 199, 249, 299, 4, 17);

/*category paneer supreme(4) and sub_category cheese pizza(18)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(256, 'Makhani Paneer Cheese Supreme', 'A rich and creamy Makhani sauce base with spiced paneer and extra cheese.', 'images/prod_photo/makhani_paneer_cheese_supreme.jpg', 239, 299, 359, 4, 18),
(257, 'Tandoori Paneer Cheese Supreme', 'Tandoori-marinated paneer with onions, capsicum, mozzarella, and smoked cheese.', 'images/prod_photo/tandoori_paneer_cheese_supreme.jpg', 255, 319, 383, 4, 18),
(258, 'Achari Paneer Cheese Supreme', 'A tangy pizza with achari paneer and a multi-cheese topping.', 'images/prod_photo/achari_paneer_cheese_supreme.jpg', 247, 309, 371, 4, 2),
(259, 'Royal Spice Paneer Cheese Supreme', 'Paneer, onions, and tomatoes with a premium cheese blend and royal spices.', 'images/prod_photo/royal_spice_paneer_cheese_supreme.jpg', 263, 329, 395, 4, 18),
(260, 'Desi Paneer Double Cheese', 'Spiced paneer, onions, tomatoes, and double the cheesy goodness.', 'images/prod_photo/desi_paneer_double_cheese.jpg', 239, 299, 359, 4, 18),
(261, 'Kadhai Paneer Cheese Melt', 'Juicy marinated paneer on a Kadhai sauce base with gooey melted cheese.', 'images/prod_photo/kadhai_paneer_cheese_melt.jpg', 247, 309, 371, 4, 18),
(262, 'Spicy Paneer Four Cheese', 'Spicy paneer with a blend of four cheeses for a rich experience.', 'images/prod_photo/spicy_paneer_four_cheese.jpg', 271, 339, 407, 4, 2),
(263, 'Paneer Butter Masala Cheese Burst', 'Paneer with butter masala sauce and a cheese-stuffed crust.', 'images/prod_photo/paneer_butter_masala_cheese_burst.jpg', 279, 349, 419, 4, 18),
(264, 'Peri Peri Paneer Cheese Burst', 'Spicy Peri-Peri paneer with a cheese-stuffed crust.', 'images/prod_photo/peri_peri_paneer_cheese_burst.jpg', 263, 329, 395, 4, 18),
(265, 'Chili Paneer Cheese Sizzler', 'Indo-Chinese chili paneer with onions, capsicum, and sizzling cheese.', 'images/prod_photo/chili_paneer_cheese_sizzler.jpg', 255, 319, 383, 4, 18),
(266, 'Volcanic Paneer Cheese Supreme', 'Paneer, fiery peppers, and lots of melted cheese.', 'images/prod_photo/volcanic_paneer_cheese_supreme.jpg', 271, 339, 407, 4, 18),
(267, 'Spicy Paneer Cheese Blast', 'Spicy paneer cubes with fiery sauce and a cheese burst.', 'images/prod_photo/spicy_paneer_cheese_blast.jpg', 263, 329, 395, 4, 18),
(268, 'Jalapeño Paneer Cheese Supreme', 'Paneer with jalapeños and a bold cheese topping.', 'images/prod_photo/jalapeno_paneer_cheese_supreme.jpg', 255, 319, 383, 4, 18),
(269, 'Peri Peri Paneer Cheese Melt', 'Peri-Peri paneer with gooey melted cheese.', 'images/prod_photo/peri_peri_paneer_cheese_melt.jpg', 247, 309, 371, 4, 18),
(270, 'Blazing Paneer Cheese Fiesta', 'Paneer, peppers, and an extra-cheesy topping.', 'images/prod_photo/blazing_paneer_cheese_fiesta.jpg', 263, 329, 395, 4, 18);

/*category paneer supreme(4) and sub_category cheese busrt pizza(19)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(271, 'Makhani Paneer Cheese Burst', 'A rich and creamy Makhani sauce base, topped with spiced paneer and a lava-like cheese-stuffed crust.', 'images/prod_photo/makhani_paneer_cheese_burst.jpg', 279, 349, 419, 4, 19),
(272, 'Tandoori Paneer Cheese Burst', 'Smoky Tandoori-marinated paneer with onions, capsicum, and a tandoori-spiced cheese-filled crust.', 'images/prod_photo/tandoori_paneer_cheese_burst.jpg', 287, 359, 431, 4, 19),
(273, 'Achari Paneer Cheese Burst', 'Tangy and spicy achari-flavored paneer and veggies, with a cheese burst for an extra kick.', 'images/prod_photo/achari_paneer_cheese_burst.jpg', 271, 339, 407, 4, 19),
(274, 'Kadhai Paneer Cheese Burst', 'A vibrant Kadhai sauce, marinated paneer, and a surprise of cheesy goodness in the crust.', 'images/prod_photo/kadhai_paneer_cheese_burst.jpg', 279, 349, 419, 4, 19),
(275, 'Desi Paneer Double Burst', 'A rustic, homemade-style pizza with spiced paneer, veggies, and a double layer of cheese burst.', 'images/prod_photo/desi_paneer_double_burst.jpg', 263, 329, 395, 4, 19),
(276, 'Royal Spice Paneer Cheese Burst', 'An indulgent pizza with richly spiced paneer, aromatic spices, and a premium cheese burst.', 'images/prod_photo/royal_spice_paneer_cheese_burst.jpg', 295, 369, 443, 4, 19),
(277, 'Paneer Butter Masala Cheese Burst', 'A decadent pizza with a creamy butter masala sauce, paneer, and a cheese-stuffed crust.', 'images/prod_photo/paneer_butter_masala_cheese_burst1.jpg', 287, 359, 431, 4, 19),
(278, 'Paneer Tikka Butter Masala Cheese Burst', 'A fusion of Paneer Tikka and Butter Masala flavors, all wrapped in a cheesy crust.', 'images/prod_photo/paneer_tikka_butter_masala_cheese_burst.jpg', 295, 369, 443, 4, 19),
(279, 'Peri Peri Paneer Cheese Burst', 'A spicy and zesty pizza featuring Peri-Peri paneer cubes, capsicum, and a cheese-stuffed crust.', 'images/prod_photo/peri_peri_paneer_cheese_burst1.jpg', 279, 349, 419, 4, 19),
(280, 'Volcanic Paneer Cheese Burst', 'An extra-spicy pizza with paneer, fiery peppers, and an "erupting" cheese-stuffed crust.', 'images/prod_photo/volcanic_paneer_cheese_burst.jpg', 287, 359, 431, 4, 19),
(281, 'Chili Paneer Cheese Sizzler Burst', 'An Indo-Chinese pizza with spicy chili paneer and a sizzling cheese-burst crust.', 'images/prod_photo/chili_paneer_cheese_sizzler_burst.jpg', 279, 349, 419, 4, 19),
(282, 'Spicy Paneer Cheese Blast Burst', 'A pizza loaded with spicy paneer, a fiery sauce, and an explosive cheese burst.', 'images/prod_photo/spicy_paneer_cheese_blast_burst.jpg', 287, 359, 431, 4, 19),
(283, 'Fiery Paneer & Corn Cheese Burst', 'Sweet corn, spicy paneer, and peppers with a cheesy burst crust for a mix of flavors.', 'images/prod_photo/fiery_paneer_corn_cheese_burst.jpg', 271, 339, 407, 4, 19),
(284, 'Blazing Paneer Cheese Burst', 'A fiery pizza with paneer, peppers, and an abundance of melted cheese in the crust.', 'images/prod_photo/blazing_paneer_cheese_burst.jpg', 279, 349, 419, 4, 19),
(285, 'Jalapeño Paneer Cheese Burst', 'Paneer and jalapeños for a bold, spicy flavor, with a burst of cheese in every bite.', 'images/prod_photo/jalapeno_paneer_cheese_burst.jpg', 287, 359, 431, 4, 19);
/*----------------------------------------------------------------------------------------------------------------------------------*/
/*category paneer supreme(4) and sub_category spicy pizza(20)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(286, 'Fiery Tandoori Paneer Supreme', 'Features tandoori-marinated paneer, onions, capsicum, and a tandoori sauce base with extra heat.', 'images/prod_photo/fiery_tandoori_paneer_supreme.jpg', 287, 359, 431, 4, 20),
(287, 'Spicy Paneer Makhani Blast', 'Combines a rich and creamy Makhani sauce base with fiery Peri-Peri spiced paneer, extra peppers, and chili flakes.', 'images/prod_photo/spicy_paneer_makhani_blast1.jpg', 295, 369, 443, 4, 20),
(288, 'Achari Paneer Firestorm', 'A tangy and intensely spicy pizza with an achari (pickle) flavored sauce, paneer, and hot peppers.', 'images/prod_photo/achari_paneer_firestorm.jpg', 287, 359, 431, 4, 20),
(289, 'Chili Paneer Volcano', 'An Indo-Chinese fusion pizza with extra-spicy Schezwan sauce, paneer, and a mix of fiery chiles.', 'images/prod_photo/chili_paneer_volcano.jpg', 295, 369, 443, 4, 20),
(290, 'Southern Fiery Paneer Supreme', 'A spicy pizza with marinated paneer, green capsicum, tomatoes, and a sauce bursting with traditional southern spices.', 'images/prod_photo/southern_fiery_paneer_supreme1.jpg', 287, 359, 431, 4, 20),
(291, 'Volcanic Paneer Fury', 'An extra-spicy pizza with paneer and a mix of fiery peppers and chili flakes, for a truly volcanic experience.', 'images/prod_photo/volcanic_paneer_fury1.jpg', 295, 369, 443, 4, 20),
(292, 'Spicy Paneer Masala Supreme', 'Richly spiced paneer, onions, tomatoes, and aromatic spices with an extra spicy kick.', 'images/prod_photo/spicy_paneer_masala_supreme.jpg', 287, 359, 431, 4, 20),
(293, 'Red Chilli Paneer Blast', 'A pizza loaded with red chili sauce, marinated paneer cubes, and a powerful spicy punch.', 'images/prod_photo/red_chilli_paneer_blast.jpg', 287, 359, 431, 4, 20),
(294, 'Peri Peri Paneer Heatwave', 'A spicy and zesty pizza featuring Peri-Peri paneer cubes, capsicum, onions, and jalapeños, with an added layer of fiery intensity.', 'images/prod_photo/peri_peri_paneer_heatwave.jpg', 295, 369, 443, 4, 20),
(295, 'Jalapeño Paneer Popper Pizza', 'A fun fusion pizza with a creamy base, pickled jalapeños, paneer, and a spicy hit.', 'images/prod_photo/jalapeno_paneer_popper_pizza.jpg', 287, 359, 431, 4, 20),
(296, 'Habanero Paneer Supreme', 'A pizza for serious spice lovers, with a habanero-infused sauce, paneer, onions, and capsicum.', 'images/prod_photo/habanero_paneer_supreme.jpg', 303, 379, 455, 4, 20),
(297, 'Blazing Paneer & Corn Supreme', 'A sweet and spicy combination of golden corn, spicy paneer, and fiery peppers.', 'images/prod_photo/blazing_paneer_corn_supreme.jpg', 287, 359, 431, 4, 20),
(298, 'Spicy Paneer Fusion Fiesta', 'A bold mix of flavors, with spicy paneer, Mexican seasonings, jalapeños, and olives.', 'images/prod_photo/spicy_paneer_fusion_fiesta.jpg', 295, 369, 443, 4, 20),
(299, 'Peri Peri Paneer Fireball', 'Small, flavorful cubes of fiery Peri-Peri paneer, onions, and capsicum for a zesty, intense kick.', 'images/prod_photo/peri_peri_paneer_fireball1.jpg', 287, 359, 431, 4, 20),
(300, 'African Paneer Fiery', 'Inspired by Peri-Peri, this pizza features vibrant vegetables and a fiercely hot, spicy paneer.', 'images/prod_photo/african_paneer_fiery.jpg', 295, 369, 443, 4, 20);

/*category paneer supreme(4) and sub_category Only Pizza Slice(21)*/
INSERT INTO product_master_tbl 
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(301, 'Tandoori Paneer Slice', 'A classic slice featuring smoky tandoori-marinated paneer, onions, and capsicum.', 'images/prod_photo/tandoori_paneer_slice.jpg', 129, 249, 329, 4, 21),
(302, 'Makhani Paneer Slice', 'A creamy and rich slice with a Makhani sauce base and spiced paneer.', 'images/prod_photo/makhani_paneer_slice.jpg', 129, 249, 329, 4, 21),
(303, 'Peppy Paneer Slice', 'Features chunky paneer, crisp capsicum, and spicy red pepper, inspired by Domino''s.', 'images/prod_photo/peppy_paneer_slice.jpg', 129, 249, 329, 4, 21),
(304, 'Achari Paneer Slice', 'A tangy and spicy slice with achari (pickle) flavor, paneer, and onions.', 'images/prod_photo/achari_paneer_slice.jpg', 129, 249, 329, 4, 21),
(305, 'Kadhai Paneer Slice', 'A slice with a Kadhai sauce base, marinated paneer, onions, and capsicum.', 'images/prod_photo/kadhai_paneer_slice.jpg', 129, 249, 329, 4, 21),
(306, 'Desi Paneer Slice', 'A simple, homemade-style slice with spiced paneer, onions, and tomatoes.', 'images/prod_photo/desi_paneer_slice.jpg', 129, 249, 329, 4, 21),
(307, 'Royal Spice Paneer Slice', 'An indulgent slice with richly spiced paneer, onions, and aromatic spices.', 'images/prod_photo/royal_spice_paneer_slice.jpg', 129, 249, 329, 4, 21),
(308, 'Masala Paneer Slice', 'A simple and classic slice with flavorful masala-spiced paneer.', 'images/prod_photo/masala_paneer_slice.jpg', 129, 249, 329, 4, 21),
(309, 'Peri Peri Paneer Slice', 'A spicy and zesty slice featuring Peri-Peri paneer cubes, capsicum, and onions.', 'images/prod_photo/peri_peri_paneer_slice1.jpg', 139, 259, 339, 4, 21),
(310, 'Chili Paneer Sizzle Slice', 'An Indo-Chinese fusion slice with spicy Schezwan sauce, paneer, and mixed vegetables.', 'images/prod_photo/chili_paneer_sizzle_slice.jpg', 139, 259, 339, 4, 21),
(311, 'Volcanic Paneer Slice', 'An extra-spicy slice with paneer and a mix of fiery peppers and chili flakes.', 'images/prod_photo/volcanic_paneer_slice1.jpg', 139, 259, 339, 4, 21),
(312, 'Spicy Paneer Blast Slice', 'A slice loaded with spicy paneer cubes and a fiery sauce.', 'images/prod_photo/spicy_paneer_blast_slice.jpg', 139, 259, 339, 4, 21),
(313, 'Jalapeño Paneer Slice', 'A slice with paneer, jalapeños, and a bold, spicy flavor.', 'images/prod_photo/jalapeno_paneer_slice.jpg', 139, 259, 339, 4, 21),
(314, 'Fiery Paneer & Corn Slice', 'A sweet and spicy slice with golden corn and spicy paneer.', 'images/prod_photo/fiery_paneer_corn_slice.jpg', 139, 259, 339, 4, 21),
(315, 'Red Chilli Paneer Slice', 'A slice with a red chili sauce base, marinated paneer cubes, and a powerful spicy punch.', 'images/prod_photo/red_chilli_paneer_slice.jpg', 139, 259, 339, 4, 21);

/*category Margherita Classic (5) and sub_category veg pizza(22)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(316, 'Margherita Bufalina', 'The classic made with creamy buffalo mozzarella, which adds a richer flavor.', 'images/prod_photo/margherita_bufalina.jpg', 299, 319, 339, 5, 22),
(317, 'Margherita San Marzano', 'Emphasizes the use of high-quality San Marzano tomatoes for an authentic, sweeter sauce.', 'images/prod_photo/margherita_san_marzano.jpg', 299, 319, 339, 5, 22),
(318, 'Margherita Caprese', 'Features fresh mozzarella, sliced tomatoes, and basil, sometimes adding a balsamic glaze after baking.', 'images/prod_photo/margherita_caprese.jpg', 299, 319, 339, 5, 22),
(319, 'Margherita Ricotta', 'Adds creamy dollops of ricotta cheese for a richer texture.', 'images/prod_photo/margherita_ricotta.jpg', 299, 319, 339, 5, 22),
(320, 'Margherita con Aglio', 'The classic is enhanced with a hint of fresh garlic for an extra layer of flavor.', 'images/prod_photo/margherita_con_aglio.jpg', 299, 319, 339, 5, 22),
(321, 'Heirloom Tomato Margherita', 'Showcases a variety of colorful and flavorful heirloom tomatoes.', 'images/prod_photo/heirloom_tomato_margherita.jpg', 299, 319, 339, 5, 22),
(322, 'Margherita al Forno', 'Simply means "Margherita from the oven," emphasizing the fresh, hot preparation.', 'images/prod_photo/margherita_al_forno.jpg', 299, 319, 339, 5, 22),
(323, 'Basilico Fresco', 'Highlights the fresh basil, which is a key flavor in a classic Margherita.', 'images/prod_photo/basilico_fresco.jpg', 279, 299, 319, 5, 22),
(324, 'Pomodoro & Mozzarella', 'Focuses on the simple, core ingredients of tomato and mozzarella.', 'images/prod_photo/pomodoro_mozzarella.jpg', 279, 299, 319, 5, 22),
(325, 'Napoli Classico', 'A nod to Naples, the birthplace of the Margherita pizza.', 'images/prod_photo/napoli_classico.jpg', 279, 299, 319, 5, 22),
(326, 'Herb Garden Pizza', 'A Margherita with an assortment of fresh herbs from the garden, not just basil.', 'images/prod_photo/herb_garden_pizza.jpg', 279, 299, 319, 5, 22),
(327, 'The Tricolore', 'Named after the three colors of the Italian flag (red, white, and green).', 'images/prod_photo/the_tricolore.jpg', 279, 299, 319, 5, 22),
(328, 'Simple & Fresh Pizza', 'A name that promises a clean and uncomplicated flavor.', 'images/prod_photo/simple_fresh_pizza.jpg', 279, 299, 319, 5, 22),
(329, 'Fresh Mozzarella Bliss', 'Focuses on the fresh, delicate flavor of the mozzarella cheese.', 'images/prod_photo/fresh_mozzarella_bliss.jpg', 279, 299, 319, 5, 22),
(330, 'Margherita Ortolana', 'A gardeners Margherita, with a simple topping of grilled zucchini and eggplant.', 'images/prod_photo/margherita_ortolana.jpg', 309, 329, 349, 5, 22);

/*category Margherita Classic (5) and sub_category cheese pizza(23)*/
INSERT INTO product_master_tbl 
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(331, 'Triple Cheese Margherita', 'Features a blend of three cheeses, such as mozzarella, Parmigiano-Reggiano, and provolone, for extra depth.', 'images/prod_photo/triple_cheese_margherita.jpg', 349, 399, 449, 5, 23),
(332, 'Margherita Burrata', 'A decadent pizza where a ball of fresh burrata is added after baking, melting over the hot pizza for an extra creamy texture.', 'images/prod_photo/margherita_burrata.jpg', 359, 409, 459, 5, 23),
(333, 'Margherita Bufalina', 'The classic made with creamy buffalo mozzarella, which adds a richer flavor and is the traditional cheese for this pizza.', 'images/prod_photo/margherita_bufalina1.jpg', 349, 399, 449, 5, 23),
(334, 'Four Cheese Margherita', 'A Margherita with a blend of four cheeses, often including mozzarella, gorgonzola, fontina, and Parmigiano-Reggiano.', 'images/prod_photo/four_cheese_margherita.jpg', 359, 409, 459, 5, 23),
(335, 'Smoked Mozzarella Margherita', 'Uses smoked mozzarella for a deeper, smokier flavor that complements the simple tomato and basil.', 'images/prod_photo/smoked_mozzarella_margherita.jpg', 349, 399, 449, 5, 23),
(336, 'Margherita & Ricotta Swirl', 'Adds creamy dollops of ricotta cheese in a swirl pattern, providing a richer, softer texture.', 'images/prod_photo/margherita_ricotta_swirl.jpg', 359, 409, 459, 5, 23),
(337, 'Margherita al Provolone', 'Uses a sharper, more flavorful provolone cheese instead of or in addition to mozzarella.', 'images/prod_photo/margherita_al_provolone.jpg', 349, 399, 449, 5, 23),
(338, 'Margherita Overload', 'A cheesy pizza with an extra-generous amount of mozzarella and other cheeses.', 'images/prod_photo/margherita_overload.jpg', 369, 419, 469, 5, 23),
(339, 'The Margherita Cheese Kingdom', 'A pizza fit for royalty, with an abundant topping of various cheeses.', 'images/prod_photo/margherita_cheese_kingdom.jpg', 369, 419, 469, 5, 23),
(340, 'Margherita Cheese Marvel', 'An amazing and marvelous pizza with a decadent cheese topping.', 'images/prod_photo/margherita_cheese_marvel.jpg', 369, 419, 469, 5, 23),
(341, 'The Ultimate Cheese Margherita', 'The ultimate cheese experience on a Margherita base.', 'images/prod_photo/ultimate_cheese_margherita.jpg', 369, 419, 469, 5, 23),
(342, 'Deluxe Cheese Margherita', 'An upscale combination of high-quality cheeses on a classic Margherita.', 'images/prod_photo/deluxe_cheese_margherita.jpg', 369, 419, 469, 5, 23),
(343, 'Margherita Cheesy Dream', 'Emphasizes the rich, gooey, and satisfying melted cheese.', 'images/prod_photo/margherita_cheesy_dream.jpg', 369, 419, 469, 5, 23),
(344, 'Margherita Caprese Burrata', 'The classic caprese-style pizza with a luxurious ball of fresh burrata.', 'images/prod_photo/margherita_caprese_burrata.jpg', 359, 409, 459, 5, 23),
(345, 'Margherita Bianca Formaggi', 'A "white" Margherita with a cheese blend, but no tomato sauce, just olive oil, fresh tomatoes, and mozzarella.', 'images/prod_photo/margherita_bianca_formaggi.jpg', 359, 409, 459, 5, 23);

/*category Margherita Classic (5) and sub_category maina pizza(24)*/
INSERT INTO product_master_tbl
(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(346, 'Classic Margherita Mania', 'The essential Margherita—simple tomato sauce, mozzarella, and basil.', 'images/prod_photo/classic_margherita_mania.jpg', 299, 349, 399, 5, 24),
(347, 'Plain Jane Margherita', 'A straightforward, no-frills version with just the core ingredients.', 'images/prod_photo/plain_jane_margherita.jpg', 299, 349, 399, 5, 24),
(348, 'Basic Margherita', 'A simple, uncomplicated option for a quick bite.', 'images/prod_photo/basic_margherita.jpg', 299, 349, 399, 5, 24),
(349, 'Tomato & Mozzarella Mania', 'Highlights the two main toppings in a budget-friendly format.', 'images/prod_photo/tomato_mozzarella_mania.jpg', 299, 349, 399, 5, 24),
(350, 'Mania Margherita', 'A straightforward fusion of the "mania" concept and the classic Margherita.', 'images/prod_photo/mania_margherita.jpg', 299, 349, 399, 5, 24),
(351, 'Simply Basil & Cheese', 'Focuses on the two most prominent flavors alongside the sauce.', 'images/prod_photo/simply_basil_cheese.jpg', 299, 349, 399, 5, 24),
(352, 'The Original Mania', 'The original classic Margherita recipe, in a smaller, more affordable size.', 'images/prod_photo/original_mania.jpg', 299, 349, 399, 5, 24),
(353, 'The Cheerful Classic', 'A simple, happy name for a classic, comforting pizza.', 'images/prod_photo/cheerful_classic.jpg', 299, 349, 399, 5, 24),
(354, 'Simply Red, White & Green', 'Refers to the classic colors of the Italian flag.', 'images/prod_photo/red_white_green.jpg', 299, 349, 399, 5, 24),
(355, 'Napoli Original Mania', 'A nod to Naples, the birthplace of the pizza, in a simple version.', 'images/prod_photo/napoli_original_mania.jpg', 299, 349, 399, 5, 24),
(356, 'Margherita Mania with Onion', 'A classic with a simple and flavorful addition of chopped onion.', 'images/prod_photo/margherita_mania_onion.jpg', 309, 359, 409, 5, 24),
(357, 'Margherita Mania with Olives', 'Adds a few briny olives for a taste of the Mediterranean.', 'images/prod_photo/margherita_mania_olives.jpg', 309, 359, 409, 5, 24),
(358, 'Margherita Mania with Garlic', 'Infused with a hint of garlic for an extra layer of flavor.', 'images/prod_photo/margherita_mania_garlic.jpg', 309, 359, 409, 5, 24),
(359, 'Margherita Mania with Oregano', 'Topped with a sprinkle of oregano for a simple, earthy touch.', 'images/prod_photo/margherita_mania_oregano.jpg', 309, 359, 409, 5, 24),
(360, 'Margherita Mania with Basil Sprinkles', 'A minimal, yet fresh, basil garnish for flavor and color.', 'images/prod_photo/margherita_mania_basil.jpg', 309, 359, 409, 5, 24);

/*category Margherita Classic (5) and sub_category spicy pizza(25)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo,price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(361, 'Diavola Margherita',      'A "devils" Margherita with a spicy chili kick.',           'images/prod_photo/diavola_margherita.jpg',      329, 379, 429, 5, 25),
(362, 'Margherita Inferno',     'Intensely spicy Margherita with a fiery sauce base.',      'images/prod_photo/margherita_inferno.jpg',      329, 379, 429, 5, 25),
(363, 'Spicy Basilico',         'Classic Margherita with fresh basil and a zesty, spicy flavor.', 'images/prod_photo/spicy_basilico.jpg',   329, 379, 429, 5, 25),
(364, 'Margherita Piccante',    'A straightforward spicy Margherita with red pepper flakes.', 'images/prod_photo/margherita_piccante.jpg', 329, 379, 429, 5, 25),
(365, 'Calabrese Margherita',   'Margherita with spicy Calabrian chili paste for distinctive flavor.', 'images/prod_photo/calabrese_margherita.jpg', 329, 379, 429, 5, 25),
(366, 'Arrabbiata Margherita',  'Inspired by spicy "angry" sauce with chili peppers and garlic.', 'images/prod_photo/arrabbiata_margherita.jpg', 329, 379, 429, 5, 25),
(367, 'Volcanic Margherita',    'Extra-spicy Margherita with a mix of fiery ingredients.',  'images/prod_photo/volcanic_margherita.jpg',    329, 379, 429, 5, 25),
(368, 'Margherita with Hot Honey', 'A drizzle of sweet and spicy hot honey for a complex flavor.', 'images/prod_photo/margherita_hot_honey.jpg', 329, 379, 429, 5, 25),
(369, 'Fiery Margherita',       'Bold Margherita with a significant spicy kick.',           'images/prod_photo/fiery_margherita.jpg',       329, 379, 429, 5, 25),
(370, 'Margherita Red Pepper',  'Simple Margherita with red pepper flakes for heat.',       'images/prod_photo/margherita_red_pepper.jpg',  329, 379, 429, 5, 25),
(371, 'Margherita Jalapeño',    'Margherita topped with fresh or pickled jalapeños.',       'images/prod_photo/margherita_jalapeno.jpg',    339, 389, 439, 5, 25),
(372, 'Margherita con Peperoncino', 'Classic Margherita with crushed red pepper flakes.',  'images/prod_photo/margherita_peperoncino.jpg', 339, 389, 439, 5, 25),
(373, 'Margherita with Hot Peppers', 'Pizza with a mix of hot peppers for extra heat.',    'images/prod_photo/margherita_hot_peppers.jpg', 339, 389, 439, 5, 25),
(374, 'Margherita Chili Blast', 'Pizza loaded with chili peppers and spicy sauce.',        'images/prod_photo/margherita_chili_blast.jpg', 339, 389, 439, 5, 25),
(375, 'Margherita Onion & Chili', 'Classic combo of onion and chili for a spicy flavor.',  'images/prod_photo/margherita_onion_chili.jpg', 339, 389, 439, 5, 25);

/*category Margherita Classic (5) and sub_category only pizza slice(26)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo,price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(376, 'Classic Margherita Slice', 'The essential slice with tomato sauce, mozzarella, and fresh basil.', 'images/prod_photo/classic_margherita_slice.jpg', 339, 389, 439, 5, 26),
(377, 'Basilico Fresco Slice', 'A slice highlighting the vibrant flavor of fresh basil.', 'images/prod_photo/basilico_fresco_slice.jpg', 339, 389, 439, 5, 26),
(378, 'Simply Veg Slice', 'A straightforward Margherita with a couple of added simple veggie toppings.', 'images/prod_photo/simply_veg_slice.jpg', 339, 389, 439, 5, 26),
(379, 'Pomodoro & Mozzarella Slice', 'Focuses on the simple, core ingredients.', 'images/prod_photo/pomodoro_mozzarella_slice.jpg', 339, 389, 439, 5, 26),
(380, 'The Tricolore Slice', 'Named after the three colors of the Italian flag.', 'images/prod_photo/the_tricolore_slice.jpg', 339, 389, 439, 5, 26),
(381, 'Herb Garden Slice', 'A Margherita slice with an assortment of fresh herbs.', 'images/prod_photo/herb_garden_slice.jpg', 339, 389, 439, 5, 26),
(382, 'Cherry Tomato & Basil Slice', 'Uses sweet cherry tomatoes instead of a sauce base.', 'images/prod_photo/cherry_tomato_basil_slice.jpg', 339, 389, 439, 5, 26),
(383, 'Margherita Rustica Slice', 'A rustic slice with chunky tomatoes and fresh basil.', 'images/prod_photo/margherita_rustica_slice.jpg', 339, 389, 439, 5, 26),
(384, 'Roasted Garlic Margherita Slice', 'Adds the rich, sweet flavor of roasted garlic cloves.', 'images/prod_photo/roasted_garlic_margherita_slice.jpg', 339, 389, 439, 5, 26),
(385, 'Spinach Margherita Slice', 'A simple addition of sautéed spinach for a nutritious twist.', 'images/prod_photo/spinach_margherita_slice.jpg', 339, 389, 439, 5, 26),
(386, 'Margherita with Rucola Slice', 'A classic slice topped with fresh, peppery arugula after baking.', 'images/prod_photo/margherita_with_rucola_slice.jpg', 339, 389, 439, 5, 26),
(387, 'Margherita with Olives Slice', 'Adds the briny flavor of black olives.', 'images/prod_photo/margherita_with_olives_slice.jpg', 339, 389, 439, 5, 26),
(388, 'Margherita Ortolana Slice', 'A "gardener''s" slice with grilled zucchini and eggplant.', 'images/prod_photo/margherita_ortolana_slice.jpg', 339, 389, 439, 5, 26),
(389, 'Margherita Pesto Swirl Slice', 'A simple slice with a swirl of fresh basil pesto.', 'images/prod_photo/margherita_pesto_swirl_slice.jpg', 339, 389, 439, 5, 26),
(390, 'Caprese Slice', 'Features fresh mozzarella, sliced tomatoes, and basil.', 'images/prod_photo/caprese_slice.jpg', 339, 389, 439, 5, 26);


/*category Stuffed Garlic Bread (6) and sub_category garlic brad(27)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo,price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(391, 'Garlic Cheese Pull', 'A straightforward name emphasizing the gooey, stretchy cheese inside.', 'images/prod_photo/garlic_cheese_pull.jpg', 299, 349, 399, 6, 27),
(392, 'Four Cheese Garlic Dream', 'A rich blend of four cheeses, such as mozzarella, provolone, parmesan, and cheddar.', 'images/prod_photo/four_cheese_garlic_dream.jpg', 299, 349, 399, 6, 27),
(393, 'Mozzarella Meltdown', 'Highlights the satisfying, melted mozzarella cheese.', 'images/prod_photo/mozzarella_meltdown.jpg', 299, 349, 399, 6, 27),
(394, 'Ricotta Garlic Twist', 'Stuffed with a creamy, rich ricotta and herb filling.', 'images/prod_photo/ricotta_garlic_twist.jpg', 299, 349, 399, 6, 27),
(395, 'Creamy Garlic Heaven', 'Uses a blend of cream cheese and herbs for a smooth, creamy center.', 'images/prod_photo/creamy_garlic_heaven.jpg', 299, 349, 399, 6, 27),
(396, 'Smoked Provolone Garlic Loaf', 'Adds a smoky flavor to the cheesy filling.', 'images/prod_photo/smoked_provolone_garlic_loaf.jpg', 299, 349, 399, 6, 27),
(397, 'Ultimate Cheese Stuffer', 'A pizza with an abundance of cheese and a cheesy-stuffed crust.', 'images/prod_photo/ultimate_cheese_stuffer.jpg', 299, 349, 399, 6, 27),
(398, 'Garlic Knot Cheese Ball', 'A cheesy, stuffed version of a classic garlic knot.', 'images/prod_photo/garlic_knot_cheese_ball.jpg', 299, 349, 399, 6, 1),
(399, 'Garlic Parmesan Breadstick', 'A stuffed breadstick with a filling of parmesan and herbs.', 'images/prod_photo/garlic_parmesan_breadstick.jpg', 299, 349, 399, 6, 27),
(400, 'Cheesy Garlic Surprise', 'A fun and descriptive name for a cheese-stuffed bread.', 'images/prod_photo/cheesy_garlic_surprise.jpg', 299, 349, 399, 6, 1),
(401, 'Jalapeño Popper Bread', 'Inspired by the classic appetizer, with a creamy, spicy jalapeño and cream cheese filling.', 'images/prod_photo/jalapeno_popper_bread.jpg', 299, 349, 399, 6, 27),
(402, 'Spicy Chorizo Stuffer', 'Features spicy chorizo (or vegetarian chorizo) and cheese inside.', 'images/prod_photo/spicy_chorizo_stuffer.jpg', 299, 349, 399, 6, 27),
(403, 'Fiery Pepperoni Burst', 'Filled with pepperoni, mozzarella, and a spicy kick.', 'images/prod_photo/fiery_pepperoni_burst.jpg', 299, 349, 399, 6, 27),
(404, 'Arrabbiata Garlic Roll', 'A spicy tomato sauce, chili flakes, and cheese filling.', 'images/prod_photo/arrabbiata_garlic_roll.jpg', 299, 349, 399, 6, 27),
(405, 'Habanero Heat Wave', 'For a truly spicy garlic bread, with habanero-infused cheese.', 'images/prod_photo/habanero_heat_wave1.jpg', 299, 349, 399, 6, 27);

/*category Desserts(7) and sub_category cake(28)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo,price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(406, 'Chocolate Fudge Cake', 'A rich, moist chocolate cake with a dense, fudge-like frosting.', 'images/prod_photo/chocolate_fudge_cake.jpg', 399, 449, 499, 7, 28),
(407, 'Red Velvet Cake', 'A buttermilk-based cake with subtle cocoa flavor and a vibrant red hue, topped with cream cheese frosting.', 'images/prod_photo/red_velvet_cake.jpg', 399, 449, 499, 7, 28),
(408, 'Carrot Cake', 'A spiced, moist cake with grated carrots, often including walnuts or pecans, topped with cream cheese frosting.', 'images/prod_photo/carrot_cake.jpg', 399, 449, 499, 7, 28),
(409, 'Black Forest Cake', 'A German chocolate cake layered with whipped cream and cherries, often with a cherry brandy soak.', 'images/prod_photo/black_forest_cake.jpg', 399, 449, 499, 7, 28),
(410, 'New York Cheesecake', 'A dense, creamy, and smooth cheesecake with a buttery graham cracker crust.', 'images/prod_photo/new_york_cheesecake.jpg', 399, 449, 499, 7, 28),
(411, 'Angel Food Cake', 'A very light, airy cake made with egg whites, flour, and sugar, often served with fruit.', 'images/prod_photo/angel_food_cake.jpg', 399, 449, 499, 7, 28),
(412, 'Pound Cake', 'A dense, buttery, and moist cake traditionally made with a pound each of flour, butter, eggs, and sugar.', 'images/prod_photo/pound_cake.jpg', 399, 449, 499, 7, 28),
(413, 'Pineapple Upside-Down Cake', 'A single-layer cake with pineapple rings and cherries caramelized on the bottom.', 'images/prod_photo/pineapple_upside_down_cake.jpg', 399, 449, 499, 7, 28),
(414, 'Coffee Cake', 'A moist cake, often with a streusel or crumb topping, and typically served with coffee.', 'images/prod_photo/coffee_cake.jpg', 399, 449, 499, 7, 28),
(415, 'German Chocolate Cake', 'A chocolate cake known for its decadent coconut-pecan frosting.', 'images/prod_photo/german_chocolate_cake.jpg', 399, 449, 499, 7, 28),
(416, 'Banana Layer Cake', 'A moist banana cake with caramel icing and a hint of spice.', 'images/prod_photo/banana_layer_cake.jpg', 399, 449, 499, 7, 28),
(417, 'Coconut Cake', 'A cake permeated with coconut flavor, from the cake layers to the coconut filling and frosting.', 'images/prod_photo/coconut_cake.jpg', 399, 449, 499, 7, 28),
(418, 'Italian Cream Cake', 'A buttermilk-based cake with coconut and pecans, frosted with a tangy cream cheese icing.', 'images/prod_photo/italian_cream_cake.jpg', 399, 449, 499, 7, 28),
(419, 'Hummingbird Cake', 'A dense, moist spice cake with bananas, pineapple, and pecans, topped with cream cheese frosting.', 'images/prod_photo/hummingbird_cake.jpg', 399, 449, 499, 7, 28),
(420, 'Boston Cream Pie', 'A two-layer sponge cake filled with custard or cream filling and topped with a chocolate glaze.', 'images/prod_photo/boston_cream_pie.jpg', 399, 449, 499, 7, 28);

/*category Desserts(7) and sub_category choco lava cake(29)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(421, 'Molten Chocolate Lava Cake', 'A classic molten chocolate cake with a gooey, warm center.', 'images/prod_photo/molten_chocolate_lava_cake.jpg', 349, 399, 449, 7, 29),
(422, 'Chocolate Fondant', 'A rich French-style chocolate cake with a molten center.', 'images/prod_photo/chocolate_fondant.jpg', 349, 399, 449, 7, 29),
(423, 'Chocolate Molleaux', 'French term meaning "soft chocolate", tender exterior with gooey inside.', 'images/prod_photo/chocolate_molleaux.jpg', 349, 399, 449, 7, 29),
(424, 'Volcano Cake', 'A fun molten chocolate cake that erupts chocolate when cut.', 'images/prod_photo/volcano_cake.jpg', 349, 399, 449, 7, 29),
(425, 'Chocolate Lava Surprise', 'A chocolate cake with a hidden molten center waiting to be discovered.', 'images/prod_photo/chocolate_lava_surprise.jpg', 349, 399, 449, 7, 29);

/*category Desserts(7) and sub_category cup cake(30)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(426, 'Red Velvet Royale', 'A classic red velvet cupcake with cream cheese frosting and a touch of elegance.', 'images/prod_photo/red_velvet_royale.jpg', 299, 349, 399, 7, 30),
(427, 'Chocolate Fudge Delight', 'A rich chocolate cupcake with dense fudge frosting for chocolate lovers.', 'images/prod_photo/chocolate_fudge_delight1.jpg', 299, 349, 399, 7, 30),
(428, 'Lemon Zest Zing', 'Bright citrusy lemon cupcake with a tangy lemon curd filling.', 'images/prod_photo/lemon_zest_zing.jpg', 299, 349, 399, 7, 30),
(429, 'Vanilla Bean Dream', 'Simple yet elegant vanilla cupcake featuring real vanilla bean paste.', 'images/prod_photo/vanilla_bean_dream.jpg', 299, 349, 399, 7, 30),
(430, 'Salted Caramel Swirl', 'Moist cupcake with a salted caramel center and caramel frosting.', 'images/prod_photo/salted_caramel_swirl.jpg', 299, 349, 399, 7, 30);

/*category Desserts(7) and sub_category softy(31)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(431, 'Vanilla Velvet', 'A simple and elegant name for the classic vanilla softy.', 'images/prod_photo/vanilla_velvet.jpg', 199, 219, 239, 7, 31),
(432, 'Chocolate Cloud', 'A light, fluffy chocolate soft-serve that''s a dream for chocolate lovers.', 'images/prod_photo/chocolate_cloud.jpg', 199, 219, 239, 7, 31),
(433, 'Strawberry Swirl', 'A delicate pink softy with a sweet strawberry flavor.', 'images/prod_photo/strawberry_swirl.jpg', 199, 219, 239, 7, 31),
(434, 'Butterscotch Bliss', 'A rich, buttery softy with a satisfying caramel flavor.', 'images/prod_photo/butterscotch_bliss.jpg', 199, 219, 239, 7, 31),
(435, 'Mango Tango', 'A sweet and tangy softy with a tropical mango flavor.', 'images/prod_photo/mango_tango1.jpg', 199, 219, 239, 7, 31);

/*category other itams(8) and sub_category party combo(32)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(436, 'The Family Feast', 'Two large pizzas with classic toppings, garlic bread, and a large bottle of soda.', 'images/prod_photo/family_feast.jpg', 1499, 1499, 1499, 8, 32),
(437, 'Party Pack Classic', 'Two medium pizzas, stuffed garlic bread, and two soft drinks.', 'images/prod_photo/party_pack_classic.jpg', 1299, 1299, 1299, 8, 32),
(438, 'Pizza Party Starter', 'One medium pizza, garlic breadsticks (x2), and dipping sauce.', 'images/prod_photo/pizza_party_starter.jpg', 999, 999, 999, 8, 32),
(439, 'The Ultimate Crowd-Pleaser', 'Two large signature pizzas, dessert pizza, two sides, and soda.', 'images/prod_photo/ultimate_crowd_pleaser.jpg', 1799, 1799, 1799, 8, 32),
(440, 'Combo Meal Extravaganza', 'Medium pizza, stuffed garlic bread, dessert pizza, and two soft drinks.', 'images/prod_photo/combo_meal_extravaganza.jpg', 1399, 1399, 1399, 8, 32),
(441, 'The Big Bite Combo', 'Extra-large pizza with three toppings, garlic bread, and large beverage.', 'images/prod_photo/big_bite_combo.jpg', 1599, 1599, 1599, 8, 32),
(442, 'Gathering Greatness', 'Three medium pizzas with assorted toppings and loaded cheesy bread.', 'images/prod_photo/gathering_greatness.jpg', 1699, 1699, 1699, 8, 32),
(443, 'The Large Group Special', 'Three large pizzas, dessert pizza, stuffed garlic bread, and large beverage.', 'images/prod_photo/large_group_special.jpg', 1999, 1999, 1999, 8, 32),
(444, 'Mega Meal Deal', 'Two extra-large pizzas, two sides, and a large soda.', 'images/prod_photo/mega_meal_deal.jpg', 2199, 2199, 2199, 8, 32),
(445, 'The Supreme Gathering', 'Extra-large Veggie Supreme pizza, stuffed garlic bread, and potato wedges.', 'images/prod_photo/supreme_gathering.jpg', 1899, 1899, 1899, 8, 32),
(446, 'Pizza Palooza Pack', 'Two medium pizzas, garlic breadsticks, and two soft drinks.', 'images/prod_photo/pizza_palooza_pack.jpg', 1399, 1399, 1399, 8, 32),
(447, 'The Feastival Combo', 'Two large pizzas with mixed toppings, dessert pizza, and two sides.', 'images/prod_photo/feastival_combo.jpg', 1599, 1599, 1599, 8, 32),
(448, 'The Blockbuster Bundle', 'Two medium pizzas, cheesy garlic bread, and two drinks/shakes.', 'images/prod_photo/blockbuster_bundle.jpg', 1299, 1299, 1299, 8, 32),
(449, 'Game Night Grub', 'Extra-large pizza with toppings, stuffed garlic bread, and large beverage.', 'images/prod_photo/game_night_grub.jpg', 1499, 1499, 1499, 8, 32),
(450, 'The Binge-Watchers Box', 'Medium specialty pizza, loaded potato wedges, and two soft drinks.', 'images/prod_photo/binge_watchers_box.jpg', 1199, 1199, 1199, 8, 32);

/*category other items(8) and sub_category meal for 1(33)*/
INSERT INTO product_master_tbl (prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(451, 'Solo Margherita', 'The simple, timeless pleasure of a personal Margherita pizza with a side.', 'images/prod_photo/solo_margherita.jpg', 349, 449, 549, 8, 33),
(452, 'The Classic Bite', 'A small classic pizza with one topping and a cold drink.', 'images/prod_photo/classic_bite.jpg', 359, 459, 559, 8, 33),
(453, 'My Pizza, My Way', 'A personal pizza with a customizable topping and a soft drink.', 'images/prod_photo/my_pizza_my_way.jpg', 369, 469, 569, 8, 33),
(454, 'Just for One', 'A straightforward combo of a personal pizza and your choice of beverage.', 'images/prod_photo/just_for_one.jpg', 349, 449, 549, 8, 33),
(455, 'The Lone Ranger', 'A classic pizza, a side of breadsticks, and a drink, perfect for a quiet night in.', 'images/prod_photo/lone_ranger.jpg', 379, 479, 579, 8, 33),
(456, 'The Original Solo', 'A simple and satisfying personal pizza with a classic topping and a shake.', 'images/prod_photo/original_solo.jpg', 359, 459, 559, 8, 33),
(457, 'My Go-To Meal', 'A reliable and quick meal option with a personal pizza and a drink.', 'images/prod_photo/my_go_to_meal.jpg', 349, 449, 549, 8, 33),
(458, 'Single & Ready to Mingle', 'A playful name for a personal-sized pizza and a side salad.', 'images/prod_photo/single_ready_to_mingle.jpg', 369, 469, 569, 8, 33),
(459, 'The Me-Time Treat', 'An indulgent pizza for one, with a dessert included.', 'images/prod_photo/me_time_treat.jpg', 399, 499, 599, 8, 33),
(460, 'The Solo Slicer', 'A personal pizza with a side of garlic bread and a cold drink.', 'images/prod_photo/solo_slicer.jpg', 359, 459, 559, 8, 33),
(461, 'Express Lunch', 'A fast and easy combo with a personal pizza and a side of your choice.', 'images/prod_photo/express_lunch.jpg', 349, 449, 549, 8, 33),
(462, 'The Quick Fix', 'Perfect for a quick, satisfying meal with a small pizza and a drink.', 'images/prod_photo/quick_fix.jpg', 339, 439, 539, 8, 33),
(463, 'Grab & Go', 'A combo of a personal pizza and a bottled drink, for a meal on the move.', 'images/prod_photo/grab_go.jpg', 329, 429, 529, 8, 33),
(464, 'The Office Break', 'A personal pizza, a side salad, and a soft drink for a quick office lunch.', 'images/prod_photo/office_break.jpg', 349, 449, 549, 8, 33),
(465, 'The Mid-Day Refuel', 'A personal pizza and a drink to get you through the rest of the day.', 'images/prod_photo/midday_refuel.jpg', 339, 439, 539, 8, 33);
/*-------------------------------------------------------------------------------------------------------------------------------*/
/*category other items(8) and sub_category 5 Course Launch Feast(34)*/
INSERT INTO product_master_tbl (prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(466, 'The Grand Inaugural Feast', 'A classic and elegant name for a special launch event. Includes: appetizer, soup/salad, personal gourmet pizza, dessert, and a drink.', 'images/prod_photo/grand_inaugural_feast.jpg', 699, 799, 899, 8, 34),
(467, 'The Chefs Launch Voyage', 'A curated dining experience highlighting the chefs specialties. Includes: unique starter, specialized salad, gourmet signature pizza, dessert, and beverage.', 'images/prod_photo/chefs_launch_voyage.jpg', 719, 819, 919, 8, 34),
(468, 'The Pizza Paradise Progressive', 'A progressive meal that moves through different flavor profiles, all pizza-centric. Includes: bruschetta-style pizza bread starter, green salad, gourmet pizza, dessert pizza slice, and a drink.', 'images/prod_photo/pizza_paradise_progressive.jpg', 729, 829, 929, 8, 34),
(469, 'The Five-Sensation Sampler', 'A feast designed to excite all five senses with varied textures and flavors. Includes: crunchy starter, refreshing soup, savory pizza, sweet dessert, and a cool drink.', 'images/prod_photo/five_sensation_sampler.jpg', 739, 839, 939, 8, 34),
(470, 'The Culinary Premiere', 'A sophisticated name for a premium, inaugural meal. Includes: gourmet appetizer, rich soup, personal deluxe pizza, fine dessert, and beverage.', 'images/prod_photo/culinary_premiere.jpg', 749, 849, 949, 8, 34),
(471, 'The Gastronomic Gala', 'A theatrical and indulgent meal for a special occasion. Includes: appetizer, salad, creative pizza, dessert, and drink.', 'images/prod_photo/gastronomic_gala.jpg', 759, 859, 959, 8, 34),
(472, 'The Grand Pizza Tour', 'A culinary journey through various pizza styles and Italian flavors. Includes: appetizer, Italian-dressed salad, gourmet pizza, dessert pizza, and drink.', 'images/prod_photo/grand_pizza_tour.jpg', 769, 869, 969, 8, 34),
(473, 'The Taste of the Town Launch', 'A launch meal celebrating local flavors or a new taste sensation. Includes: local-inspired starter, fresh salad, signature gourmet pizza, dessert, and unique beverage.', 'images/prod_photo/taste_of_the_town_launch.jpg', 779, 879, 979, 8, 34),
(474, 'The Inaugural Platter', 'A communal, platter-style feast for the launch. Includes: shared appetizer platter, large salad, large pizza for sharing, dessert platter, and large drink.', 'images/prod_photo/inaugural_platter.jpg', 799, 899, 999, 8, 34),
(475, 'The Launch Legacy', 'A premium meal that sets the standard for future offerings. Includes: premium appetizer, soup, high-end gourmet pizza, deluxe dessert, and craft beverage.', 'images/prod_photo/launch_legacy.jpg', 809, 909, 1009, 8, 34);
/*uper na badha baki*/
/*-------------------------------------------------------------------------------------------------------------------------------*/

/*category other items(8) and sub_category Burgers(35)*/
INSERT INTO product_master_tbl (prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id) VALUES
(476, 'Margherita Burger', 'A patty topped with fresh mozzarella, tomato, and basil, on a rustic Italian bun.', 'images/prod_photo/margherita_burger.jpg', 359, 409, 459, 8, 35),
(477, 'Pesto Perfection Burger', 'A patty with a pesto sauce base, mozzarella, and roasted peppers.', 'images/prod_photo/pesto_perfection_burger.jpg', 369, 419, 469, 8, 35),
(478, 'Rustic Italiano', 'Features a hearty patty with sundried tomatoes, provolone, and arugula.', 'images/prod_photo/rustic_italiano1.jpg', 379, 429, 479, 8, 35),
(479, 'Caprese Burger', 'Inspired by the classic salad, with fresh mozzarella, tomato, basil, and a balsamic glaze.', 'images/prod_photo/caprese_burger.jpg', 369, 419, 469, 8, 35),
(480, 'Bruschetta Burger', 'A burger with a garlic-infused base, topped with bruschetta mix, and mozzarella.', 'images/prod_photo/bruschetta_burger.jpg', 359, 409, 459, 8, 35),
(481, 'Polenta Patty Burger', 'Uses a crispy fried polenta patty, with mozzarella, and a robust marinara sauce.', 'images/prod_photo/polenta_patty_burger.jpg', 369, 419, 469, 8, 35),
(482, 'Italian Garlic Melt', 'A patty topped with extra cheese, roasted garlic, and Italian herbs.', 'images/prod_photo/italian_garlic_melt.jpg', 379, 429, 479, 8, 35),
(483, 'El Cheesy Clásico', 'A simple yet delicious patty with melted Mexican cheese blend, lettuce, and tomato.', 'images/prod_photo/el_cheesy_clasico.jpg', 349, 399, 449, 8, 35),
(484, 'Jalapeño Popper Burger', 'A patty topped with a creamy, spicy jalapeno and cream cheese mixture.', 'images/prod_photo/jalapeno_popper_burger.jpg', 359, 409, 459, 8, 35),
(485, 'Smoky Chipotle Burger', 'A burger with a smoky and spicy chipotle sauce base, corn, and a mix of cheese.', 'images/prod_photo/smoky_chipotle_burger.jpg', 369, 419, 469, 8, 35),
(486, 'Avocado Cream Dream', 'A patty topped with fresh avocado slices and a creamy, tangy cilantro-lime sauce.', 'images/prod_photo/avocado_cream_dream1.jpg', 379, 429, 479, 8, 35),
(487, 'Salsa Verde Burger', 'A tangy and spicy burger with a tomatillo and salsa verde base and cheese.', 'images/prod_photo/salsa_verde_burger.jpg', 369, 419, 469, 8, 35),
(488, 'Mexican Fiesta Burger', 'A vibrant patty with black beans, corn, onions, and spicy Mexican seasoning.', 'images/prod_photo/mexican_fiesta_burger.jpg', 379, 429, 479, 8, 35),
(489, 'Elote Caliente Burger', 'A street corn-inspired burger with roasted corn, cotija cheese, chili powder, and a lime drizzle.', 'images/prod_photo/elote_caliente_burger.jpg', 389, 439, 489, 8, 35),
(490, 'Habanero Heat Wave', 'A fiery burger with a habanero-infused sauce, cheese, and roasted peppers.', 'images/prod_photo/habanero_heat_wave2.jpg', 399, 449, 499, 8, 35);

/*category other items(8) and sub_category Pastas(36)*/
INSERT INTO product_master_tbl (prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(491, 'Pasta Caprese', 'Penne pasta with fresh mozzarella, cherry tomatoes, and basil, tossed in a light olive oil dressing.', 'images/prod_photo/pasta_caprese1.jpg', 359, 409, 459, 8, 36),
(492, 'Pesto Perfection', 'Fusilli pasta with a fresh basil pesto sauce, sundried tomatoes, and parmesan cheese.', 'images/prod_photo/pesto_perfection1.jpg', 369, 419, 469, 8, 36),
(493, 'Rustic Italiano', 'A hearty pasta dish with rustic marinara sauce, roasted garlic, and a medley of vegetables.', 'images/prod_photo/rustic_italiano2.jpg', 369, 419, 469, 8, 36),
(494, 'Ricotta Ravioli Rustica', 'Cheese-filled ravioli with a simple, rustic tomato sauce, topped with fresh basil.', 'images/prod_photo/ricotta_ravioli_rustica1.jpg', 379, 429, 479, 8, 36),
(495, 'Creamy Mushroom and Herb', 'Fettuccine pasta in a creamy mushroom and herb sauce, with a hint of garlic.', 'images/prod_photo/creamy_mushroom_herb1.jpg', 379, 429, 479, 8, 36),
(496, 'Polenta Pasta Bake', 'Baked polenta-based pasta with a rich marinara sauce and a cheesy topping.', 'images/prod_photo/polenta_pasta_bake1.jpg', 389, 439, 489, 8, 36),
(497, 'Zucchini and Garlic Linguine', 'Linguine pasta tossed with fresh zucchini, roasted garlic, and olive oil.', 'images/prod_photo/zucchini_garlic_linguine.jpg1', 369, 419, 469, 8, 36),
(498, 'Taco Pasta Supreme', 'Pasta shells with a cheesy, taco-seasoned tomato sauce, black beans, corn, and topped with a mix of salsa and sour cream.', 'images/prod_photo/taco_pasta_supreme1.jpg', 369, 419, 469, 8, 36),
(499, 'Smoky Chipotle Fiesta', 'Penne pasta tossed in a creamy, smoky chipotle sauce with roasted peppers, onions, and black beans.', 'images/prod_photo/smoky_chipotle_fiesta1.jpg', 379, 429, 479, 8, 36),
(500, 'Salsa Verde Penne', 'Penne pasta with a tangy and spicy salsa verde (tomatillo) sauce, topped with cotija cheese and fresh cilantro.', 'images/prod_photo/salsa_verde_penne1.jpg', 369, 419, 469, 8, 36),
(501, 'Jalapeño Popper Pasta Bake', 'A baked pasta dish with a creamy, spicy jalapeño and cream cheese sauce, topped with crunchy breadcrumbs.', 'images/prod_photo/jalapeno_popper_pasta_bake1.jpg', 379, 429, 479, 8, 36),
(502, 'Mexican Street Corn Mac', 'A creamy mac and cheese with roasted corn, cotija cheese, chili powder, and lime zest.', 'images/prod_photo/mexican_street_corn_mac1.jpg', 379, 429, 479, 8, 36),
(503, 'Fajita Pasta', 'Linguine or fettuccine pasta with sautéed onions, bell peppers, and Mexican spices, tossed in a creamy sauce.', 'images/prod_photo/fajita_pasta1.jpg', 379, 429, 479, 8, 36),
(504, 'Avocado Cream Dream', 'A pasta dish with a creamy avocado-lime sauce, topped with diced tomatoes and fresh cilantro.', 'images/prod_photo/avocado_cream_dream2.jpg', 369, 419, 469, 8, 36),
(505, 'Enchilada Pasta Bake', 'A baked pasta with a rich enchilada sauce, layered with corn tortillas, cheese, and a medley of vegetables.', 'images/prod_photo/enchilada_pasta_bake1.jpg', 389, 439, 489, 8, 36);
/*-------------------------------------------------------------------------------------------------------------------------------*/

/*category other items(8) and sub_category pizza cup cake(37)*/
INSERT INTO product_master_tbl (prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(506, 'Mini Margherita Bites', 'The simple classic with tomato sauce, mozzarella, and fresh basil, in a mini cup.', 'images/prod_photo/mini_margherita_bites.jpg', 199, 229, 249, 8, 37),
(507, 'Pizza Party Starters', 'A fun name for a crowd-pleasing and easy-to-eat appetizer.', 'images/prod_photo/pizza_party_starters.jpg', 199, 229, 249, 8, 37),
(508, 'Cheesy Bread Bomb', 'Melted, gooey cheese center in a pizza cup.', 'images/prod_photo/cheesy_bread_bomb.jpg', 209, 239, 259, 8, 37),
(509, 'The Pizza Cupcake Classic', 'Traditional, tomato-based pizza cup.', 'images/prod_photo/the_pizza_cupcake_classic.jpg', 199, 229, 249, 8, 37),
(510, 'Mini Mushroom & Onion', 'A savory cup with mushrooms, onions, and cheese.', 'images/prod_photo/mini_mushroom_onion.jpg', 209, 239, 259, 8, 37),
(511, 'Rustic Pizza Cups', 'Hearty, rustic-style pizza cupcake with chunky tomato sauce.', 'images/prod_photo/rustic_pizza_cups.jpg', 219, 249, 269, 8, 37),
(512, 'The Pizza Muffin', 'Muffin-style savory pizza cup.', 'images/prod_photo/the_pizza_muffin.jpg', 219, 249, 269, 8, 37),
(513, 'Garlic Herb Bread Cup', 'Savory cup with garlic-herb crust and cheesy center.', 'images/prod_photo/garlic_herb_bread_cup.jpg', 219, 249, 269, 8, 37),
(514, 'Pizza Bites', 'Small, bite-sized pizza cupcakes.', 'images/prod_photo/pizza_bites.jpg', 199, 229, 249, 8, 37),
(515, 'Cupcake Caprese', 'Inspired by classic Italian salad with mozzarella, cherry tomatoes, and basil.', 'images/prod_photo/cupcake_caprese.jpg', 209, 239, 259, 8, 37),
(516, 'Veggie Supreme Mini', 'Loaded with bell peppers, onions, olives, and mushrooms.', 'images/prod_photo/veggie_supreme_mini.jpg', 229, 259, 279, 8, 6),
(517, 'Loaded Pizza Cups', 'Pizza cupcake packed with toppings.', 'images/prod_photo/loaded_pizza_cups.jpg', 239, 269, 289, 8, 37),
(518, 'Supreme Overload Bites', 'Loaded veggie supreme pizza flavor in cupcake size.', 'images/prod_photo/supreme_overload_bites.jpg', 239, 269, 289, 8, 37),
(519, 'The Works Pizza Cup', 'Pizza cupcake with all veggie toppings.', 'images/prod_photo/the_works_pizza_cup.jpg', 249, 279, 299, 8, 37),
(520, 'Pizza Feast Cup', 'Indulgent, loaded pizza cupcake mini feast.', 'images/prod_photo/pizza_feast_cup.jpg', 249, 279, 299, 8, 37),
(521, 'Tandoori Paneer Mini', 'Fusion with tandoori-marinated paneer and creamy sauce.', 'images/prod_photo/tandoori_paneer_mini.jpg', 239, 269, 289, 8, 37),
(522, 'Mexican Fiesta Cup', 'Black bean base, corn, onions, and spicy Mexican cheese.', 'images/prod_photo/mexican_fiesta_cup.jpg', 239, 269, 289, 8, 37),
(523, 'Pesto Perfection Cup', 'Pesto base with mozzarella and tomatoes.', 'images/prod_photo/pesto_perfection_cup.jpg', 239, 269, 289, 8, 37),
(524, 'Spinach and Feta Sensation', 'Spinach, feta cheese, Mediterranean flavor.', 'images/prod_photo/spinach_feta_sensation.jpg', 239, 269, 289, 8, 37),
(525, 'BBQ Paneer Bites', 'Smoky BBQ sauce base, vegetarian chicken, and cheese.', 'images/prod_photo/bbq_paneer_bites.jpg', 239, 269, 289, 8, 37);

/*category other items(8) and sub_category pizza cones(38)*/
INSERT INTO product_master_tbl (prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(526, 'Mini Margherita Cone', 'The simple classic with tomato sauce, mozzarella, and basil.', 'images/prod_photo/mini_margherita_cone.jpg', 199, 229, 249, 8, 38),
(527, 'The Classic Cone', 'Straightforward, no-fuss pizza cone with classic toppings.', 'images/prod_photo/the_classic_cone.jpg', 199, 229, 249, 8, 38),
(528, 'Cheesy Cone', 'A simple yet delicious cone with a melted cheese filling.', 'images/prod_photo/cheesy_cone.jpg', 199, 229, 249, 8, 38),
(529, 'Veggie Delight Cone', 'Mix of fresh, simple veggies like onions and peppers.', 'images/prod_photo/veggie_delight_cone.jpg', 209, 239, 259, 8, 38),
(530, 'Farm Fresh Cone', 'Cone with classic farmhouse vegetables like corn, olives, and mushrooms.', 'images/prod_photo/farm_fresh_cone.jpg', 209, 239, 259, 8, 38),
(531, 'Plain Jane Pizza Cone', 'No-frills option with just sauce and cheese.', 'images/prod_photo/plain_jane_pizza_cone.jpg', 199, 229, 249, 8, 38),
(532, 'The Original Cone', 'Essential pizza cone with classic tomato sauce base.', 'images/prod_photo/the_original_cone.jpg', 199, 229, 249, 8, 38),
(533, 'Golden Corn Cone', 'Highlights the sweet and simple flavor of golden corn.', 'images/prod_photo/golden_corn_cone.jpg', 209, 239, 259, 8, 38),
(534, 'Veggie Supreme Cone', 'Cone loaded with bell peppers, onions, olives, and mushrooms.', 'images/prod_photo/veggie_supreme_cone.jpg', 229, 259, 279, 8, 38),
(535, 'Supreme Overload Cone', 'Loaded veggie supreme pizza flavor in convenient cone format.', 'images/prod_photo/supreme_overload_cone.jpg', 239, 269, 289, 8, 38),
(536, 'Pizza Feast Cone', 'Indulgent, loaded pizza cone for a mini feast.', 'images/prod_photo/pizza_feast_cone.jpg', 239, 269, 289, 8, 38),
(537, 'The Works Cone', 'Pizza cone that has "the works" or all veggie toppings.', 'images/prod_photo/the_works_cone.jpg', 249, 279, 299, 8, 7),
(538, 'Loaded Pizza Cone', 'Pizza cone packed with toppings.', 'images/prod_photo/loaded_pizza_cone.jpg', 239, 269, 289, 8, 38),
(539, 'Overloaded Veggie Cone', 'Cone with extra-generous amount of fresh vegetables.', 'images/prod_photo/overloaded_veggie_cone.jpg', 239, 269, 289, 8, 38),
(540, 'Tandoori Paneer Cone', 'Indian-inspired fusion with tandoori-marinated paneer and creamy sauce.', 'images/prod_photo/tandoori_paneer_cone.jpg', 239, 269, 289, 8, 38),
(541, 'Mexican Fiesta Cone', 'Black bean base, corn, onions, and spicy Mexican cheese.', 'images/prod_photo/mexican_fiesta_cone.jpg', 239, 269, 289, 8, 38),
(542, 'Pesto Perfection Cone', 'Flavorful pesto base with mozzarella and tomatoes.', 'images/prod_photo/pesto_perfection_cone.jpg', 239, 269, 289, 8, 38),
(543, 'Spinach and Feta Cone', 'Savory cone with spinach, feta cheese, Mediterranean flavor.', 'images/prod_photo/spinach_feta_cone.jpg', 239, 269, 289, 8, 38),
(544, 'BBQ Paneer Cone', 'Smoky BBQ sauce base, vegetarian chicken, and cheese topping.', 'images/prod_photo/bbq_paneer_cone.jpg', 239, 269, 289, 8, 38),
(545, 'Spicy Peri-Peri Paneer Cone', 'Fiery fusion with Peri-Peri spiced paneer and colorful veggies.', 'images/prod_photo/spicy_peri_peri_paneer_cone.jpg', 239, 269, 289, 8, 38);

/*category other items(8) and sub_category mini pizza(39)*/
INSERT INTO product_master_tbl (prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(546, 'Mini Pizzetta Margherita', 'A classic bite-sized Margherita with fresh mozzarella, tomato, and basil.', 'images/prod_photo/mini_pizzetta_margherita.jpg', 199, 229, 249, 8, 39),
(547, 'Caprese Mini', 'Mini pizza with fresh mozzarella, cherry tomatoes, basil, and balsamic glaze.', 'images/prod_photo/caprese_mini.jpg', 199, 229, 249, 8, 39),
(548, 'Pesto Mini', 'Flavorful mini pizza with pesto sauce base, mozzarella, and sundried tomatoes.', 'images/prod_photo/pesto_mini.jpg', 199, 229, 249, 8, 39),
(549, 'Rustic Italiano Mini', 'Hearty mini pizza with rustic marinara sauce and roasted vegetables.', 'images/prod_photo/rustic_italiano_mini.jpg', 209, 239, 259, 8, 39),
(550, 'Mini Funghi', 'Earthy mini pizza with mushrooms, garlic, and mozzarella.', 'images/prod_photo/mini_funghi.jpg', 209, 239, 259, 8, 39),
(551, 'Garlic & Herb Mini', 'Simple and savory mini pizza with garlic-infused oil and Italian herbs.', 'images/prod_photo/garlic_herb_mini.jpg', 199, 229, 249, 8, 39),
(552, 'Mini Ortolana', 'Gardeners mini pizza with a mix of grilled vegetables.', 'images/prod_photo/mini_ortolana.jpg', 209, 239, 259, 8,398),
(553, 'Tricolore Mini', 'Colorful mini pizza named after Italian flag with tomato, mozzarella, and basil.', 'images/prod_photo/tricolore_mini.jpg', 209, 239, 259, 8, 39),
(554, 'Mexican Fiesta Mini', 'Vibrant mini pizza with black beans, corn, onions, and spicy Mexican cheese.', 'images/prod_photo/mexican_fiesta_mini.jpg', 229, 259, 279, 8, 39),
(555, 'Jalapeño Popper Mini', 'Cheesy and spicy mini pizza with cream cheese base, jalapeños, and cheese.', 'images/prod_photo/jalapeno_popper_mini.jpg', 229, 259, 279, 8, 39);

/*category beverages(9) and sub_category cold drinks(40)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(556, 'Classic Cola', 'The timeless and essential companion to any pizza.', 'images/prod_photo/classic_cola.jpg', 49, 59, 69, 9, 40),
(557, 'Zesty Lemonade', 'Refreshing, tangy lemonade that cuts through the richness of cheese.', 'images/prod_photo/zesty_lemonade.jpg', 59, 69, 79, 9, 40),
(558, 'Iced Tea Cooler', 'Cool, classic iced tea, perfect for a casual meal.', 'images/prod_photo/iced_tea_cooler.jpg', 59, 69, 79, 9, 40),
(559, 'Berry Bliss Smoothie', 'Simple and sweet blend of mixed berries.', 'images/prod_photo/berry_bliss_smoothie.jpg', 69, 79, 89, 9, 40),
(560, 'Lemon Lime Fizz', 'Zesty and effervescent soda that complements the savory pizza.', 'images/prod_photo/lemon_lime_fizz.jpg', 59, 69, 79, 9, 40),
(561, 'Orange Crush', 'Classic orange soda for a sweet and tangy pairing.', 'images/prod_photo/orange_crush.jpg', 59, 69, 79, 9, 40),
(562, 'Mango Tango', 'Sweet and tropical mango shake popular in India.', 'images/prod_photo/mango_tango2.jpg', 79, 89, 99, 9, 40),
(563, 'Strawberry Swirl Shake', 'Creamy and delightful strawberry shake.', 'images/prod_photo/strawberry_swirl_shake.jpg', 79, 89, 99, 9, 40),
(564, 'Tropical Breeze', 'Refreshing blend of tropical fruit juices like pineapple and orange.', 'images/prod_photo/tropical_breeze.jpg', 79, 89, 99, 9, 40),
(565, 'Watermelon Fresca', 'Light, refreshing, and natural watermelon drink.', 'images/prod_photo/watermelon_fresca.jpg', 69, 79, 89, 9, 40);

/*category beverages(9) and sub_category coffee(41)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(566, 'Classic Black Coffee', 'The straightforward, simple pleasure of a traditional black coffee.', 'images/prod_photo/classic_black_coffee.jpg', 79, 89, 99, 9, 41),
(567, 'Iced Coffee Cooler', 'A crisp, cold, and refreshing iced coffee, perfect for a meal.', 'images/prod_photo/iced_coffee_cooler.jpg', 89, 99, 109, 9, 41),
(568, 'Americano After-Slice', 'The smooth and balanced flavor of an Americano to follow your pizza.', 'images/prod_photo/americano_after_slice.jpg', 89, 99, 109, 9, 41),
(569, 'Espresso Shot', 'A powerful, concentrated shot of espresso for a quick lift.', 'images/prod_photo/espresso_shot.jpg', 79, 89, 99, 9, 41),
(570, 'Cappuccino Cream', 'The frothy, creamy delight of a cappuccino to cap off your meal.', 'images/prod_photo/cappuccino_cream.jpg', 99, 109, 119, 9, 41),
(571, 'Iced Latte Lift', 'A chilled and smooth latte for a creamy, cool finish.', 'images/prod_photo/iced_latte_lift.jpg', 99, 109, 119, 9, 41),
(572, 'Flat White Finish', 'A smooth, velvety flat white to provide a mellow end to your pizza.', 'images/prod_photo/flat_white_finish.jpg', 99, 109, 119, 9, 41),
(573, 'Mocha Melt', 'The delicious blend of chocolate and coffee for a decadent treat.', 'images/prod_photo/mocha_melt.jpg', 119, 129, 139, 9, 41),
(574, 'Pizza Perk-Up (Ristretto)', 'A short, concentrated, and flavorful shot of espresso for a quick boost.', 'images/prod_photo/pizza_perkup_ristretto.jpg', 89, 99, 109, 9, 41),
(575, 'The Lunchtime Lift (Doppio)', 'A double shot of espresso for an extra kick of energy.', 'images/prod_photo/lunchtime_lift_doppio.jpg', 99, 109, 119, 9, 41);

/*category beverages(9) and sub_category smoothy(42)*/
INSERT INTO product_master_tbl(prod_id, prod_name, prod_description, prod_photo, price_small, price_medium, price_large, cat_id, sub_cat_id)VALUES
(576, 'Strawberry Banana Bliss', 'A timeless combination of sweet strawberries and creamy banana.', 'images/prod_photo/strawberry_banana_bliss.jpg', 149, 159, 169, 9, 42),
(577, 'Berry Blast', 'A vibrant and refreshing medley of mixed berries.', 'images/prod_photo/berry_blast.jpg', 149, 159, 169, 9, 42),
(578, 'Mango Tango', 'A tropical and tangy smoothie that''s like a taste of paradise.', 'images/prod_photo/mango_tango.jpg', 149, 159, 169, 9, 42),
(579, 'Peachy Keen', 'A sweet and simple peach-flavored smoothie that''s delightfully refreshing.', 'images/prod_photo/peachy_keen.jpg', 149, 159, 169, 9, 42),
(580, 'Tropical Twist', 'A blend of tropical fruits like mango, pineapple, and banana.', 'images/prod_photo/tropical_twist.jpg', 149, 159, 169, 9, 42),
(581, 'Cookies and Cream Crush', 'A creamy smoothie with crushed cookies blended in for a classic flavor.', 'images/prod_photo/cookies_and_cream_crush.jpg', 169, 179, 189, 9, 42),
(582, 'Chocolate Fudge Delight', 'A rich and chocolatey smoothie that''s a perfect dessert.', 'images/prod_photo/chocolate_fudge_delight.jpg', 169, 179, 189, 9, 42),
(583, 'Nutty Butter Dream', 'A thick, satisfying smoothie with peanut butter, banana, and chocolate.', 'images/prod_photo/nutty_butter_dream.jpg', 169, 179, 189, 9, 42),
(584, 'Oreo Overload', 'A decadent smoothie packed with Oreo cookies and a creamy vanilla base.', 'images/prod_photo/oreo_overload.jpg', 169, 179, 189, 9, 42),
(585, 'Mocha Madness', 'A coffee-flavored smoothie blended with rich chocolate for an indulgent treat.', 'images/prod_photo/mocha_madness.jpg', 169, 179, 189, 9, 42);
