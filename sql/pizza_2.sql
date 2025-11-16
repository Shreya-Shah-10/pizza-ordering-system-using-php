/* blog category */
INSERT INTO blog_category_tbl (blog_cat_id, blog_cat_name, blog_cat_description, blog_cat_photo) VALUES
(1, 'Pizza & Toppings', 'All about pizza toppings, flavors, and recipes', 'images/blog_cat_photo/pizza_toppings.jpg'),
(2, 'Food Pairings & Dining Tips', 'Best drinks and sides with pizza', 'images/blog_cat_photo/food_pairings.jpg'),
(3, 'Behind the Scenes', 'Kitchen stories, chefs, and pizza-making', 'images/blog_cat_photo/behind_scenes.jpg'),
(4, 'Health & Wellness', 'Healthy pizza choices and nutrition tips', 'images/blog_cat_photo/health_wellness.jpg'),
(5, 'Pizza Lifestyle & Culture', 'Pizza in daily life, festivals, and world culture', 'images/blog_cat_photo/lifestyle_culture.jpg'),
(6, 'Business & Innovation', 'Pizza business, AI tools, and marketing', 'images/blog_cat_photo/business_innovation.jpg');

/*blog_tbl query*/
INSERT INTO blog_tbl (blog_id, blog_title, blog_content, blog_photo, admin_id, blog_cat_id)
VALUES
(1, 'Top Pizza Toppings', 'Pizza is all about the toppings, and they can make or break the flavor experience. From classic favorites like mozzarella and pepperoni to adventurous options like paneer tikka and jalapeños, we explore the toppings that pizza lovers around the world crave. Learn about timeless combinations, modern twists, and discover new toppings that can elevate every slice—perfect for customizing your next pizza night.', './images/blog_photo/b1.jpg', 1, 1),

(2, 'Perfect Pizza Pairings', 'The right pairing can transform your pizza experience. Whether it''s a cheesy Margherita or a spicy BBQ Chicken pizza, choosing the perfect beverage or side dish enhances every bite. Explore our guide to top drink pairings, dipping sauces, and sides—from crisp salads and garlic bread to cold brews and mocktails. Learn how to create the ultimate pizza combo for maximum enjoyment.', './images/blog_photo/b2.jpg', 1, 2),

(3, 'Behind the Oven', 'Ever wondered what goes into crafting the perfect pizza? Step behind the scenes with our chefs as they demonstrate their craft—from kneading the dough to baking each pizza to perfection. Discover the techniques, fresh ingredients, and passion that go into every pie, and see how our culinary team brings flavor, consistency, and care to every slice.', './images/blog_photo/b3.jpg', 1, 3),

(4, 'Healthy Pizza Picks', 'Pizza doesn’t have to be indulgent to be delicious. In this blog, we explore healthier options that allow you to enjoy pizza guilt-free. From whole wheat and cauliflower crusts to low-fat cheeses and protein-rich, veggie-packed toppings, learn how to make choices that satisfy your cravings while keeping your meals nutritious and wholesome.', './images/blog_photo/b4.jpg', 1, 4),

(5, 'Eat Together, Bond Better', 'Pizza is more than food—it''s a social experience. Sharing a pizza fosters connection, whether it''s with family, friends, or coworkers. Explore the emotional and psychological benefits of eating together, and see how pizza brings people closer during birthdays, office lunches, or casual gatherings. Celebrate togetherness with every bite.', './images/blog_photo/b5.jpg', 1, 5),

(6, 'AI Tools for Business', 'Artificial Intelligence is transforming how startups and small businesses operate. From automating routine tasks to enhancing customer service and boosting productivity, AI offers practical solutions for modern businesses. Learn about the best AI tools for inventory management, customer behavior analysis, and marketing campaigns, and discover how to optimize operations with minimal effort and maximum results.', './images/blog_photo/b6.jpg', 1, 6),

(7, 'Why We Crave Pizza', 'What makes pizza so irresistible? From gooey melted cheese to perfectly baked crusts and savory sauces, the combination of flavors and textures triggers a unique craving. Explore the science behind pizza cravings, the psychology of comfort food, and why this universally loved dish continues to top our list of favorites.', './images/blog_photo/b7.jpg', 1, 1),

(8, 'Global Pizza Tour', 'Take a flavorful journey around the world as we explore international pizza styles. From Italy''s thin-crust Neapolitans to Japan''s mayonnaise-drizzled pies, and India''s spicy masala variants, pizza has adapted deliciously across cultures. Discover diverse toppings, styles, and traditions, and get inspired to try new flavors with every bite.', './images/blog_photo/b8.jpg', 1, 5),

