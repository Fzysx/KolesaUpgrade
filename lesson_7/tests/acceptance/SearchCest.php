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
     * Тест на проверку категорий меню
     * @group test
     * @param Example $data
     * @dataProvider getDataForCategoryType
     */
    public function searchCategoryType(\AcceptanceTester $I, Example $data)
    {
        $I->amOnPage('');
        $I->click(sprintf(Search::$menuCategoryName, $data['categoryNameLink']));
        $I->seeInCurrentUrl($data['url']);
    }

    protected function getDataForCategoryType()
    {
        
      return [
        ['categoryNameLink' => '[@id="navbar-links"]/li[2]/a', 'url' => 'flows/develop'],
        ['categoryNameLink' => '[@id="navbar-links"]/li[5]/a', 'url' => 'flows/management']
      ];
        
    }
}
