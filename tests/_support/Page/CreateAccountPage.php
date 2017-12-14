<?php
namespace Page;

class CreateAccountPage
{
    public static $URL = '/session/signup';

    public static $usernameField = '#name';
    public static $emailField = '#email';
    public static $passwordField = '#password';
    public static $confirmPasswordField = '#confirmPassword';
    public static $agreeTermsCheckbox = '#terms';
    public static $signUpButton = 'Sign Up';

    /**
     * @var AcceptanceTester $tester;
     */
    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function signUp($name, $email, $password)
    {
        $I = $this->tester;

        $I->fillField(self::$usernameField, $name);
        $I->fillField(self::$emailField, $email);
        $I->fillField(self::$passwordField, $password);
        $I->fillField(self::$confirmPasswordField, $password);
        $I->checkOption(self::$agreeTermsCheckbox);

        $I->click(self::$signUpButton);

        return $this;
    }
}
