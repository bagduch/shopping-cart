<?php

namespace bagduch\ShoppingCart\lib\product;

use bagduch\ShoppingCart\lib\validation\Validation;

abstract class Product
{
    use Validation;
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
     * @var string $tax
     */
    protected $tax;

    /**
     * Item option
     *
     * @var string $options
     */

    protected $options;


    abstract public function setOption($option);

    abstract public function getOption();

    abstract public function setPrice($price);

    abstract public function getPrice();

    public function setName($name)
    {
        $this->name = (string)$name;
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
        $this->validateIntFormat($id);
        $this->id = (int)$id;
    }

    public function setTax($tax)
    {
        $this->validateAmountFormat($tax);
        $this->tax = $tax;
    }

    public function getTax()
    {
        return $this->tax;
    }


}