(9, 'Desi Pizza Styles', 'India has put its unique twist on pizza, blending local flavors with classic techniques. From paneer and tandoori chicken to green chutney and masala-spiced bases, Desi-style pizzas bring bold flavors to every slice. Explore these innovative fusion pizzas and see how traditional Indian tastes meet pizza creativity for an unforgettable culinary experience.', './images/blog_photo/b9.jpg', 1, 1),

(10, 'Our Startup Story', 'Every successful brand has a story, and ours started with a dream to serve delicious, affordable pizzas made with love. From setting up our first kitchen and building a dedicated team to welcoming our first customers and growing through word of mouth, this blog shares our journey. Experience the passion, challenges, and commitment that fuel our expanding pizza family.', './images/blog_photo/b10.jpg', 1, 3);

/* article Categories */
INSERT INTO article_category_tbl (article_cat_id, article_cat_name, article_cat_description, article_cat_photo)
VALUES
-- 1. Toppings & Combinations
(1, 'Pizza Toppings & Combinations',
 'Guides and tips on choosing, mixing, and balancing pizza toppings for the perfect flavor and texture.',
 './images/article_cat_photo/toppings.jpg'),

-- 2. Global Pizza
(2, 'Pizza Around the World',
 'Explore pizza styles, traditions, and reviews from different countries and local pizzerias.',
 './images/article_cat_photo/global.jpg'),

-- 3. Homemade & DIY Pizza
(3, 'Homemade & DIY Pizza',
 'Step-by-step guides and expert tips for making restaurant-quality pizza at home.',
 './images/article_cat_photo/homemade.jpg'),

-- 4. Special Diets & Health
(4, 'Special Diet Pizzas',
 'Vegan, vegetarian, gluten-free, and other dietary-friendly pizza recipes and ideas.',
 './images/article_cat_photo/diet.jpg'),

-- 5. Creative & Unique Pizzas
(5, 'Creative Pizza Recipes',
 'Unique, innovative, and adventurous pizza recipes that go beyond traditional styles.',
 './images/article_cat_photo/creative.jpg'),

-- 6. Pizza Knowledge & Culture
(6, 'Pizza Knowledge & Culture',
 'Learn about the history, science, pairings, and cultural impact of pizza worldwide.',
 './images/article_cat_photo/culture.jpg');

/*article query*/
INSERT INTO article_tbl (article_id, article_title, article_content, article_photo, article_date, admin_id, article_cat_id)
VALUES
-- 1. Toppings Guide → Category: Pizza Toppings & Combinations (1)
(1, 'The Ultimate Guide to Pizza Toppings',
'Pizza toppings can make or break the perfect slice. From classic favorites like pepperoni, mushrooms, olives, and bell peppers to unique options such as spicy salami with capsicum or a breakfast pizza with eggs and bacon, toppings add personality and flavor. Understanding which combinations work best can elevate any pizza night, whether you are cooking at home or ordering out.

This guide goes beyond the usual choices to introduce creative and lesser-known toppings that bring excitement to the pizza table. We''ll cover complementary flavors, textures, and tips for balancing ingredients so each bite delivers maximum taste and satisfaction.',
'./images/article_photo/a1.jpg', '2024-03-14 10:22:00', 1, 1),

-- 2. Pizza Globally → Category: Pizza Around the World (2)
(2, 'Pizza Around the World: A Global Culinary Journey',
'Pizza is a global phenomenon, and each region has its unique spin on this beloved dish. From Brazil''s corn and cream cheese pizzas to Mexico''s spicy chorizo and jalapeño creations, and Australia''s bacon-and-egg pies, every country offers a delicious interpretation that reflects local tastes and ingredients.

Exploring these variations allows pizza lovers to experience new flavors and cooking techniques. This article also highlights how cultural preferences shape pizza preparation and presentation, making it a true culinary journey around the world in every slice.',
'./images/article_photo/a2.jpg', '2024-05-28 18:12:00', 1, 2),

-- 3. DIY Pizza → Category: Homemade & DIY Pizza (3)
(3, 'DIY Pizza Night: Tips for the Perfect Homemade Pizza',
'Making pizza at home can be fun, creative, and delicious. From kneading the dough to spreading sauce and adding toppings, each step offers an opportunity to experiment and perfect your personal pizza style. Using fresh ingredients and the right techniques ensures that your homemade pizza rivals any pizzeria.

This article provides practical tips for achieving the perfect crust, mastering sauce consistency, and exploring various topping combinations. Whether you''re baking in a traditional oven or a wood-fired setup, these DIY strategies help you enjoy the satisfaction of crafting a pizza from scratch.',
'./images/article_photo/a3.jpg', '2024-11-07 14:00:00', 1, 3),

