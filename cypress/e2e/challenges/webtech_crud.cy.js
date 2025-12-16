describe("WebTech CRUD System", () => {

    const baseUrl = "http://localhost/codespace/FullStack_CollegeProject/1_WEB_TECH/public/";

    it("Loads the homepage", () => {
        cy.visit(baseUrl);
        cy.contains("Discover Your Next Favorite Book").should("exist");
        cy.contains("Browse Books").should("exist");
        cy.contains("Add a Book").should("exist");
    });

    it("Navigates to product list", () => {
        cy.visit(baseUrl);
        cy.contains("Browse Books").click();
        cy.url().should("include", "read.php");
        cy.contains("Product List").should("exist");
    });

    it("Creates a new product", () => {
        cy.visit(baseUrl + "create.php");

        cy.get("input[name='product_name']").type("Test Book Cypress");
        cy.get("textarea[name='product_desc']").type("A book created automatically by Cypress.");
        cy.get("input[name='product_price']").type("19.99");
        cy.get("input[name='product_image']").type("https://example.com/book.jpg");

        cy.get("button[type='submit']").click();

        cy.url().should("include", "read.php");
        cy.contains("Test Book Cypress").should("exist");
    });

    it("Updates the created product", () => {
        cy.visit(baseUrl + "read.php");

        cy.get("table tbody tr").contains("Test Book Cypress")
            .parents("tr")
            .within(() => {
                cy.contains("Edit").click();
            });

        cy.url().should("include", "update.php");

        cy.get("input[name='product_name']")
            .clear()
            .type("Updated Test Book Cypress");

        cy.get("button[type='submit']").click();

        cy.url().should("include", "read.php");
        cy.contains("Updated Test Book Cypress").should("exist");
    });

    it("Deletes the updated product", () => {
        cy.visit(baseUrl + "read.php");

        cy.get("table tbody tr").contains("Updated Test Book Cypress")
            .parents("tr")
            .within(() => {
                cy.contains("Delete").click();
            });

        cy.on("window:confirm", () => true);

        cy.url().should("include", "read.php");

        cy.contains("Updated Test Book Cypress").should("not.exist");
    });

});
