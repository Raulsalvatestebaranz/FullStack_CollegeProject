const { defineConfig } = require("cypress");

module.exports = defineConfig({
  e2e: {
    /**
     * Base URL for all Cypress tests
     * This must match Apache (XAMPP), not Live Server
     */
    baseUrl: "http://localhost/codespace/FullStack_CollegeProject",

    /**
     * Where Cypress looks for test files
     */
    specPattern: "cypress/e2e/**/*.cy.js",

    /**
     * Support file (custom commands, hooks, etc.)
     */
    supportFile: "cypress/support/e2e.js",

    /**
     * Node event hooks (kept for future use)
     */
    setupNodeEvents(on, config) {
      // You can add plugins or listeners here later
      return config;
    },
  },
});
