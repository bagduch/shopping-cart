<?php

namespace bagduch\lib;

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

    abstract public function update(Item $item, $qty);

    abstract public function store();

    public function getCart()
    {
        return $this->cartItems;
    }

    public function add(Item $item)
    {
        $sku = $item->getSku();

        if (isset($this->items[$sku])) {
            $this->updateItem($item, $this->items[$sku]['qty'] + 1);
        } else {
            $this->items[$sku] = array('item' => $item, 'qty' => 1);
            $this->skus[] = $sku;
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
