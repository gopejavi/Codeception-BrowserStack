@public

Feature: CreateAccount
  In order to manage content
  As a content manager
  I need to create an account

Scenario: Should navigate from Home Page to Create Account Page
  Given The Home Page is opened
  When I click in CreateAccount button
  Then I see the Create Accoung Page

Scenario Outline: Should create account with valid data
  Given The Create Account Page is opened
  When I sign up with name "<name>", email "<email>" and password "<password>"
  Then I see the Home Page
  And I receive an email confirming the account creation

  Examples:
    | name				| email									| password											|
    | gopejavi			| email@mailinator.com 					| superSecret 										|
    | DOGE				| muchemail@mailinator.confirming		| soPasswordVerySecretWOW							|
    | Neil DeGrasse		| masterUniverse@mailinator.com 		| IamTheGreatMasterOfTheUniverseAndYouKnowIt		|