<?php
namespace Step\Acceptance;

use Page\Acceptance\ProductsMainPage;


class ShoppingStep extends \AcceptanceTester
{
    public const PRODUCTS_NMB = 2;
   

    public function addProductToWishlist(){
        $I = $this;
       

        for ($i = 1; $i <= self::PRODUCTS_NMB; $i++){
            $I->waitForElement(sprintf(ProductsMainPage::$productCard, $i));
            $I->wait(2);
            $I->moveMouseOver(sprintf(ProductsMainPage::$productCard, $i));
            $I->wait(2);
            $I->click(sprintf(ProductsMainPage::$quickViewButton, $i));
            $I->wait(2);
            $I->switchToIFrame(ProductsMainPage::$quickViewModal);
            $I->wait(2);
            $I->click(ProductsMainPage::$addToWishlistButton);
            $I->wait(2);
            $I->click(ProductsMainPage::$successAddModalCloseButton);
            $I->wait(2);
            $I->switchToIFrame();
            $I->wait(2);
            $I->click(ProductsMainPage::$quickViewModalCloseButton);
            $I->wait(2);
            
        }
    
    }
}