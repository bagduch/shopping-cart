<?php

namespace bagduch\ShoppingCart\Test;

class CartTest extends \PHPUnit_Framework_TestCase
{
    public function testIsEmpty()
    {
        $cart = $this->iniTestCart();
    }

    private function iniTestCart()
    {
        $cart = new Cart();
        return $cart;
    }

}
