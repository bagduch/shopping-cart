<?php

namespace bagduch\ShoppingCart\lib\validation;

trait Validation
{
    public function validateAmountFormat($amount)
    {
        if (!preg_match('/^\d+\.\d{2}$/', $amount)) {
            throw new \Exception('Invalid amount format');
        }
    }

    public function validateIntFormat($id)
    {
        if (!is_int($id)) {
            throw new \Exception('Id format');
        }
    }
}
