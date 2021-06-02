<?php

namespace Tests\Acceptance;

use Faker\Factory;
use Helper\CustomFakerProvider;
use Page\Fill;

/**
 * Класс для тестирования формы
 */
class fillFieldsCest
{
    /**
     * Тест на проверку заполнения полей с помощью фейкера
     * @group test2
     */
    public function checkFillFields (\AcceptanceTester $I)
    {
        $faker = Factory::create('us_US');
        $faker->addProvider(new CustomFakerProvider($faker));

        $name = $faker->firstName;
        $lastName = $faker->lastName;
        $email = $faker->email;
        $phoneNumber = $faker->getPhoneKz();
        $address = $faker->address;
        $city = $faker->city;
        $state = $faker->state;
        $postal = $faker-> postcode;
        $firstNamePayment = $faker -> firstName;
        $lastNamePayment = $faker-> lastName;
        $creditCardNumber = $faker->getCreditCard();
        $creditCardSecureCode = $faker->getSecureCode();
        $address_payment_1 = $faker->address;
        $address_payment_2 = $faker->address;
        $cityPayment = $faker->city;
        $stateOfPayment = $faker->state;
        $postalPayment = $faker-> postcode;
       



        $I->amOnPage('');
        $I->fillField(Fill::$firstName, $name);
        $I->fillField(Fill::$lastName, $lastName);
        $I->fillField(Fill::$email, $email);
        $I->fillField(Fill::$phoneNumber, $phoneNumber);
        $I->fillField(Fill::$address, $address);
        $I->fillField(Fill::$city, $city);
        $I->fillField(Fill::$state, $state);
        $I->fillField(Fill::$postal, $postal);
        $I->click(Fill::$choosePaymentCardRadioButton);
        $I->waitForElement(Fill::$firstNamePayment);
        $I->fillField(Fill::$firstNamePayment, $firstNamePayment);
        $I->fillField(Fill::$lastNamePayment, $lastNamePayment);
        $I->fillField(Fill::$creditCardNumber, $creditCardNumber);
        $I->fillField(Fill::$cardSecureCode, $creditCardSecureCode);
        $I->click(Fill::$monthCardField);
        $I->click(Fill::$monthCardFieldChoose);
        $I->click(Fill::$yearCardField);
        $I->click(Fill::$yearCardFieldChoose);
        $I->fillField(Fill::$address_payment_1, $address_payment_1);
        $I->fillField(Fill::$address_payment_2, $address_payment_2);
        $I->fillField(Fill::$cityPayment, $cityPayment);
        $I->fillField(Fill::$stateOfPayment, $stateOfPayment);
        $I->fillField(Fill::$postalPayment, $postalPayment);
        $I->click(Fill::$countryField);
        $I->click(Fill::$countryFieldChoose);
        $I->click(Fill::$registerButton);
        $I->waitForText('Good job');
    }
}