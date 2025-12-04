-- FULL INSERT SCRIPT FOR FASTBURGERSONOW

-- INSERT CUSTOMERS
INSERT INTO customer 
    (customer_firstname, customer_surname, customer_address, customer_postcode, customer_suburb, customer_email, customer_mobile, customer_allergy)
VALUES
    ('John', 'Smith', '12 River Street', 'EH12 5AB', 'Edinburgh', 'john.smith@example.com', '07711112222', NULL),
    ('Maria', 'Lopez', '8 Queen Road', 'EH3 9DJ', 'Edinburgh', 'maria.lopez@example.com', '07733334444', 'Peanuts'),
    ('David', 'Campbell', '22 Ocean Drive', 'EH6 6JJ', 'Leith', 'david.c@example.com', '07755556666', NULL);

-- INSERT STAFF
INSERT INTO staff
    (staff_firstname, staff_surname, role, skill_type, skill_description, company_id)
VALUES
    ('Anna', 'Miller', 'Driver', 'Driving', 'Experienced delivery driver', 1),
    ('Robert', 'Johnson', 'Cook', 'Cooking', 'Expert in grill and fryer', 1);

-- INSERT OUTLETS
INSERT INTO outlet
    (outlet_suburb, outlet_phone)
VALUES
    ('Edinburgh Central', '0131 111 2222'),
    ('Leith', '0131 222 3333');

-- INSERT MENUS
INSERT INTO menu
    (menu_name, menu_type)
VALUES
    ('Regular Menu', 'Regular'),
    ('Breakfast Menu', 'Breakfast'),
    ('Savers Menu', 'Savers');

-- INSERT ITEMS
INSERT INTO item
    (item_name, item_type, price, menu_no)
VALUES
    ('Cheeseburger', 'Food', 4.99, 1),
    ('Latte', 'Drink', 2.49, 1),
    ('Bacon Roll', 'Food', 3.89, 2),
    ('Festive Fries', 'Food', 2.99, 3);

-- INSERT ORDERS (IMPORTANT: USE BACKTICKS!)
INSERT INTO order
    (customer_id, staff_id, outlet_id, order_type, order_time, order_date)
VALUES
    (1, 1, 1, 'Delivery', '12:30:00', '2024-01-05'),
    (2, 2, 2, 'Delivery', '18:45:00', '2024-01-06');

-- INSERT PAYMENTS
INSERT INTO payment
    (payment_amount, payment_type, account_no, account_type, bsb_no, customer_id)
VALUES
    (12.47, 'Card', '12345678', 'Visa', '082-001', 1),
    (18.89, 'Cash', NULL, NULL, NULL, 2);

-- INSERT ORDER ITEMS
INSERT INTO order_item
    (order_id, item_id, quantity)
VALUES
    (1, 1, 2),
    (1, 2, 1),
    (2, 4, 1);
