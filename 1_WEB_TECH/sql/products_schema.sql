CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(150) NOT NULL,
    product_desc TEXT NOT NULL,
    product_price DECIMAL(8,2) NOT NULL,
    product_image VARCHAR(255)
);
