<?php

class CountResultsCest
{
    /**
     * Проверить поиск по названию Printed dress и количество найденных наименований
     */
   
    public function checkSearchByText(FunctionalTester $I)
    {    
        $searchInputFieldCSS = '';
        $searchInputFieldXPath = ''; 

        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('div.left-block',5);

        
       

    }
}