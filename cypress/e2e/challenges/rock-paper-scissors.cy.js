// cypress/e2e/challenges/rock-paper-scissors.cy.js

describe("RPS Challenge", () => {
  const URL =
    "http://localhost/codespace/FullStack_CollegeProject/2_TESTING_TECH/challenges/rock-paper-scissors/index.html";

  beforeEach(() => {
    cy.visit(URL);
  });

  it("Player selects rock", () => {
    cy.contains("button", "Rock").click();
    cy.get("#player").should("contain", "Your Choice: rock");
  });

  it("Displays computer choice", () => {
    cy.contains("button", "Rock").click();
    cy.get("#computer").should("contain", "Computer Choice:");
  });

  it("Shows result", () => {
    cy.contains("button", "Scissors").click();
    cy.get("#result").invoke("text").should("include", "Result:");
  });
});
