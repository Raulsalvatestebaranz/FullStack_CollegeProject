# 🧪 Manual Test Cases — Testing Technologies Module

This document contains manual test cases for the practical exercises in the **Testing Technologies & Programming** module taught by **Jorge Correia**.

The tests apply to:
- JavaScript mini-projects  
- SQL Worksheet Queries  
- Cypress test preparation  
- Game challenges  

---

# 📁 Project: JavaScript Rock / Paper / Scissors Game

## 🎯 Test Objective
Verify that the RPS game correctly determines the winner based on user and computer choices.

## 🧪 Test Cases

### TC-RPS-01 — User Wins With Rock
| Step | Input | Expected Result |
|------|--------|-----------------|
| 1 | Player selects **Rock** | User choice displayed as Rock |
| 2 | Computer selects **Scissors** | Computer choice displayed as Scissors |
| 3 | Game checks rules | Result: **User Wins – Rock smashes Scissors** |

---

### TC-RPS-02 — Computer Wins With Paper
| Step | Input | Expected Result |
|------|--------|-----------------|
| 1 | Player selects **Rock** | User choice: Rock |
| 2 | Computer selects **Paper** | Computer choice: Paper |
| 3 | Game checks rules | Result: **Computer Wins – Paper covers Rock** |

---

### TC-RPS-03 — Draw Condition
| Step | Input | Expected Result |
|------|--------|-----------------|
| 1 | Player selects **Scissors** | User choice: Scissors |
| 2 | Computer selects **Scissors** | Computer choice: Scissors |
| 3 | Game checks rules | Result: **Draw** |

---

# 📁 Project: Find the Treasure Game

## 🎯 Test Objective
Verify that the “Treasure” door game selects correct outcomes.

## 🧪 Test Cases

### TC-TREASURE-01 — Player Wins
| Step | Input | Expected Result |
|------|--------|-----------------|
| 1 | Player clicks **Door 2** | Player door = 2 |
| 2 | System randomly assigns Treasure = 2 | Treasure door shown |
| 3 | Compare | **WIN** message displayed |

---

### TC-TREASURE-02 — Player Loses
| Step | Input | Expected Result |
|------|--------|-----------------|
| 1 | Player clicks **Door 1** | Player door = 1 |
| 2 | Treasure assigned = 3 | Display Treasure door |
| 3 | Compare | **LOSE** message displayed |

---

# 📁 SQL Testing — Week03 Worksheet

## 🎯 Objective
Validate SQL queries for correct output.

### TC-SQL-01 — SELECT All Customers  
| SQL | Expected |
|-----|----------|
| `SELECT * FROM customer;` | List of all customers |

### TC-SQL-02 — Join Two Tables  
| SQL | Expected |
|-----|----------|
| `SELECT * FROM item JOIN order_item USING(item_id);` | Items correctly joined with middle table |

### TC-SQL-03 — Join Three Tables  
| SQL | Expected |
|-----|----------|
| `SELECT * FROM customer JOIN ordering USING(customer_id) JOIN order_item USING(order_id);` | Combined result of customer orders with item details |

### TC-SQL-04 — Manager Catalogue  
| SQL | Expected |
|-----|----------|
| Custom join query | customer_id, customer_name, item_price displayed |

---

# 📝 Notes
- Add screenshots of your manual test execution here  
- Write down any bugs found during testing  
- Use this file to prepare for Cypress automated tests  

---

# 👨‍💻 Author
**Your Name – Software Testing Student**  
Edinburgh College (CodeSpace Bootcamp)

