<?php

namespace bagduch\ShoppingCart;

use bagduch\ShoppingCart\lib\Cart as BaseCart;
use bagduch\ShoppingCart\lib\Item;

class Cart extends BaseCart
{

    public function __construct()
    {
    }

    /**
     * load cart item
     *
     */
    public function load()
    {
        // TODO: Implement load() method.
    }

    public function update(Item $item, $qty)
    {
        // TODO: Implement update() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }
}
