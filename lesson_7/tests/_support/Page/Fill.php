<?php
namespace Page;

/**
 * PageObject для страницы формы
 */
class Fill
{
    /**
     * Локатор поля имени
     */
   public static $firstName = '//*[@id="firstName"]';

   /**
    * Локатор поля фамилии
    */
   public static $lastName = '//*[@id="lastName"]';
   
   /**
    * Локатор поля email-а
    */
   public static $email = '//*[@type ="email"]';

   /**
    * Локатор поля номера телефона
    */
    public static $phoneNumber = '//*[@id ="phoneNumber"]';

    /**
    * Локатор поля адреса
    */
    public static $address = '//*[@id ="address"]';

    /**
    * Локатор поля города
    */
    public static $city = '//*[@id ="city"]';

    /**
    * Локатор поля региона
    */
    public static $state = '//*[@id ="state"]';

    /**
    * Локатор поля почтового индекса
    */
    public static $postal = '//*[@id ="postal"]';

    /**
    * Локатор кнопки Регистрации
    */
    public static $registerButton = '//*[@type="submit"]';

    /**
     * Локатор радио-кнопки для открытия Payment Form
     */
    public static $choosePaymentCardRadioButton = '//*[@id="input_32_paymentType_credit"]'; 

    /**
     * Локатор поля имени (оплата)
     */
     public static $firstNamePayment = '//*[@id="input_32_cc_firstName"]';

     /**
     * Локатор поля фамилии (оплата)
     */
     public static $lastNamePayment = '//*[@id="input_32_cc_lastName"]';

    /**
     * Локатор поля номера карты (оплата)
     */
    public static $creditCardNumber = '//*[@id="input_32_cc_number"]';

    /**
     * Локатор поля секретного номера (оплата)
     */
    Public static $cardSecureCode = '//*[@id="input_32_cc_ccv"]';

    /**
     * Локатор раскрывающегося списка выбора месяца (оплата)
     */
    public static $monthCardField = '//*[@id="input_32_cc_exp_month"]';

    /**
     * Локатор раскрывающегося списка выбора года (оплата)
     */
    public static $yearCardField = '//*[@id="input_32_cc_exp_year"]';

    /**
     * Локатор поля выбора месяца (Июнь) (оплата)
     */
      public static $monthCardFieldChoose = '//*[@id="input_32_cc_exp_month"]/option[7]';

    /**
     * Локатор поля выбора года (2021) (оплата)
     */
    public static $yearCardFieldChoose = '//*[@id="input_32_cc_exp_year"]/option[2]';

    /**
     * Локатор Адрес билинга 1
     */
    public static $address_payment_1 = '//*[@id="input_32_addr_line1"]';

    /**
     * Локатор Адрес билинга 2
     */
    public static $address_payment_2 = '//*[@id="input_32_addr_line2"]';

    /**
     * Локатор Город билинга 
     */
    public static  $cityPayment = '//*[@id="input_32_city"]';

    /**
     * Локатор Область билинга
     */
    public static $stateOfPayment = '//*[@id="input_32_state"]';

    /**
     * Локатор Поста билинга
     */
    public static $postalPayment = '//*[@id="input_32_postal"]';

    /**
     * Локатр Страна билинга
     */
    public static $countryField = '//*[@name="q32_myProducts32[country]"]';

    /**
     * Локатр выбора страны (USA)
     */
    public static $countryFieldChoose = '//*[@id="input_32_country"]/option[2]]';

}
