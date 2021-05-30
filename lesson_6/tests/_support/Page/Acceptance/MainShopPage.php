<?php
namespace Page\Acceptance;

/**
 * Главная страница интернет магазина
 */
class MainShopPage
{
        /**
     * URL страницы авторизации
     */
    public static $URL = '';

     /**
     * Селектор поля пункта католога
     */
    public static $ProductCatalogLevel1 = '//ul[@class="sf-menu clearfix menu-content sf-js-enabled sf-arrows"]/li/a[@title="Dresses"]';

    /**
     * Селектор поля ввода для пароля
     */
    public static $ProductCatalogLevel2 = '//ul[@class="submenu-container clearfix first-in-line-xs"]/li/a[@title="Summer Dresses"]'; 

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
     * Находим нужный пункт католога
     */
    public function findCatalogProduct()
    {
        $this->acceptanceTester->moveMouseOver(self::$ProductCatalogLevel1); 
        $this->acceptanceTester->moveMouseOver(self::$ProductCatalogLevel2);   
      
        return $this;
    }
    /**
     * Кликаем на нужно пункте каталога
     */
    public function clickOnFindProduct()
    {
        $this->acceptanceTester->click(self::$ProductCatalogLevel2); 

        return new SearchPage($this->acceptanceTester);
    }
    
}