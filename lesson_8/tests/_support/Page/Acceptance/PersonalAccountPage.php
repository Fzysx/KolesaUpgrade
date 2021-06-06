<?php
namespace Page\Acceptance;

/**
 * Страница личного аккаунта
 */
class PersonalAccountPage
{
     /**
     * URL страницы персонального аккаунта покупками
     *
     * @var string
     */
    public static $AccountUrl = 'index.php?controller=my-account';

    /**
     * Селектор кнопки "лист желаний"
     *
     * @var string
     */
    public static $myWishlistButton = '//*[@id="center_column"]//a[@title="My wishlists"]';

}
