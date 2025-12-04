-- ============================================
-- TABLE: ITEM
-- ============================================

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
