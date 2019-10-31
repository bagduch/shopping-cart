<?php

namespace bagduch\ShoppingCart\Test;

class StorageTest extends \PHPUnit_Framework_TestCase
{
    private function iniTestStorage()
    {
        $cart = new Cart();
        return $cart;
    }

    private function TestaddtoCart()
    {
        $cart = $this->iniTestCart();
        $cart->add('dsadsa');
    }

    private function TestUpdatetoCart()
    {
        $cart = $this->iniTestCart();
    }

}
