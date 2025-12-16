/* =========================================================
   Calculator Alpha — Expression-Based Logic
   ---------------------------------------------------------
   Supports:
   - Chained operations
   - Parentheses ()
   - Correct precedence
   - Implicit multiplication
   - Safe error handling (Infinity / NaN)
   ========================================================= */

const display = document.getElementById("display");
const keys = document.querySelector(".calculator__keys");

/* Expression state (single source of truth) */
let expression = "";

/* Track parentheses balance */
let openParens = 0;

/* Event delegation */
keys.addEventListener("click", (e) => {
    const key = e.target;
    if (!key.matches("button")) return;

    const value = key.textContent;

    /* Clear */
    if (key.classList.contains("key--clear")) {
        reset();
        return;
    }

    /* Backspace */
    if (key.classList.contains("key--back")) {
        backspace();
        return;
    }

    /* Equals */
    if (key.classList.contains("key--equals")) {
        calculate();
        return;
    }

    /* Parentheses */
    if (key.classList.contains("key--paren")) {
        handleParentheses();
        return;
    }

    /* Operators */
    if (key.dataset.op) {
        addOperator(key.dataset.op);
        return;
    }

    /* Numbers / decimal */
    addNumber(value);
});

/* ===============================
   Input handlers
   =============================== */

function addNumber(value) {
    /* Prevent multiple decimals in same number */
    const lastNumber = expression.split(/[\+\-\*\/\(\)]/).pop();
    if (value === "." && lastNumber.includes(".")) return;

    expression += value;
    updateDisplay();
}

function addOperator(op) {
    if (expression === "") return;

    /* Replace last operator if user taps twice */
    if (/[+\-*/]$/.test(expression)) {
        expression = expression.slice(0, -1);
    }

    expression += op;
    updateDisplay();
}

/* ===============================
   Parentheses handling (TOGGLE)
   =============================== */

function handleParentheses() {
    const lastChar = expression.slice(-1);

    /* CLOSE parenthesis when:
       - there is an open parenthesis
       - last char is a number or ')'
    */
    if (
        openParens > 0 &&
        /[0-9)]$/.test(lastChar)
    ) {
        expression += ")";
        openParens--;
    }
    /* OPEN parenthesis (with implicit multiplication if needed) */
    else {
        if (
            expression !== "" &&
            /[0-9)]$/.test(lastChar)
        ) {
            expression += "*(";
        } else {
            expression += "(";
        }
        openParens++;
    }

    updateDisplay();
}

/* ===============================
   Calculation
   =============================== */

function calculate() {
    if (expression === "") return;

    /* Close any unclosed parentheses */
    while (openParens > 0) {
        expression += ")";
        openParens--;
    }

    try {
        const result = Function(`"use strict"; return (${expression})`)();

        /* Handle Infinity / NaN (e.g. division by zero) */
        if (!isFinite(result)) {
            display.textContent = "ERR";
            expression = "";
            return;
        }

        expression = String(result);
        updateDisplay();
    } catch {
        display.textContent = "ERR";
        expression = "";
    }
}

/* ===============================
   Utilities
   =============================== */

function backspace() {
    if (expression.endsWith("(")) openParens--;
    if (expression.endsWith(")")) openParens++;

    expression = expression.slice(0, -1);
    updateDisplay();
}

function reset() {
    expression = "";
    openParens = 0;
    display.textContent = "0";
}

function updateDisplay() {
    display.textContent = expression || "0";
}
