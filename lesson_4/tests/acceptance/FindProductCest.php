<?php


class FindProductCest
{
    /**
     * Находим товар и проверяем соответсвие модального окна товару 
     */

    public function searchAndCheckProduct(AcceptanceTester $I)
    {    
        $I->amOnPage('');
        $I->see('Blouse', 'div > div.right-block > h5 > a');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span'); 
        $I->waitForElementVisible('.fancybox-iframe');
        $I->switchToIFrame('.fancybox-iframe');
        $I->waitForText('Blouse', 30,'[itemprop="name"]');
       

    }
}
