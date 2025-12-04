# 🌐 FastBurgersNow – Relational Database Project  
### **Edinburgh College | Relational Databases Module**  
### **Lecturer:** John Piperias  
### **Student:** _Your Name Here_  

---

## 📌 Table of Contents  
- [🧭 Project Overview](#-project-overview)  
- [🧩 Task A – ERD](#-task-a--entity-relationship-diagram-erd)  
- [📑 Task B – Data Dictionary & SQL DDL](#-task-b--data-dictionary--sql-ddl)  
- [🧪 Task C – SQL DML](#-task-c--sql-dml-insert-data)  
- [🚀 Task D – Jira Scrum Development Cycle](#-task-d--jira-scrum-development-cycle)  
- [🎓 Reflection Log](#-reflection-log)  
- [📦 Project Folder Structure](#-project-folder-structure)  
- [✔ Conclusion](#-conclusion)  

---

# 🧭 Project Overview  

This repository contains the complete **FastBurgersNow (FBN)** relational database project for Weeks 01–03.

The project demonstrates:

- ✔ Database analysis  
- ✔ ERD modelling  
- ✔ Logical → physical database design  
- ✔ SQL implementation (DDL & DML)  
- ✔ Testing and validation  
- ✔ Scrum & Jira project management  
- ✔ Professional documentation  

---

# 🧩 Task A – Entity Relationship Diagram (ERD)

## ✔ ERD Specification  
📄 `3_RELATIONAL_DB/3_FastBurgersNow_Final_DB/ERD/FastBurgersNow_ERD_Spec.md`

---

## ✔ Identified Entities  

| Entity      | Description                                |
|-------------|--------------------------------------------|
| customer    | Registered customer placing orders         |
| staff       | Cook, driver, order staff, shift leader    |
| outlet      | FBN store location                         |
| menu        | Regular or saver menu                      |
| item        | Food or drink product                      |
| order       | Customer order                             |
| payment     | Payment info                               |
| order_item  | Junction table for Order ↔ Item            |

---

## ✔ Key Relationships  

- **CUSTOMER 1:M ORDER**  
- **STAFF 1:M ORDER**  
- **OUTLET 1:M ORDER**  
- **CUSTOMER 1:M PAYMENT**  
- **MENU 1:M ITEM**  
- **ORDER M:N ITEM** *(via ORDER_ITEM)*  

---

## ✔ ERD Diagram  
🖼 `FastBurgersNow_ERD.png` *(to be added)*  

---

# 📑 Task B – Data Dictionary & SQL DDL

## ✔ Data Dictionary  
📄 `FBN_Data_Dictionary.md`  
Includes attributes, types, sizes, PK/FK, nullability, and descriptions.

---

## ✔ SQL DDL Files  
📁 `3_FastBurgersNow_Final_DB/SQL_DDL/`

Scripts include:

- `create_customer.sql`  
- `create_staff.sql`  
- `create_outlet.sql`  
- `create_menu.sql`  
- `create_item.sql`  
- `create_order.sql`  
- `create_payment.sql`  
- `create_order_item.sql`  

---

## ✔ Combined Create Script  
📄 `FBN_create_all_tables.sql`

---

# 🧪 Task C – SQL DML (Insert Data)

## ✔ Insert Scripts  
📁 `3_FastBurgersNow_Final_DB/SQL_DML/`

Scripts include:

- `insert_customer.sql`  
- `insert_staff.sql`  
- `insert_outlet.sql`  
- `insert_menu.sql`  
- `insert_item.sql`  
- `insert_order.sql`  
- `insert_payment.sql`  
- `insert_order_item.sql`  

---

## ✔ Combined Insert Script  
📄 `FBN_insert_all_data.sql`  

---

## ✔ Required Screenshots  
📁 `3_FastBurgersNow_Final_DB/Screenshots/`

- `customer_table.png`  
- `order_table.png`  
- `item_table.png`  

---

# 🚀 Task D – Jira Scrum Development Cycle

## ✔ Jira Files  
📁 `3_RELATIONAL_DB/4_Jira_Scrum_Project/`

Includes:

- `Epics_and_Tasks.md`  
- `JIRA_Stages_Table.md`  
- `JIRA_Task_Data_Development_Cycle.md`  
- `Scrum_Sprint_Table.md`  
- `JIRA_Evidence/` *(screenshots to be added)*  

---

## ✔ Evidence Screenshots (to be added)

- `timeline.png`  
- `backlog.png`  
- `board.png`  
- `people.png`  

---

## ✔ Summary  

| Sprint Detail      | Value                      |
|--------------------|----------------------------|
| Duration           | 6 weeks                    |
| Template           | Jira SCRUM                |
| Methodology        | Agile                      |
| Stages             | Requirements → Analysis → Design → Implementation → Testing → Documentation |

---

# 🎓 Reflection Log  
📄 `3_FastBurgersNow_Final_DB/Reflection/lessons_learned.md`

---

# 📦 Project Folder Structure  
*(Insert output using `tree /F` here)*  

---

# ✔ Conclusion  

This project demonstrates strong proficiency in:

- ✔ ERD modelling  
- ✔ Database design  
- ✔ SQL DDL & DML scripting  
- ✔ Data testing and validation  
- ✔ Jira Scrum project management  
- ✔ Documentation and workflow tracking  

This fulfills **all requirements** of the FastBurgersNow case study (Tasks A–D).

---
