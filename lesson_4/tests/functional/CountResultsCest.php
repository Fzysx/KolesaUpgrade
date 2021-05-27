<?php

class CountResultsCest
{
    /**
     * Проверить поиск по названию Printed dress и количество найденных наименований
     */
   
    public function checkSearchByText(FunctionalTester $I)
    {    
        $searchInputFieldCSS = '#search_query_top';
        $searchInputFieldXPath = '//input[@id="search_query_top"]'; 
        $searchButtonCSS = '#searchbox > button';
        $searchButtonXPath = '//button[@class="btn btn-default button-search"]';
        $searchCountElementsCSS = '#center_column > ul > li';
        $searchCountElementsXPath = '//div[@id="center_column"]/ul/li';

        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('#center_column > ul > li', 5);

        
       

    }
}