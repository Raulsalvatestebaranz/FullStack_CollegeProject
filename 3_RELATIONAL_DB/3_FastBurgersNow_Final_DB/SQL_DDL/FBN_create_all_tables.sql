-- FULL FASTBURGERSONOW DB CREATION SCRIPT

-- CUSTOMER
CREATE TABLE customer (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_firstname VARCHAR(100) NOT NULL,
    customer_surname VARCHAR(100) NOT NULL,
    customer_address VARCHAR(200) NOT NULL,
    customer_postcode VARCHAR(20) NOT NULL,
    customer_suburb VARCHAR(100) NOT NULL,
    customer_email VARCHAR(150) NOT NULL,
    customer_mobile VARCHAR(20) NOT NULL,
    customer_allergy VARCHAR(200)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- STAFF
CREATE TABLE staff (
    staff_id INT AUTO_INCREMENT PRIMARY KEY,
    staff_firstname VARCHAR(100) NOT NULL,
    staff_surname VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL,
    skill_type VARCHAR(100),
    skill_description VARCHAR(200),
    company_id INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- OUTLET
CREATE TABLE outlet (
    outlet_id INT AUTO_INCREMENT PRIMARY KEY,
    outlet_suburb VARCHAR(100) NOT NULL,
    outlet_phone VARCHAR(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- MENU
CREATE TABLE menu (
    menu_no INT AUTO_INCREMENT PRIMARY KEY,
    menu_name VARCHAR(100) NOT NULL,
    menu_type VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ITEM
CREATE TABLE item (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(100) NOT NULL,
    item_type VARCHAR(100) NOT NULL,
    price DECIMAL(6,2) NOT NULL,
    menu_no INT NOT NULL,
    FOREIGN KEY (menu_no) REFERENCES menu(menu_no)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ORDER
CREATE TABLE order (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT NOT NULL,
    staff_id INT NOT NULL,
    outlet_id INT NOT NULL,
    order_type VARCHAR(50) NOT NULL,
    order_time TIME NOT NULL,
    order_date DATE NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customer(customer_id)
        ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (staff_id) REFERENCES staff(staff_id)
        ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (outlet_id) REFERENCES outlet(outlet_id)
        ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- PAYMENT
CREATE TABLE payment (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    payment_amount DECIMAL(8,2) NOT NULL,
    payment_type VARCHAR(50) NOT NULL,
    account_no VARCHAR(50),
    account_type VARCHAR(50),
    bsb_no VARCHAR(10),
    customer_id INT NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customer(customer_id)
        ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ORDER_ITEM
CREATE TABLE order_item (
    order_item_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    item_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (order_id) REFERENCES order(order_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (item_id) REFERENCES item(item_id)
        ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
