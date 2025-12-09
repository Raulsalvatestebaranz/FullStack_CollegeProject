let display = document.getElementById("display");

let firstValue = null;
let operator = null;
let waitingForSecond = false;

document.querySelectorAll(".btn-calc").forEach(button => {
  button.addEventListener("click", () => {
    const value = button.innerText;

    // Clear
    if (value === "C") {
      display.innerText = "0";
      firstValue = null;
      operator = null;
      waitingForSecond = false;
      return;
    }

    // Operation buttons (+ - × ÷)
    if (button.dataset.op) {
      operator = button.dataset.op;
      firstValue = parseFloat(display.innerText);
      waitingForSecond = true;
      return;
    }

    // Equals (=)
    if (value === "=") {
      if (operator && firstValue !== null) {
        const secondValue = parseFloat(display.innerText);
        let result = 0;

        switch (operator) {
          case "+": result = firstValue + secondValue; break;
          case "-": result = firstValue - secondValue; break;
          case "*": result = firstValue * secondValue; break;
          case "/": result = secondValue !== 0 ? firstValue / secondValue : "ERR";
        }

        display.innerText = result;
        firstValue = null;
        operator = null;
        waitingForSecond = false;
      }
      return;
    }

    // Numbers
    if (waitingForSecond) {
      display.innerText = value;
      waitingForSecond = false;
    } else {
      display.innerText = display.innerText === "0" ? value : display.innerText + value;
    }
  });
});
