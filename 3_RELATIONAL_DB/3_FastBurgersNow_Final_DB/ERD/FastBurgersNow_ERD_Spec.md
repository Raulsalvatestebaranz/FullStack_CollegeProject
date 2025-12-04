# FastBurgersNow – ERD Specification (Text Version)

This file describes the complete Entity–Relationship structure for the FastBurgersNow (FBN) franchise database.

It includes:
- Entities (tables)
- Attributes
- Primary Keys (PK)
- Foreign Keys (FK)
- Relationship types (1:1, 1:M, M:N)
- Based on Week03 provided ERD diagrams and case study files.

---

## 1. CUSTOMER
**PK:** customer_id  
**Attributes:**
- customer_firstname  
- customer_surname  
- customer_address  
- customer_postcode  
- customer_suburb  
- customer_email  
- customer_mobile  
- customer_allergy (optional)

**Relationships:**
- 1 customer → many orders (1:M)
- 1 customer → many payments (1:M)

---

## 2. STAFF
**PK:** staff_id  
**Attributes:**
- staff_firstname  
- staff_surname  
- role  
- skill_type  
- skill_description  
- company_id (optional)

**Relationships:**
- 1 staff → many orders taken (1:M)

---

## 3. OUTLET
**PK:** outlet_id  
**Attributes:**
- outlet_suburb  
- outlet_phone  

**Relationships:**
- 1 outlet → many orders (1:M)

---

## 4. MENU
**PK:** menu_no  
**Attributes:**
- menu_name  
- menu_type  (e.g., Regular, Breakfast, Savers)

**Relationships:**
- 1 menu → many items (1:M)

---

## 5. ITEM
**PK:** item_id  
**FK:** menu_no → MENU.menu_no  
**Attributes:**
- item_name  
- item_type  
- price  

**Relationships:**
- 1 item can appear on many orders (via ORDER_ITEM)

---

## 6. ORDER
**PK:** order_id  
**FK:** customer_id → CUSTOMER.customer_id  
**FK:** staff_id → STAFF.staff_id  
**FK:** outlet_id → OUTLET.outlet_id  

**Attributes:**
- order_type  
- order_time  
- order_date  

**Relationships:**
- Order contains many items (M:N → ORDER_ITEM)

---

## 7. PAYMENT
**PK:** payment_id  
**FK:** customer_id → CUSTOMER.customer_id  
**Attributes:**
- payment_amount  
- payment_type  
- account_no  
- account_type  
- bsb_no  

**Relationships:**
- 1 customer → many payments (1:M)

---

## 8. ORDER_ITEM (junction table)
**PK:** order_item_id  
**FK:** order_id → ORDER.order_id  
**FK:** item_id  → ITEM.item_id  

**Attributes:**
- quantity  

**Relationships:**
- Many orders contain many items (M:N)

---

## ERD RELATIONSHIP SUMMARY

- CUSTOMER 1:M ORDER  
- CUSTOMER 1:M PAYMENT  
- STAFF 1:M ORDER  
- OUTLET 1:M ORDER  
- MENU 1:M ITEM  
- ORDER M:N ITEM (via ORDER_ITEM)

---

This specification will be used to:

1. Build the Data Dictionary  
2. Generate SQL DDL files  
3. Draw the final ERD in Draw.io  
4. Implement the FastBurgersNow database  
