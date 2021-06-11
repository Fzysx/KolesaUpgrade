<?php

use Faker\Factory;


/**
 * Класс для раоты с юзером
 */

class UserCest
{
    public static $defaultSchema = [
        "job"       => 'string',
        "superhero" => 'Boolean',
        "skill"     => 'string',
        "_id"       => 'string',
        "email"     => 'string',
        "owner"     => 'string'
        ];
    
    
    public static $userData_2 =[
        'owner' => 'Fzysx7777',
    ];    
  
    

    /**
     * Тест на создание юзера
     * @group test1
     */
    public function checkUserCreate(\FunctionalTester $I)
    {   
        $faker = Factory::create();

       
        $userData =[
            'email' => $faker->email,
            'owner' => 'Fzysx7777',
            'job' => $faker->company,
            'name' => $faker->name
        ];

        $I->haveHttpHeader('Content-Type','application/json');
        $I->sendPost('human', $userData);

        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);

        $I->sendGet('people', $userData);
        $I->seeResponseMatchesJsonType(self::$defaultSchema);
        
    }

    /**
     * Тест на изменение юзера
     * @group test2
     */
    public function InputChangesToUser(\FunctionalTester $I){
        $faker = Factory::create();

           
        $I->haveHttpHeader('Content-Type','application/json');
        $I->sendGet('people', self::$userData_2);
        $user_id = $I->grabDataFromResponseByJsonPath('$..._id');
        $I->seeResponseCodeIsSuccessful();
        $I->sendPut('/human?_id='.$user_id[0], array('job'=>'QA Automation Professional'));
        $I->seeResponseContainsJson(['nModified' => '1']);
    }

    /**
     * Тест проверки изменения юзера
     *  @group test3
     */
    public function checkUserChanges(\FunctionalTester $I){
        $I->haveHttpHeader('Content-Type','application/json');
        $I->sendGet('people', self::$userData_2);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['job'=>'QA Automation Professional']);
    }

    /**
     * Тест удаления юзера
     *  @group test4
     */
    public function deleteUser(\FunctionalTester $I){
        $I->haveHttpHeader('Content-Type','application/json');
        $I->sendGet('people', self::$userData_2);
        $user_id = $I->grabDataFromResponseByJsonPath('$..._id');
        $I->seeResponseCodeIsSuccessful();
        $I->sendDelete('/human?_id='.$user_id[0]);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['deletedCount' => '1']);
    }
     /**
     * Тест проверки удаления пользователя
     *  @group test5
     */
    public function CheckDeleteUser(\FunctionalTester $I){
        $I->haveHttpHeader('Content-Type','application/json');
        $I->sendGet('people', self::$userData_2);
        $I->dontSeeResponseContainsJson(self::$userData_2);
    }
}