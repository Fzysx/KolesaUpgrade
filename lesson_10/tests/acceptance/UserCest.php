<?php

use Faker\Factory;
use Page\Acceptance\Users;

/**
 * Класс для раоты с юзером
 */

class UserCest
{
    /**
     * @var array
     * Хранение одного элемента коллекции
     */
    protected $data;

    /**
     * Количество создаваемых пользователей 
     */
    public const NUMBBER_OF_USERS = 10;
    
    /**
     * @param AcceptanceTester $I
     * @return void
     * Создаем пользователей
     */
    public function _before(AcceptanceTester $I){
        
        $faker = Factory::create('en_US');

        for ($i = 1; $i <= self::NUMBBER_OF_USERS; $i++){
        $this ->data = [
            "job"               =>'QA Engineer',
            "superhero"         =>$faker->boolean(),
            "skill"             =>$faker->word,
            "email"             => $faker->email,
            "name"              => $faker->name,
            "DOB"               => $faker->date("Y-m-d"),
            "avatar"            => $faker->imageUrl(),
            "canBeKilledBySnap" => $faker->boolean(),
            "created_at"        => $faker->date("Y-m-d"),
            "owner"             => Users::$owner 
        ];

        $I->haveInCollection('people', $this->data);
        }
        
    }    

    /**
     * Тест на проверку созщданных пользователей
     * @group test1
     */
    public function checkUserCreate(\AcceptanceTester $I)
    {   
        /**
         * Зайти на главную страницу с query ?owner=<YOUR_USERNAME>
         */
     
        $I->amOnPage(Users::$URL.Users::$owner);
        $I->waitForElement(Users::$userCardField);
        
        /**
         * Проверить что все созданные люди появились на этой странице
         */
        for ($i = 1; $i <= self::NUMBBER_OF_USERS; $i++){
            $I->seeInCollection('people', array('owner'=> Users::$owner,'name' => $I->grabTextFrom(sprintf(Users::$nameOfUser, $i))));
        }

        /**
         * Нажать на кнопку snap
         */
        $I->click(Users::$snapButton);

        $countAfterSnapButton = $I->grabCollectionCount('people', array('owner'=> Users::$owner, 'canBeKilledBySnap' => 'true'));

        /**
         * Проверить что со страницы пропали все люди у которых значение canBeKilledBySnap = true
         * И остались только те у кого false
         */
        for ($i = 1; $i <= $countAfterSnapButton; $i++){
            $I->seeInCollection('people', array('owner'=> Users::$owner,'name' => $I->grabTextFrom(sprintf(Users::$nameOfUser, $i)), 'canBeKilledBySnap' => 'false'));
        }
       
        /**
         * Убедиться что из базы они тоже удалились
         */
        $I->dontSeeInCollection('people', array('owner'=> Users::$owner, 'canBeKilledBySnap' => 'true'));


    }
}