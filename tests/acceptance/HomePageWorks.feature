Feature: HomePageWorks
  In order to use this web
  As a some Internet surfer
  I need to open a Home Page

Scenario: The brand is visible
  Given I opened a browser
  When I go to Home Page
  Then I see "Vökuró" somewhere
  And I see "Welcome!" somewhere