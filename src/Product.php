<?php

namespace bagduch\ShoppingCart;

use bagduch\ShoppingCart\lib\product\Product as Baseproduct;
use bagduch\ShoppingCart\lib\validation\Validation;


class Product extends Baseproduct
{

    protected $options;

    public function __construct($id, $name, $price, $tax = "0.00", $option = array())
    {
        $this->setId($id);
        $this->setName($name);
        $this->setPrice($price);
        $this->setTax($tax);
    }


    public function setPrice($price)
    {
        // TODO: Implement setPrice() method. Can add currency or etc

        $this->validateAmountFormat($price);
        $this->price = $price;
    }

    public function getPrice()
    {
        // TODO: Implement getPrice() method.
        return $this->price;
    }

    public function setOption($option)
    {
        // TODO: Implement setOption() method.
        $this->option = $option;
    }

    public function getOption()
    {
        // TODO: Implement getOption() method.
        return $this->option;
    }
}
