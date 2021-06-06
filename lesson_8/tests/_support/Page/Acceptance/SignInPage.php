<?php
namespace Page\Acceptance;

/**
 * Страница входа в аккаунт
 */
class SignInPage
{
     /**
     * URL страницы входа в аккаунт
     *
     * @var string
     */
    public static $AccountUrl = 'ndex.php?controller=authentication&back=my-account';

    /**
     * Селектор поля ввода логина
     *
     * @var string
     */
    public static $emailField = '//*[@id="email"]';

    /**
     * Селектор поля ввода пароля
     *
     * @var string
     */
    public static $passwordField = '//*[@id="passwd"]';
    
    /**
     * Селектор кнопки входа в аккаунт
     *
     * @var string
     */
    public static $signInButton = '//*[@id="SubmitLogin"]';
    
    /**
     * Логин 
     */
    public const LOGIN = 'ayake888@gmail.com';

     /**
     * Пароль 
     */
    public const PASSWORD = 'SnowdenNSA';
}
