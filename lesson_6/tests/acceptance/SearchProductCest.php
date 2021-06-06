<?php

use Page\Acceptance\MainShopPage;
use Page\Acceptance\SearchPage;

/**
 * Класс для поиска продукта
 */
class SearchProductCest
{
    
    /**
     * Проверяет расположение товаров по типам на странице
     */
    public function checkProductDisplay(AcceptanceTester $I)
    {
        $MainShopPage = new MainShopPage($I);
        $SearchPage = new SearchPage($I);

        $I->amOnPage(MainShopPage::$URL);
        $MainShopPage->findCatalogProduct();
        $MainShopPage->clickOnFindProduct();
        $I->seeInCurrentUrl(SearchPage::$URL);
        $I->amOnPage(SearchPage::$URL);
        $I->seeElement(SearchPage::$gridDisplayButtonActive);
        $I->seeElement(SearchPage::$gridDisplayProduct);
        $SearchPage->clickListDisplayButton();
        $I->seeElement(SearchPage::$listDisplayButtonActive);
        $I->seeElement(SearchPage::$listDisplayProduct);
        
    }
}