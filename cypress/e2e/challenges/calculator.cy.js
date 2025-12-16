describe("Calculator Alpha – Final Version", () => {

    beforeEach(() => {
        cy.visit("/2_TESTING_TECH/challenges/calculator_alpha/index.html");
    });

    it("loads with initial state", () => {
        cy.get("#display").should("contain", "0");
    });

    it("adds numbers correctly", () => {
        cy.contains("7").click();
        cy.contains("+").click();
        cy.contains("3").click();
        cy.contains("=").click();

        cy.get("#display").should("contain", "10");
    });

    it("respects operator precedence", () => {
        cy.contains("2").click();
        cy.contains("+").click();
        cy.contains("3").click();
        cy.contains("×").click();
        cy.contains("4").click();
        cy.contains("=").click();

        cy.get("#display").should("contain", "14");
    });

    it("handles parentheses correctly", () => {
        cy.contains("6").click();
        cy.contains("( )").click();
        cy.contains("8").click();
        cy.contains("+").click();
        cy.contains("9").click();
        cy.contains("( )").click();
        cy.contains("=").click();

        cy.get("#display").should("contain", "102");
    });

    it("backspace removes last character", () => {
        cy.contains("1").click();
        cy.contains("2").click();
        cy.contains("3").click();
        cy.contains("B").click();

        cy.get("#display").should("contain", "12");
    });

    it("AC clears the calculator", () => {
        cy.contains("9").click();
        cy.contains("+").click();
        cy.contains("3").click();
        cy.contains("AC").click();

        cy.get("#display").should("contain", "0");
    });

    it("handles division by zero", () => {
        cy.contains("5").click();
        cy.contains("÷").click();
        cy.contains("0").click();
        cy.contains("=").click();

        cy.get("#display").should("contain", "ERR");
    });

});
