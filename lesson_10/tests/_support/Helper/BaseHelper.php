<?php
namespace Helper;

use Faker\Factory;

class BaseHelper extends \Codeception\Module
{

    public function getFaker(){

        $faker = Factory::create();
       

        return $faker;

    }

    
}