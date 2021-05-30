<?php
namespace Page\Acceptance;
/**
 * Главная страница интернет магазина
 */
class SearchPage
{
    /**
     * URL страницы авторизации
     */
    public static $URL = '/index.php?id_category=11&controller=category';

     /**
     * Селектор поля ввода для логина
     */
    public static $loginInput = '//*[@id="user-name"]';

    /**
     * Селектор поля ввода для пароля
     */
    public static $passwordInput = '//*[@id="password"]'; 

    /**
     * Селектор кнопки авторизации
     */
    public static $loginButton = '//*[@id="login-button"]';

    /**
     * Селектор элемента ошибки авторизации
     */
    public static $errorBlock = '//*[@class="error-message-container error"]';
    /**
     * Селектор текста ошибки авторизации
     */
    public static $errorBlockText = '//*[@class="error-message-container error"]/h3[@data-test="error"]';
    /**
     * Селектор кнопки закрытия ошибки (крестик 'X') расположенной на блоке с ошибкой
     */
    public static $errorCloseButton = '//button[@class="error-button"]';
    /**
     * Объект Tester-а
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Кликает на кнпоку логина
     */
    public function clickSubmit()
    {
        $this->acceptanceTester->click(self::$loginButton);

    
    }
    /**
     * Закрывает блок с ошибкой нажав на крестик 'X'
     */
    public function clickCloseButton()
    {
        $this->acceptanceTester->click(self::$errorCloseButton);

      
    }

}