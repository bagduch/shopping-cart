<?php

namespace bagduch\ShoppingCart\lib\product;

abstract class Product
{
    /**
     * Item Stock Keeping Unit
     *
     * @var string $sku
     */
    protected $id;

    /**
     * Item name
     *
     * @var string $name
     */
    protected $name;

    /**
     * Item price
     *
     * @var string $price
     */
    protected $price;

    /**
     * Item tax
     *
     * @var string $price
     */
    protected $tax;


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice($price)
    {
        return $this->price;
    }


}
