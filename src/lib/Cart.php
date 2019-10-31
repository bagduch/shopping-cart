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

    abstract public function update(Product $product, $qty);

    abstract public function store();

    public function getCart()
    {
        return $this->cartItems;
    }

    public function add(Product $product)
    {
        $id = $product->getid();

        if (isset($this->items[$id])) {
            $this->updateItem($product, $this->items[$id]['qty'] + 1);
        } else {
            $this->items[$id] = array('item' => $product, 'qty' => 1);
            $this->ids[] = $id;
        }
    }

    public function isEmpty()
    {
        return empty($this->items);
    }

    public function emptyCart()
    {
        $this->cartItems = [];
        $this->store();
    }
}
