describe("RPS Challenge – Super Pro Mode", () => {
  const URL =
    "http://localhost/codespace/FullStack_CollegeProject/2_TESTING_TECH/challenges/rock-paper-scissors/index.html";

  beforeEach(() => {
    cy.visit(URL);

    cy.get("[data-cy=rock]").as("rockBtn");
    cy.get("[data-cy=paper]").as("paperBtn");
    cy.get("[data-cy=scissors]").as("scissorsBtn");

    cy.get("[data-cy=player]").as("player");
    cy.get("[data-cy=computer]").as("computer");
    cy.get("[data-cy=result]").as("result");
  });

  it("Player selects Rock & UI updates correctly", () => {
    cy.get("@rockBtn").click();

    // check user choice
    cy.get("@player").should("contain", "Your Choice: rock");

    // check computer choice is valid
    cy.get("@computer")
      .invoke("text")
      .then((txt) => {
        const comp = txt.replace("Computer Choice: ", "").trim();
        expect(["rock", "paper", "scissors"]).to.include(comp);
      });

    // check result shows Win/Lose/Tie
    cy.get("@result")
      .invoke("text")
      .should("match", /Result: (You win!|You lose!|It's a tie!)/);
  });

  it("Player selects Paper", () => {
    cy.get("@paperBtn").click();
    cy.get("@player").should("contain", "Your Choice: paper");
    cy.get("@result").should("contain", "Result:");
  });

  it("Player selects Scissors", () => {
    cy.get("@scissorsBtn").click();
    cy.get("@player").should("contain", "Your Choice: scissors");
    cy.get("@result").should("contain", "Result:");
  });
});
