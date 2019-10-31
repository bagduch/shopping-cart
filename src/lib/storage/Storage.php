<?php

namespace bagduch\ShoppingCart\lib\storage;

use bagduch\ShoppingCart\lib\Cart;

interface Storage
{

    public function set(Cart $cart, $time);

    public function get();

}
