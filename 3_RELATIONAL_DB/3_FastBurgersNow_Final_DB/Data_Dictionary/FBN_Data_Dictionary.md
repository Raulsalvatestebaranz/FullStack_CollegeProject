# FastBurgersNow – Data Dictionary

This Data Dictionary defines all entities, fields, data types, constraints, and relationships 
for the FastBurgersNow relational database.

It is based on:
- Week02 Data Dictionary exercises
- Week03 FastBurgersNow case study (Task A–C)
- ERD specification defined in FastBurgersNow_ERD_Spec.md

---

## TABLE: CUSTOMER
| Field Name          | Data Type        | Size | PK | FK | Null | Description |
|--------------------|------------------|------|----|----|------|-------------|
| customer_id        | INT              |      | ✔  |    | NO   | Unique customer identifier |
| customer_firstname | VARCHAR          | 100  |    |    | NO   | Customer first name |
| customer_surname   | VARCHAR          | 100  |    |    | NO   | Customer last name |
| customer_address   | VARCHAR          | 200  |    |    | NO   | Address line |
| customer_postcode  | VARCHAR          | 20   |    |    | NO   | Postcode |
| customer_suburb    | VARCHAR          | 100  |    |    | NO   | Suburb / City |
| customer_email     | VARCHAR          | 150  |    |    | NO   | Email address |
| customer_mobile    | VARCHAR          | 20   |    |    | NO   | Mobile number |
| customer_allergy   | VARCHAR          | 200  |    |    | YES  | Allergy notes |

---

## TABLE: STAFF
| Field Name         | Data Type  | Size | PK | FK | Null | Description |
|-------------------|------------|------|----|----|------|-------------|
| staff_id          | INT        |      | ✔  |    | NO   | Unique staff ID |
| staff_firstname   | VARCHAR    | 100  |    |    | NO   | Staff first name |
| staff_surname     | VARCHAR    | 100  |    |    | NO   | Staff last name |
| role              | VARCHAR    | 50   |    |    | NO   | Staff role (Driver, Cook, etc.) |
| skill_type        | VARCHAR    | 100  |    |    | YES  | Skill category |
| skill_description | VARCHAR    | 200  |    |    | YES  | Skill description |
| company_id        | INT        |      |    | YES| YES  | Optional company association |

---

## TABLE: OUTLET
| Field Name     | Data Type | Size | PK | FK | Null | Description |
|----------------|-----------|------|----|----|------|-------------|
| outlet_id      | INT       |      | ✔  |    | NO   | Outlet ID |
| outlet_suburb  | VARCHAR   | 100  |    |    | NO   | Outlet location |
| outlet_phone   | VARCHAR   | 20   |    |    | NO   | Contact number |

---

## TABLE: MENU
| Field Name  | Data Type | Size | PK | FK | Null | Description |
|-------------|-----------|------|----|----|------|-------------|
| menu_no     | INT       |      | ✔  |    | NO   | Menu identifier |
| menu_name   | VARCHAR   | 100  |    |    | NO   | Menu name (Regular, Savers, Breakfast) |
| menu_type   | VARCHAR   | 50   |    |    | NO   | Menu type |

---

## TABLE: ITEM
| Field Name | Data Type | Size | PK | FK | Null | Description |
|------------|-----------|------|----|----|------|-------------|
| item_id    | INT       |      | ✔  |    | NO   | Item ID |
| item_name  | VARCHAR   | 100  |    |    | NO   | Item name |
| item_type  | VARCHAR   | 100  |    |    | NO   | Food/drink category |
| price      | DECIMAL   | 6,2  |    |    | NO   | Item price |
| menu_no    | INT       |      |    | ✔  | NO   | FK → MENU(menu_no) |

---

## TABLE: ORDER
| Field Name  | Data Type | Size | PK | FK | Null | Description |
|-------------|-----------|------|----|----|------|-------------|
| order_id    | INT       |      | ✔  |    | NO   | Unique order ID |
| customer_id | INT       |      |    | ✔  | NO   | FK → CUSTOMER |
| staff_id    | INT       |      |    | ✔  | NO   | FK → STAFF |
| outlet_id   | INT       |      |    | ✔  | NO   | FK → OUTLET |
| order_type  | VARCHAR   | 50   |    |    | NO   | Type (Delivery etc.) |
| order_time  | TIME      |      |    |    | NO   | Time of order |
| order_date  | DATE      |      |    |    | NO   | Date of order |

---

## TABLE: PAYMENT
| Field Name      | Data Type | Size | PK | FK | Null | Description |
|-----------------|-----------|------|----|----|------|-------------|
| payment_id      | INT       |      | ✔  |    | NO   | Unique payment ID |
| payment_amount  | DECIMAL   | 8,2  |    |    | NO   | Amount paid |
| payment_type    | VARCHAR   | 50   |    |    | NO   | Card/Cash |
| account_no      | VARCHAR   | 50   |    |    | YES | Account number |
| account_type    | VARCHAR   | 50   |    |    | YES | Account type |
| bsb_no          | VARCHAR   | 10   |    |    | YES | Bank BSB number |
| customer_id     | INT       |      |    | ✔  | NO  | FK → CUSTOMER |

---

## TABLE: ORDER_ITEM (junction)
| Field Name     | Data Type | Size | PK | FK | Null | Description |
|----------------|-----------|------|----|----|------|-------------|
| order_item_id  | INT       |      | ✔  |    | NO   | Junction ID |
| order_id       | INT       |      |    | ✔  | NO   | FK → ORDER |
| item_id        | INT       |      |    | ✔  | NO   | FK → ITEM |
| quantity       | INT       |      |    |    | NO   | Quantity ordered |

---
