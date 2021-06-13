<?php
namespace Page\Acceptance;

class Users
{
    // include url of current page
    public static $URL = '?owner=';

  /**
     * Селектор имени пользователя
     *
     * @var string
     */
    public static $nameOfUser = '//*[@class="user-card"][%s]/b';

    /**
     * Селектор кнопки snap
     *  @var string
     */
    public static $snapButton = '//*[@id="snap"]';

     /**
     * Селектор карточки пользователя
     *  @var string
     */
    public static $userCardField = '//*[@class="user-card"]';

    /**
     * Owner для пользователей
     *  @var string
     */
    public static $owner = 'Michael Jordan 23';


}
