<?php
namespace Page\Acceptance;
/**
 * Страница просмотра товаров
 */
class SearchPage
{
    /**
     * URL страницы выбранного товара
     */
    public static $URL = '?id_category=11&controller=category';

     /**
     * Селектор активной кнопки табличного отображения товаров 
     */
    public static $gridDisplayButtonActive = '//*[@id="grid"][@class="selected"]//i[@class="icon-th-large"]';

    /**
     * Селектор активной кнопки строчного отображения товаров
     */
    public static $listDisplayButtonActive = '//*[@id="list"][@class="selected"]//i[@class="icon-th-list"]'; 

    /**
     * Селектор не активной кнопки строчного отображения товаров
     */
    public static $listDisplayButton = '//*[@id="list"][not(@class="selected")]//i[@class="icon-th-list"]'; 

    /**
     * Селектор показывающий табличное отображения элементов
     */
    public static $gridDisplayProduct = '//ul[@class="product_list row grid"]';

    /**
     * Селектор показывающий строчное отображаение элементов
     */
    public static $listDisplayProduct = '//ul[@class="product_list row list"]'; 

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
     * Кликает на кнпоку строчного отображения элементов
     */
    public function clickListDisplayButton()
    {
        $this->acceptanceTester->click(self::$listDisplayButton);

    
    }
    
}