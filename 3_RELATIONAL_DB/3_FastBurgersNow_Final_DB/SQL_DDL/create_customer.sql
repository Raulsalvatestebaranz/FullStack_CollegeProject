-- ============================================
-- TABLE: CUSTOMER
-- Based on ERD & Data Dictionary (Task A–C)
-- ============================================

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
