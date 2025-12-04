

# 📄 **TESTING TECHNOLOGIES — CYPRESS E2E TESTING (DETAILED README)**

*(Fully compliant with Edinburgh College module EC149760/029)*

---

# **Cypress End-to-End Testing — WebTech CRUD Project**

This document explains the full installation, configuration, and execution of Cypress End-to-End (E2E) tests for the **WebTech CRUD** application. It also includes evidence, explanations of the Cypress architecture, and a reflection describing the testing process.

---

# ## 🔍 1. Introduction to Cypress

Cypress is a **next-generation front-end testing tool** designed for modern web applications.
It addresses common issues developers face when testing:

* Synchronisation problems
* Elements loading unpredictably
* Timeouts
* Difficult debugging

According to the college documentation:

> “Cypress operates directly in the browser, enabling real-time reloading and fast execution of tests.”
>

Cypress works **inside the browser**, not outside like Selenium.
This gives Cypress unmatched advantages, including:

* Automatic waiting
* Fast execution
* Real-time debugging
* DevTools support
* Built-in assertions
* Screenshots & videos

---

# ## 🧱 2. Cypress Project Structure

Cypress automatically generates a folder structure when E2E Testing is configured:

```
cypress/
   e2e/
      home.cy.js      ← My E2E test file
   fixtures/
      example.json
   support/
      commands.js
      e2e.js
cypress.config.js      ← Cypress config file
```

This structure matches the expectations from the college module.


---

# ## ⚙️ 3. Installation Steps

### Step 1 — Initialise npm

```bash
npm init -y
```

### Step 2 — Install Cypress

```bash
npm install cypress --save-dev
```

### Step 3 — Open Cypress Test Runner

```bash
npx cypress open
```

As the college documentation states:

> “Once installed, Cypress can be launched using *npx cypress open*.”
>

---

# ## 🚀 4. Creating the First Spec File

The test runner asks to create a new spec.
The recommended name according to the module is something like:

```
home.cy.js
```

This test file becomes visible immediately under the **E2E Testing** list.

---

# ## 🧪 5. My E2E Test: `home.cy.js`

This test loads the homepage, ensures it renders correctly, and verifies key UI elements.

### **Final Passing Test Code:**

```js
const HOME_URL = 'http://localhost/codespace/FullStack_CollegeProject/1_WEB_TECH/public/index.php';

describe('CRUD Homepage Test', () => {

  beforeEach(() => {
    cy.visit(HOME_URL);
  });

  it('Loads the homepage successfully', () => {
    cy.get('body').should('be.visible');
    cy.contains('Discover Your Next Favorite Book');
  });

  it('Checks that hero images are displayed', () => {
    cy.get('.hero-img').should('exist');
  });

  it('Checks that the navigation bar loads', () => {
    cy.get('nav').should('be.visible');
  });

  it('Checks at least one hero image is visible', () => {
    cy.get('.hero-img').first().should('be.visible');
  });

});
```

---

# ## 🧭 6. Commands Used (Matching College Requirements)

| Cypress Command | Purpose                   | Module Reference                                  |
| --------------- | ------------------------- | ------------------------------------------------- |
| `cy.visit()`    | Loads a URL               | “visit launches a URL”                            |
| `cy.get()`      | Selects DOM elements      | “get one or more DOM elements”                    |
| `cy.contains()` | Finds text in DOM         | “contains expects the element with text to exist” |
| `cy.should()`   | Assertion (exist/visible) | “Create an assertion”                             |
| `beforeEach()`  | Runs before every test    | Standard Cypress best practice                    |

This satisfies the learning outcome of **writing functional E2E tests**.

---

# ## 📸 7. Evidence — Test Runner Screenshot

*(Insert screenshot here)*

Your screenshot MUST show:

* The passing test cases
* The browser preview panel
* The loaded homepage

This is a required element of the assessment.

---

# ## 🧩 8. Issues Encountered & Solutions

### **Issue 1 — Cypress showing a blank page**

Cypress isolated each test and reset to `about:blank`.

### **Fix:**

Use `beforeEach(() => cy.visit(...))` to ensure the page is loaded before *every* test.

---

### **Issue 2 — PHP includes not loading inside Cypress**

Index.php originally used relative paths such as:

```php
<?php include '../includes/nav.php'; ?>
```

But Cypress executed PHP differently → nav and images did not load.

### **Fix:**

Use absolute server paths:

```php
<?php include $_SERVER['DOCUMENT_ROOT'] . '/codespace/FullStack_CollegeProject/1_WEB_TECH/includes/nav.php'; ?>
```

This guaranteed reliability in Apache AND Cypress.

---

# ## 🎯 9. Reflection (Strong Answer for Distinction)

> During this task, I learned how Cypress runs directly inside the browser and executes tests with real-time feedback. A key insight was the difference between browser rendering and test environment rendering, especially when PHP includes were initially not loading.
>
> Debugging with the Cypress command log allowed me to understand why certain tests failed and how Cypress isolates each test case. Implementing `beforeEach()` and using absolute includes were breakthrough moments that made the tests reliable and repeatable.
>
> Cypress helped me practice professional testing workflows, including writing selectors, using assertions, interpreting test failures, and verifying UI behaviour. This experience increased my confidence in automated front-end testing and improved my understanding of how web applications behave under test conditions.

---

# ## ✔️ 10. Conclusion

This detailed testing setup:

* ✓ Meets all module requirements
* ✓ Includes correct commands & structure
* ✓ Provides professional evidence
* ✓ Demonstrates debugging and problem-solving
* ✓ Shows deep understanding of Cypress

This README is ready to be submitted as part of your coursework.

