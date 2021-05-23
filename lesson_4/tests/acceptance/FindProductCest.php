<?php


class FindProductCest
{
    /**
     * Проверить поиск по названию и количество найденных наименований
     */
 
    // tests
    public function tryToTest(AcceptanceTester $I)
    {    
        $I->amOnPage('');
        $I->see('Blouse', 'div > div.right-block > h5 > a');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span'); 
        $I->waitForElementVisible('#index > div.fancybox-overlay.fancybox-overlay-fixed > div');
        $I->see('Blouse');
       

    }
}
