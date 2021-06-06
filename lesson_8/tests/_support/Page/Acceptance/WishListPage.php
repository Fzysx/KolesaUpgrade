<?php
namespace Page\Acceptance;

/**
 * Страница личного аккаунта
 */
class WishListPage
{
     /**
     * URL страницы персонального листа желаний
     *
     * @var string
     */
    public static $wishListUrl = 'index.php?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     * Селектор кнопки "лист желаний"
     *
     * @var string
     */
    public static $myWishlistButton = '//*[@id="center_column"]//a[@title="My wishlists"]';

    /**
     * Проверка значения поля Qty таблицы My wishlist
     */
    public static $CountOfMyWishlist = '//*[@class="bold align_center"]';
    
     /**
     * Селектор очистки Wishlist
     */
    public static $deleteFromWishlist = '//*[@class="icon-remove"]';

    

}