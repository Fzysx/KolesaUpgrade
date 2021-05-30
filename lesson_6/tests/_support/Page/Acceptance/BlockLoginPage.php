<?php
namespace Page\Acceptance;
/**
 * Страница автризации - вариант для заблокированного пользователя
 */
class BlockLoginPage
{
    /**
     * Стандартный username для авторизации заблокированного пользователя
     */
    public const USERNAME = 'locked_out_user';
    /**
     * Стандартный password для упешной авторизации
     */
    public const PASSWORD = 'secret_sauce';
    /**
     * Текст, который отображается в блоке об ошибке авторизации, который необходимо проверить
     */
    public const ERROR_TEXT = 'Epic sadface: Sorry, this user has been locked out.';
    /**
     * URL страницы авторизации
     */
    public static $URL = '';

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
     * Заполняет поле ввода логином
     */
    public function fillUsernameField()
    {
        $this->acceptanceTester->fillField(self::$loginInput, self::USERNAME);   

        return $this;
    }
    /**
     * Заполняет поле ввода паролем
     */
    public function fillPasswordField()
    {
        $this->acceptanceTester->fillField(self::$passwordInput, self::PASSWORD);

        return $this;
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

