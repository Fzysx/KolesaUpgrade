<?php
namespace Page\Acceptance;

class ProductsMainPage
{
     /**
     * Главная страница с товарами
     *
     * @var string
     */
    public static $url = '';

   /**
    * Кнопка входа в аккаунт
    */
    public static $signInButton = '//*[@id="header"]//a[@class="login"]';
 
     /**
     * Селектор блока первого товара
     *
     * @var string
     */
    public static $firstProductCard = '//*[@id="homefeatured"]/li[1]';


    /**
     * Селектор блока n-го товара
     *
     * @var string
     */
    public static $productCard = '//*[@id="homefeatured"]/li[%s]';
    
    /**
     * Селектор кнопки Quik View 
     *
     * @var string
     */
    public static $quickViewButton = '//*[@id="homefeatured"]/li[%s]//a[@class="quick-view"]/span';
   
    /**
     * Селектор модалки краткой информации о товаре
     *
     * @var string
     */
    public static $quickViewModal= '//*[@class="fancybox-iframe"]';

    /**
     * Селектор кнопки "добавить в список желаемых"
     *
     * @var string
     */
    public static $addToWishlistButton = '//*[@id="wishlist_button"]';

    /**
     * Селектор кнопки закрытия плашки об успешном добавлении
     *
     * @var string
     */
    public static $successAddModalCloseButton = '//*[@id="product"]/div[2]/div/div/a';

      /**
       * Селектор кнопки закрытия модалки краткой информации о товаре 
       *
       * @var string
       */

    public static $quickViewModalCloseButton = '//*[@id="index"]//a[@class="fancybox-item fancybox-close"]';
    
      /**
       * Селектор кнопки открытия страницы персоналного аккаунта 
       *
       * @var string
       */
      public static $personalAccountOpenButton = '//*[@id="header"]//a[@class="account"]';

      /**
       * Селектор кнопки Sign out
       */
      public static $logoutButton = '//*[@class="logout"]';
}
