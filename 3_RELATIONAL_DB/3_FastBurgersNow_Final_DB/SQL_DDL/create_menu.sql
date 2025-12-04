-- ============================================
-- TABLE: MENU
-- ============================================

CREATE TABLE menu (
    menu_no INT AUTO_INCREMENT PRIMARY KEY,
    menu_name VARCHAR(100) NOT NULL,
    menu_type VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
