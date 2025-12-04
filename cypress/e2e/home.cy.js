const HOME_URL = 'http://localhost/codespace/FullStack_CollegeProject/1_WEB_TECH/public/index.php';

describe('CRUD Homepage Test', () => {

  // This runs BEFORE EVERY test
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
