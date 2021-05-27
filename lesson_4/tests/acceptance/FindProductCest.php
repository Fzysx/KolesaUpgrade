<?php


class FindProductCest
{
    /**
     * Находим товар и проверяем соответсвие модального окна товару 
     */

    public function searchAndCheckProduct(AcceptanceTester $I)
    {    
        $searchTextOfElementCSS= '#homefeatured > li:nth-child(2) .product-name';
        $searchTextOfElementXPath = '//ul[@id="homefeatured"]/li[2]//a[@class="product-name"]'; 
        $mouseOverElementCSS = '#homefeatured > li:nth-child(2) .product-name';
        $mouseOverElementXPath = '//ul[@id="homefeatured"]/li[2]//a[@class="product-name"]';
        $buttonClickCSS = '#homefeatured > li:nth-child(2) a.quick-view';
        $buttonClickXPath = '//ul[@id="homefeatured"]/li[2]//a[@class="quick-view"]';
        $iFrameCSS = '.fancybox-iframe';
        $iFrameXPath = '//iframe[@class="fancybox-iframe"]';
        $iFramesFindTextCSS = "#product h1";
        $iFramesFindTextXPath = '//*[@id="product"]/div/div/div[2]/h1';

        $I->amOnPage('');
        $I->waitForText('Blouse', 30, '#homefeatured > li:nth-child(2) .product-name');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) .product-name');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span'); 
        $I->waitForElementVisible('.fancybox-iframe');
        $I->switchToIFrame('.fancybox-iframe');
        $I->waitForText('Blouse', 30,'#product h1');
      
    }
}