-- 4. Diet Pizzas → Category: Special Diet Pizzas (4)
(4, 'Pizza for Every Diet: Vegan, Vegetarian, and Gluten-Free Options',
'Eating pizza doesn’t mean sacrificing your dietary goals. Vegan, vegetarian, and gluten-free options now make it easy to enjoy pizza while staying health-conscious. From a creamy vegan mushroom pizza using cashew cream to a cauliflower-based gluten-free crust, there''s something to satisfy every dietary preference.

This article explores a variety of healthy alternatives, including low-fat cheeses and protein-rich, veggie-loaded toppings. We offer practical tips to make these pizzas flavorful and fulfilling without compromising on taste, allowing everyone to enjoy guilt-free pizza indulgence.',
'./images/article_photo/a4.jpg', '2024-08-03 08:35:00', 1, 4),

-- 5. Creative Pizzas → Category: Creative Pizza Recipes (5)
(5, 'Beyond Cheese and Tomato: Creative Pizza Recipes',
'Traditional pizza combinations are timeless, but creativity can take your pizza experience to the next level. From butter chicken and poutine pizzas to smoked salmon with cream cheese, unique recipes can surprise and delight your taste buds.

This article encourages culinary experimentation by highlighting flavor pairings, presentation ideas, and adventurous ingredient choices. Trying these creative recipes can turn pizza night into a gourmet experience that goes beyond the ordinary.',
'./images/article_photo/a5.jpg', '2024-09-21 12:45:00', 1, 5),

-- 6. History of Pizza → Category: Pizza Knowledge & Culture (6)
(6, 'A History of Pizza: From Ancient Origins to Modern Marvels',
'Pizza has a rich and fascinating history that spans centuries. Originating in Naples, it has evolved into a global phenomenon enjoyed in countless variations. Interesting facts include pizza being the first food delivered to space and the Hawaiian pizza originating in Canada, reflecting pizza''s widespread cultural impact.

This article dives into pizza''s journey from its humble beginnings to its modern adaptations, exploring how cultural influences, technological advancements, and evolving tastes have shaped the pizzas we enjoy today.',
'./images/article_photo/a6.jpg', '2024-12-25 11:11:00', 1, 6),

-- 7. Pizza Pairings → Category: Pizza Knowledge & Culture (6)
(7, 'Pizza and Pairings: Best Drinks to Complement Your Pizza',
'Pairing the right beverage with pizza can enhance every bite. From beer with a classic pepperoni pizza to a crisp white wine with a vegetable-loaded Margherita, selecting complementary drinks elevates the dining experience.

This article also explores sauces and sides that perfectly accompany different pizza types. By understanding flavor harmony, you can create the ultimate pizza meal that satisfies every palate and setting.',
'./images/article_photo/a7.jpg', '2025-01-09 16:30:00', 1, 6),

-- 8. Pizza Science → Category: Pizza Knowledge & Culture (6)
(8, 'The Science of Pizza: Understanding the Chemistry of the Perfect Crust',
'Baking the perfect pizza involves more than ingredients—it''s science in action. Yeast fermentation, gluten development, and oven temperature all affect crust texture, flavor, and rise. Understanding these factors allows for consistent, high-quality results.

This article explains the technical aspects of pizza making in simple terms, offering tips for home cooks and aspiring chefs. By mastering the chemistry behind dough, you can achieve a crust that is crisp outside, soft inside, and utterly delicious.',
'./images/article_photo/a8.jpg', '2025-02-17 19:50:00', 1, 6),

-- 9. Local Reviews → Category: Pizza Around the World (2)
(9, 'Pizza Restaurant Review: A Deep Dive into Local Pizzerias',
'Exploring local pizza restaurants can uncover hidden gems and standout flavors. This article reviews pizzerias in detail, highlighting specialties, customer favorites, and unique culinary touches that make each place memorable.

We also provide guidance on what to try, what to skip, and tips for enjoying a well-rounded pizza experience. This review serves as a local guide for pizza enthusiasts looking for new dining adventures.',
'./images/article_photo/a9.jpg', '2025-04-03 20:00:00', 1, 2),

-- 10. Topping Combos → Category: Pizza Toppings & Combinations (1)
(10, 'The Art of Pizza Topping Combinations',
'Creating the perfect pizza topping combination is an art form. Balancing flavors, textures, and colors ensures each bite is enjoyable. From contrasting textures to complementary tastes, thoughtful combinations make pizza exciting and delicious.

This article explores classic and experimental topping arrangements, offering insights into how different ingredients interact. Tips on visual presentation and flavor layering help both home cooks and enthusiasts craft pizzas that are as beautiful as they are tasty.',
'./images/article_photo/a10.jpg', '2025-06-12 09:22:00', 1, 1);
