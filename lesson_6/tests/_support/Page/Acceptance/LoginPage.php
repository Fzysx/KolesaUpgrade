<?php
namespace Page\Acceptance;
/**
 * Страница авторазации
 */
class LoginPage
{
    /**
     * Стандартный username для успешной авторизации
     */
    public const USERNAME = 'standard_user';
    /**
     * Стандартный password для упешной авторизации
     */
    public const PASSWORD = 'secret_sauce';
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

        return null;
    }
    /**
     * Заполняет поле ввода паролем
     */
    public  function fillPasswordField()
    {
        $this->acceptanceTester->fillField(self::$passwordInput, self::PASSWORD);

        return $this;
    }
    /**
     * Кликает на кнпоку логина
     */
    public  function clickSubmit()
    {
        $this->acceptanceTester->click(self::$loginButton);

        return new MainPage($this->acceptanceTester);
    }
}
