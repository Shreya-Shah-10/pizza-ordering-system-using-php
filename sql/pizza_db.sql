
CREATE TABLE user_master_tbl (
    user_id INT(5) NOT NULL AUTO_INCREMENT,  -- Primary Key, auto-incremented
    user_name VARCHAR(150) NOT NULL,
    user_email VARCHAR(150),
    user_address VARCHAR(250),
    user_pincode VARCHAR(150),
    user_mobile VARCHAR(20),
    user_password VARCHAR(50) NOT NULL,
    user_photo VARCHAR(150),
    PRIMARY KEY (user_id)
);

CREATE TABLE category_tbl (
    cat_id INT(5) NOT NULL AUTO_INCREMENT,  -- Primary Key, auto-incremented
    cat_name VARCHAR(150) NOT NULL,
    cat_description VARCHAR(150),
    cat_photo VARCHAR(150),
    PRIMARY KEY (cat_id)
);

CREATE TABLE sub_category_tbl (
    sub_cat_id INT(5) NOT NULL AUTO_INCREMENT,  -- Primary Key, auto-incremented
    sub_cat_name VARCHAR(150) NOT NULL,
    sub_cat_description VARCHAR(250),
    sub_cat_photo VARCHAR(150),
    cat_id INT(5),
    PRIMARY KEY (sub_cat_id),
    FOREIGN KEY (cat_id) REFERENCES category_tbl(cat_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);
ALTER TABLE sub_category_tbl ADD price DECIMAL(10,2) DEFAULT 0;

CREATE TABLE product_master_tbl (
    prod_id          INT(5) AUTO_INCREMENT PRIMARY KEY,
    prod_name        VARCHAR(150) NOT NULL,
    prod_description VARCHAR(250),
    prod_photo       VARCHAR(150),
    price_small      INT(6) NOT NULL DEFAULT 0,
    price_medium     INT(6) NOT NULL DEFAULT 0,
    price_large      INT(6) NOT NULL DEFAULT 0,
    cat_id           INT(50) NOT NULL,
    sub_cat_id       INT(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE review_master_tbl (
    review_id INT(5) NOT NULL AUTO_INCREMENT,  -- Primary Key, auto-incremented
    review_message VARCHAR(250) NOT NULL,
    prod_id INT(5),
    review_photo VARCHAR(150),
    review_date VARCHAR(50),
    user_id INT(5),
    PRIMARY KEY (review_id),
    FOREIGN KEY (prod_id) REFERENCES product_master_tbl(prod_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES user_master_tbl(user_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);
CREATE TABLE order_master_tbl (
    order_id INT(5) NOT NULL AUTO_INCREMENT,        -- Primary Key, auto-incremented
    prod_id INT(5),
    user_id INT(5),
    prod_qty INT(10) NOT NULL,
    total_price INT(50) NOT NULL,
    order_date VARCHAR(50),
    prod_price INT(50),
    PRIMARY KEY (order_id),
    FOREIGN KEY (prod_id) REFERENCES product_master_tbl(prod_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES user_master_tbl(user_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);
/*article_category*/
CREATE TABLE article_category_tbl (
    article_cat_id INT PRIMARY KEY,
    article_cat_name VARCHAR(100) NOT NULL,
    article_cat_description TEXT,
    article_cat_photo VARCHAR(255)
);

CREATE TABLE admin_tbl (
    admin_id INT(5) NOT NULL AUTO_INCREMENT,
    admin_name VARCHAR(100) NOT NULL,
    admin_email VARCHAR(100),
    admin_password VARCHAR(100) NOT NULL,
    admin_status VARCHAR(100),
    admin_photo VARCHAR(250),
    PRIMARY KEY (admin_id)
);

CREATE TABLE blog_category_tbl (
    blog_cat_id INT(5) NOT NULL AUTO_INCREMENT,
    blog_cat_name VARCHAR(100) NOT NULL,
    blog_cat_description TEXT,
    blog_cat_photo VARCHAR(150),
    PRIMARY KEY (blog_cat_id)
);

CREATE TABLE blog_tbl (
    blog_id INT(5) NOT NULL AUTO_INCREMENT,
    blog_title VARCHAR(200) NOT NULL,
    blog_content TEXT NOT NULL,
    blog_photo VARCHAR(150),
    blog_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    admin_id INT(5),
    blog_cat_id INT(5), 
    PRIMARY KEY (blog_id),
    FOREIGN KEY (admin_id) REFERENCES admin_tbl(admin_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    FOREIGN KEY (blog_cat_id) REFERENCES blog_category_tbl(blog_cat_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL
);

CREATE TABLE comment_tbl (
    comment_id INT(5) NOT NULL AUTO_INCREMENT,
    blog_id INT(5),
    user_name VARCHAR(150) NOT NULL,
    user_email VARCHAR(150),
    comment_text VARCHAR(500) NOT NULL,
    comment_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (comment_id),
    FOREIGN KEY (blog_id) REFERENCES blog_tbl(blog_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

/*product comments*/
CREATE TABLE product_comments (
    comment_id INT AUTO_INCREMENT PRIMARY KEY,
    prod_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    comment TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE article_tbl (
    article_id INT(5) NOT NULL AUTO_INCREMENT,
    article_title VARCHAR(200) NOT NULL,
    article_content TEXT NOT NULL,
    article_photo VARCHAR(150),
    article_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    admin_id INT(5),
    article_cat_id INT(5),
    PRIMARY KEY (article_id),
    FOREIGN KEY (admin_id) REFERENCES admin_tbl(admin_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    FOREIGN KEY (article_cat_id) REFERENCES article_category_tbl(article_cat_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL
);


CREATE TABLE comment_tbl (
    comment_id INT(5) NOT NULL AUTO_INCREMENT,
    article_id INT(5),
    user_name VARCHAR(150) NOT NULL,
    user_email VARCHAR(150),
    comment_text VARCHAR(500) NOT NULL,
    comment_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (comment_id),
    FOREIGN KEY (article_id) REFERENCES article_tbl(article_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);
-- Table to store order summary
CREATE TABLE IF NOT EXISTS orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    order_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    total_price DECIMAL(10, 2) NOT NULL
);

-- Table to store individual items of each order
CREATE TABLE IF NOT EXISTS order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    item_name VARCHAR(255) NOT NULL,
    qty INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(order_id) ON DELETE CASCADE
);

/*menu items in menu page*/
CREATE TABLE menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    image VARCHAR(255),
    price DECIMAL(10,2),
    category ENUM('best_menu', 'pricing') DEFAULT 'best_menu'
);

CREATE TABLE pizza_recipes_tbl (
    recipe_id INT(5) NOT NULL AUTO_INCREMENT,
    recipe_title VARCHAR(200) NOT NULL,
    recipe_content TEXT NOT NULL,
    recipe_photo VARCHAR(150),
    recipe_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    admin_id INT(5),
    PRIMARY KEY (recipe_id),
    FOREIGN KEY (admin_id) REFERENCES admin_tbl(admin_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL
);

CREATE TABLE cooking_tips_tbl (
    tip_id INT(5) NOT NULL AUTO_INCREMENT,
    tip_title VARCHAR(200) NOT NULL,
    tip_content TEXT NOT NULL,
    tip_photo VARCHAR(150),
    tip_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    admin_id INT(5),
    PRIMARY KEY (tip_id),
    FOREIGN KEY (admin_id) REFERENCES admin_tbl(admin_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL
);

CREATE TABLE contact_us (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    message_type ENUM(
        'Complaint',
        'Feedback - Good',
        'Feedback - Bad',
        'Other Inquiry',
        'Customer Idea - Business Growth'
    ) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES user_master_tbl(user_id)
);

CREATE TABLE cart_master_tbl (
    cart_id INT(5) AUTO_INCREMENT PRIMARY KEY,
    prod_id INT(5) NOT NULL,
    user_id INT(5) NOT NULL,
    prod_qty INT(11) NOT NULL,
    prod_price DECIMAL(10,2) NOT NULL,
    total_price DECIMAL(10,2) NOT NULL
);

CREATE TABLE customize_pizza_tbl (
    customize_id INT(11) AUTO_INCREMENT PRIMARY KEY,     -- Unique ID for each customized pizza
    customize_name VARCHAR(150) NOT NULL,               -- Custom pizza name (e.g., "My Special Pizza")
    customize_description VARCHAR(250) DEFAULT NULL,    -- Any notes from customer
    customize_photo VARCHAR(150) DEFAULT NULL,          -- Optional photo or generated preview
    price DECIMAL(10,2) NOT NULL DEFAULT 0,            -- Single price for the pizza
    cat_id INT(50) NOT NULL,                            -- Link to category (Small/Medium/Large base)
    sub_cat_id INT(50) NOT NULL,                        -- Link to topping (or last topping selected)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,     -- When the pizza was customized
    FOREIGN KEY (cat_id) REFERENCES category_tbl(cat_id) ON DELETE CASCADE,
    FOREIGN KEY (sub_cat_id) REFERENCES sub_category_tbl(sub_cat_id) ON DELETE CASCADE
);
