<?php

namespace Tests\Acceptance;

use Codeception\Example;
use Page\Search;

/**
 * Класс для тестирования поиска
 * @group test
 */
class SearchCest 
{
    /**
     * Тест на проверку легковых по типу кузова
     * @group test
     * @param Example $data
     * @dataProvider getDataForSearchCarsbyBody
     */
    public function searchCarsByBodyType(\AcceptanceTester $I, Example $data)
    {
        $I->amOnPage('');
        $I->waitForElementClickable(Search::$autoCarsLink);
        $I->click(Search::$autoCarsLink);
        $I->waitForElementClickable(Search::$optionalSearchLink);
        $I->click(Search::$optionalSearchLink);
        $I->waitForElementClickable(Search::$carBodyTypeField);
        $I->click(Search::$carBodyTypeField);
        $I->click(sprintf(Search::$carBodyType, $data['carBodyType']));
        $I->click(Search::$searchButton);
        $I->seeInCurrentUrl($data['url']);
    }

    protected function getDataForSearchCarsbyBody()
    {
       

        return [
            ['carBodyType' => 'sedan', 'url' => 'sedan'],
            ['carBodyType' => 'station-wagon', 'url' => 'station-wagon']
        ];
    }
}
