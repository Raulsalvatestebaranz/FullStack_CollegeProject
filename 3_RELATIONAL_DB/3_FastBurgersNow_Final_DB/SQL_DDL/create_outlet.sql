-- ============================================
-- TABLE: OUTLET
-- ============================================

CREATE TABLE outlet (
    outlet_id INT AUTO_INCREMENT PRIMARY KEY,
    outlet_suburb VARCHAR(100) NOT NULL,
    outlet_phone VARCHAR(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
