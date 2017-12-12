<?php


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
        $this->amOnPage('/');
    }

    /**
     * @Then I see :arg1 somewhere
     */
    public function iSeeSomewhere($arg1)
    {
        $this->see($arg1);
    }
}
