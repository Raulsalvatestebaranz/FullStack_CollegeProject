# Calculator Alpha

Calculator Alpha is a refined version of the initial calculator challenge.  
It demonstrates a clean implementation of calculator logic, user-friendly  
interaction design, and automated testing using Cypress.

This version focuses on **correctness, clarity, and testability**, rather than  
just visual appearance.

---

## 🎯 Purpose

The goal of Calculator Alpha is to:

- Implement a calculator with **realistic behavior**
- Handle **operator precedence** and **parentheses**
- Provide **clear user feedback** for invalid operations
- Verify correctness through **automated end-to-end testing**

This project represents an improved, production-style approach compared to the  
initial calculator implementation.

---

## 🧠 Key Features

- Basic arithmetic operations: `+ − × ÷`
- Operator precedence (`× ÷` before `+ −`)
- Parentheses support with toggle behavior `( )`
- Implicit multiplication (e.g. `6(8+9)`)
- Backspace (`B`) for last input removal
- All Clear (`AC`) for full reset
- Graceful error handling (`ERR` for division by zero or invalid expressions)

---

## ⚙️ Technical Overview

- **HTML**: Semantic structure for calculator layout  
- **CSS**: Grid-based layout with clear visual hierarchy  
- **JavaScript**:
  - Expression-based evaluation (string-driven)
  - Single source of truth for calculator state
  - Safe evaluation with protection against `Infinity` and `NaN`

The calculator logic is designed to mirror how real calculators behave,  
rather than relying on simplistic two-number operations.

---

## 🧩 Architecture Diagram (ASCII)

A clean, conceptual overview of the Calculator Alpha structure:

```
                            ┌─────────────────────────┐
                            │      User Interface      │
                            │  (index.html + CSS Grid) │
                            └─────────────┬───────────┘
                                          │ clicks / input
                                          ▼
                            ┌─────────────────────────┐
                            │   Input Controller       │
                            │     (app.js events)      │
                            └─────────────┬───────────┘
                                          │ builds expression
                                          ▼
                            ┌─────────────────────────┐
                            │  Expression Builder     │
                            │ (string-based assembly) │
                            └─────────────┬───────────┘
                                          │ sends expression string
                                          ▼
                            ┌─────────────────────────┐
                            │   Evaluation Engine      │
                            │  (precedence + parens)   │
                            │     safe evaluation      │
                            └─────────────┬───────────┘
                                          │ result OR error
                                          ▼
                            ┌─────────────────────────┐
                            │   Error Handling Layer   │
                            │   ("ERR" on invalid ops) │
                            └─────────────┬───────────┘
                                          │ final output
                                          ▼
                            ┌─────────────────────────┐
                            │      Display Output      │
                            │   (DOM update + UX)      │
                            └─────────────────────────┘
```

### Cypress Testing Boundary

```
┌──────────────────────────┐
│   Cypress Test Runner    │
└──────────┬───────────────┘
           │ simulates real user interaction
           ▼
┌──────────────────────────┐
│   User Interface Layer   │  ← ONLY entry Cypress uses
└──────────────────────────┘
```

Cypress verifies the system *end-to-end*, exactly as a user would.

---

## 🧪 Testing Strategy (Cypress)

Calculator Alpha is fully tested using **Cypress End-to-End tests**.

### Covered Test Scenarios

- Initial load state (`0`)
- Basic arithmetic operations
- Operator precedence
- Parentheses evaluation
- Backspace behavior
- All Clear reset
- Division by zero handling (`ERR`)

All tests are automated and must pass before the calculator is considered correct.

### Example Test Philosophy

- Tests reflect **user behavior**, not internal implementation  
- Tests are **not modified** to hide bugs  
- Logic is fixed until tests pass (test-driven debugging)

---

## 🚀 How to Run

### Run the calculator  
Open via Apache (XAMPP):

    http://localhost/codespace/FullStack_CollegeProject/2_TESTING_TECH/challenges/calculator_alpha/index.html

### Run Cypress tests  
From the project root:

```bash
npx cypress open
```

Then run:

    calculator.cy.js

All tests should pass (green).

---

## 📌 Status

- ✔ Logic implemented  
- ✔ Edge cases handled  
- ✔ Cypress tests passing  
- ✔ Ready for review or assessment  

📝 Notes  
Calculator Alpha is intentionally kept focused and readable.  
Enhancements should be added only if accompanied by new tests.

This project demonstrates not only how to build a calculator,  
but how to verify that it works correctly.

---

## ✅ Why this README is “professional”

- Clear **purpose**  
- Explains **what** and **why**, not every line of code  
- Mentions Cypress **without overselling**  
- Shows testing as part of the engineering process  
- Short enough to actually be read  
- Perfect for:
  - college submission
  - portfolio
  - code review  

---

## 📍 Where to save it

```
2_TESTING_TECH/
└── challenges/
    └── calculator_alpha/
        ├── README.md   ← here
        ├── index.html
        ├── style.css
        └── app.js
```

---
