<?php

use Page\Acceptance\MainShopPage;
use Page\Acceptance\SearchPage;

/**
 * Класс для проверки авторизации з
 */
class SearchProductCest
{
    
    /**
     * Проверяет не успешную автризацию
     */
    public function checkProductDisplay(AcceptanceTester $I)
    {
        $MainShopPage = new MainShopPage($I);
        $SearchPage = new SearchPage($I);

        $I->amOnPage(MainShopPage::$URL);
        $MainShopPage->findCatalogProduct();
        //$I->wait(5);
        $MainShopPage->clickOnFindProduct();
        //$I->wait(5);
        $I->seeInCurrentUrl(SearchPage::$URL);
        $I->seeElement('//*[@id="grid"] [@class="selected"]');
        $I->seeElement('');

        
        
        


        //$BlockLoginPage->fillUsernameField();
        //$BlockLoginPage->fillPasswordField();
        //$BlockLoginPage->clickSubmit();
        //$I->seeElement(BlockLoginPage::$errorBlock);
        //var_dump($I->grabTextfrom('//span[@class="title"]'));
        //$I->waitForText(BlockLoginPage::ERROR_TEXT,5 , BlockLoginPage::$errorBlockText);
        //$BlockLoginPage->clickCloseButton();
       // $I->dontSeeElement(BlockLoginPage::$errorBlock);
    }
}