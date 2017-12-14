<?php
use Page\HomePage as HomePage;
use Page\CreateAccountPage as CreateAccountPage;
        
/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @Given I opened a browser
     */
    public function iOpenedABrowser()
    {
        //already happened
    }

    /**
     * @When I go to Home Page
     */
    public function iGoToHomePage()
    {
        $this->amOnPage(HomePage::$URL);
    }

    /**
     * @Given The Home Page is opened
     */
    public function theHomePageIsOpened()
    {
        $this->amOnPage(HomePage::$URL);
    }

    /**
     * @When I click in CreateAccount button
     */
    public function iClickInCreateAccountButton()
    {
        $this->click(HomePage::$createAccountButton);
    }

    /**
     * @Then I see the Create Accoung Page
     */
    public function iSeeTheCreateAccoungPage()
    {
        $this->seeCurrentUrlEquals(CreateAccountPage::$URL);
    }

    /**
     * @Given The Create Account Page is opened
     */
    public function theCreateAccountPageIsOpened()
    {
        $this->amOnPage(CreateAccountPage::$URL);
    }

    /**
     * @When I sign up with name :name, email :email and password :password
     */
    public function iSignUpWithNameEmailAndPassword($name, $email, $password)
    {
        $createAccountPage = new CreateAccountPage($this);
        $createAccountPage->signUp($name, $email, $password);
    }

    /**
     * @Then I see the Home Page
     */
    public function iSeeTheHomePage()
    {
        $this->see('Welcome!');
        $this->see('This is a website secured by Phalcon Framework');
    }

    /**
     * @Then I receive an email confirming the account creation
     */
    public function iReceiveAnEmailConfirmingTheAccountCreation()
    {
        //Note: not implemented as app cant send emails.
    }
}
