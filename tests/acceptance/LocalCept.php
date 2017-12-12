<?php
  // @group local
  $I = new AcceptanceTester($scenario);
  $I->wantTo('Test BrowserStack Local Testing');
  $I->amOnPage('/');
  $I->see('Vökuró');
