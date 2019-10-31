<?php

namespace bagduch\ShoppingCart\Test;

use bagduch\ShoppingCart\Product;

class ProductTest extends \PHPUnit_Framework_TestCase
{
    public function testNewInstance()
    {
        $product = new Product('1', 'Name', '123.45');
        $this->assertEquals('1', $product->getId());
        $this->assertEquals('Name', $product->getName());
        $this->assertEquals('123.45', $product->getPrice());
        $this->assertEquals('0.00', $product->getTax());

    }

    public function testInvalidIdFormat()
    {
        $numExceptions = 0;
        try {
            new Product('test', 'Name', '123.12');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid amount format', $e->getMessage());
            $numExceptions++;
        }
        try {
            new Product('1test', 'Name', '123.12');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid amount format', $e->getMessage());
            $numExceptions++;
        }
        try {
            new Product('test1', 'Name', '123.12');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid amount format', $e->getMessage());
            $numExceptions++;
        }
        $this->assertEquals(3, $numExceptions);
    }

    public function testInvalidPriceFormat()
    {
        $numExceptions = 0;
        try {
            new Product('1', 'Name', 123);
        } catch (\Exception $e) {
            $this->assertEquals('Invalid amount format', $e->getMessage());
            $numExceptions++;
        }
        try {
            new Product('1', 'Name', '123,45');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid amount format', $e->getMessage());
            $numExceptions++;
        }
        try {
            new Product('1', 'Name', '123.4567');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid amount format', $e->getMessage());
            $numExceptions++;
        }
        $this->assertEquals(3, $numExceptions);
    }

    public function testInvalidTaxFormat()
    {
        $numExceptions = 0;
        try {
            new Product('1', 'Name', '123.45', 123);
        } catch (\Exception $e) {
            $this->assertEquals('Invalid amount format', $e->getMessage());
            $numExceptions++;
        }
        try {
            new Product('1', 'Name', '123.45', '123,45');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid amount format', $e->getMessage());
            $numExceptions++;
        }
        try {
            new Product('1', 'Name', '123.45', '123.4567');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid amount format', $e->getMessage());
            $numExceptions++;
        }
        $this->assertEquals(3, $numExceptions);
    }
}
