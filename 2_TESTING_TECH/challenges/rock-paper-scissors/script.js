document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll("[data-choice]");

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const choice = btn.getAttribute("data-choice");
      play(choice);
    });
  });
});

function play(playerChoice) {
  const choices = ["rock", "paper", "scissors"];
  const computerChoice = choices[Math.floor(Math.random() * choices.length)];

  const playerEl = document.getElementById("player");
  const computerEl = document.getElementById("computer");
  const resultEl = document.getElementById("result");

  playerEl.innerText = "Your Choice: " + playerChoice;
  computerEl.innerText = "Computer Choice: " + computerChoice;

  let result = "";

  if (playerChoice === computerChoice) {
    result = "It's a tie!";
  } else if (
    (playerChoice === "rock" && computerChoice === "scissors") ||
    (playerChoice === "paper" && computerChoice === "rock") ||
    (playerChoice === "scissors" && computerChoice === "paper")
  ) {
    result = "You win!";
  } else {
    result = "You lose!";
  }

  resultEl.innerText = "Result: " + result;
}
