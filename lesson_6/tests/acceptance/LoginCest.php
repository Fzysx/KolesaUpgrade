<?php

use Page\Acceptance\LoginPage;
use Page\Acceptance\MainPage;

/**
 * Класс для проверки авторизации
 */
class LoginCest
{
    
    /**
     * Проверяет успешную авторизацию
     */
    public function checkSuccesLogin(AcceptanceTester $I)
    {
        $LoginPage = new LoginPage($I);

        $I->amOnPage(LoginPage::$URL);
        //$I->fillField(LoginPage::$loginInput, LoginPage::USERNAME);
        $LoginPage->fillUsernameField();
        //$I->fillField(LoginPage::$passwordInput,LoginPage::PASSWORD);
        $LoginPage->fillPasswordField();
        //$I->click(LoginPage::$loginButton);
        $LoginPage->clickSubmit();
        $I->seeInCurrentUrl(MainPage::$URL);
        //var_dump($I->grabTextfrom('//span[@class="title"]'));
        $I->waitForText('PRODUCTS',5 ,MainPage::$titleBlock);
    }
}
