-- ============================================
-- TABLE: PAYMENT
-- ============================================

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
