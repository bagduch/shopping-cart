<?php

namespace bagduch\ShoppingCart;

use bagduch\ShoppingCart\lib\Cart as BaseCart;
use bagduch\ShoppingCart\lib\Item;
use bagduch\ShoppingCart\lib\storage\Storage;
use bagduch\ShoppingCart\Product;
use bagduch\ShoppingCart\lib\storage\Cookie;

class Cart extends BaseCart
{

    protected $storage;

    //this is a cookie storage class can be extend to session or etc
    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
        $this->load();

    }

    /**
     * load cart item
     *
     */
    public function load()
    {
        // TODO: Implement load() method.
        $this->cartItems = $this->cookie->get();
    }

    public function update($id, $qty)
    {
        // TODO: Implement update() method.
        if (isset($this->cartItems[$id])) {

        }
    }

    public function store()
    {
        // TODO: Implement store() method.
        $this->storage->set($this);

    }
}
