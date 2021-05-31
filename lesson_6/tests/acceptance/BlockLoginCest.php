<?php

use Page\Acceptance\BlockLoginPage;

/**
 * Класс для проверки авторизации заблокированного пользователя
 */
class BlockLoginCest
{
    
    /**
     * Проверяет авторизацию заблокированного пользователя
     */
    public function checkSuccesLogin(AcceptanceTester $I)
    {
        $BlockLoginPage = new BlockLoginPage($I);

        $I->amOnPage(BlockLoginPage::$URL);
        $BlockLoginPage->fillUsernameField();
        $BlockLoginPage->fillPasswordField();
        $BlockLoginPage->clickSubmit();
        $I->seeElement(BlockLoginPage::$errorBlock);
        //var_dump($I->grabTextfrom('//span[@class="title"]'));
        $I->waitForText(BlockLoginPage::ERROR_TEXT,5 , BlockLoginPage::$errorBlockText);
        $BlockLoginPage->clickCloseButton();
        $I->dontSeeElement(BlockLoginPage::$errorBlock);
    }
}