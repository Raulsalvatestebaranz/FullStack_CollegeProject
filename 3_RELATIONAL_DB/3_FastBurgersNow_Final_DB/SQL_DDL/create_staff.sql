-- ============================================
-- TABLE: STAFF
-- ============================================

CREATE TABLE staff (
    staff_id INT AUTO_INCREMENT PRIMARY KEY,
    staff_firstname VARCHAR(100) NOT NULL,
    staff_surname VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL,
    skill_type VARCHAR(100),
    skill_description VARCHAR(200),
    company_id INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
