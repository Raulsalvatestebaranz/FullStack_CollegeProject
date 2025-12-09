describe("Calculator Challenge", () => {
  beforeEach(() => {
    cy.visit("http://localhost/codespace/FullStack_CollegeProject/2_TESTING_TECH/challenges/calculator/index.html");
  });

  it("Adds numbers", () => {
    cy.contains("7").click();
    cy.contains("+").click();
    cy.contains("3").click();
    cy.get("#equals").click();
    cy.get("#display").should("contain", "10");
  });

  it("Clears display", () => {
    cy.contains("9").click();
    cy.contains("C").click();
    cy.get("#display").should("contain", "0");
  });
});
