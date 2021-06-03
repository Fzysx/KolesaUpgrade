<?php
namespace Helper;

use Faker\Provider\Base;

class CustomFakerProvider extends Base
{
    protected $phoneCodes = [
        '701',
        '702',
        '775',
        '778'
    ];

    protected $creditCards = [
        '7011 1111 1111 1111',
        '7022 2222 2222 2222',
        '7752 2222 1111 1111',
        '7788 8888 8888 8888'
    ];

    protected $secureCode = ['123', '456', '789'
    ];
    /**
     * Возвращает рандомный казахстанский номер
     */
    public function getPhoneKz()
    {
        return sprintf(
            '+7 (%d) %d-%d-%d', 
            $this -> phoneCodes[array_rand($this->phoneCodes)],
            random_int(100, 999),  
            random_int(10,99),
            random_int(10,99)
        );
    }

    /**
     * Возвращает рандомную кредитную карту из вышеуказанных
     */
    public function getCreditCard()
    {
        return $this -> creditCards[array_rand($this->creditCards)]
        ;
    }

     /**
     * Возвращает рандомный security code
     */
    public function getSecureCode()
    {
        return $this -> secureCode[array_rand($this->secureCode)]
        ;
    }
}
