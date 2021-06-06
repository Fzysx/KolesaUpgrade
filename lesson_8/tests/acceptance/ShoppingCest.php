<?php

use Page\Acceptance\PersonalAccountPage;
use Page\Acceptance\ProductsMainPage;
use Page\Acceptance\SignInPage;
use Page\Acceptance\WishListPage;
use Step\Acceptance\ShoppingStep;

/**
 * Класс для покупки товаров
 */

 class ShoppingCest 
 {
    public const PRODUCTS_NMB = 2;
     /**
      * Логирование 
      */
    public function _before (AcceptanceTester $I){
        $I->amOnPage(ProductsMainPage::$url);
        $I->click(ProductsMainPage::$signInButton);
        $I->fillField(SignInPage::$emailField, SignInPage::LOGIN);
        $I->fillField(SignInPage::$passwordField, SignInPage::PASSWORD);
        $I->click(SignInPage::$signInButton);
        $I->waitForElement(ProductsMainPage::$personalAccountOpenButton);
    }

     /**
      * Проверка количества добавленных товаров
      */
    public function checkCountOfWishlist(\Step\Acceptance\ShoppingStep $I)
    {
        $I->amOnPage(ProductsMainPage::$url);  
        $I->waitForElement(ProductsMainPage::$firstProductCard);
        
        $I->comment('Добавляю товары в лист желаний');
        $I->addProductToWishlist();

        $I->click(ProductsMainPage::$personalAccountOpenButton);
        $I->wait(3);
        $I->click(PersonalAccountPage::$myWishlistButton);
        $I->wait(3);
        $countOfWishlist = $I->grabTextFrom(WishListPage::$CountOfMyWishlist);
        $I->wait(3);
        var_dump($countOfWishlist); 
        $I->wait(3);
        
        $I->assertEquals(self::PRODUCTS_NMB, $countOfWishlist, 'checks equils of wishes');
        $I->wait(3);
        
    }


    public function _after (AcceptanceTester $I){
        $I->amOnPage(WishListPage::$wishListUrl);
        $I->click(WishListPage::$deleteFromWishlist);
        $I->acceptPopup();
        $I->wait(3);
        $I->click(ProductsMainPage::$logoutButton); 
        $I->wait(3);
    }

 }