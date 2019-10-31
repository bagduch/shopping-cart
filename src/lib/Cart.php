<?php

namespace bagduch\ShoppingCart\lib;

use bagduch\ShoppingCart\Product;

abstract class Cart
{
    /**
     * Array hold the list of items in the cart
     *
     * @var array $items
     */
    protected $cartItems = [];

    /**
     * load cart item
     *
     */
    abstract public function load();

    abstract public function update($id, $qty);

    abstract public function store();

    public function getCart()
    {
        return $this->cartItems;
    }

    public function add(Product $product)
    {
        $id = $product->getid();

        if (isset($this->cartItems[$id])) {
            $this->updateItem($id, $this->cartItems[$id]['qty'] + 1);
        } else {
            $this->cartItems[$id] = array('item' => $product, 'qty' => 1);
        }
    }

    public function isEmpty()
    {
        return empty($this->cartItems);
    }

    public function emptyCart()
    {
        $this->cartItems = [];
        $this->store();
    }
}
