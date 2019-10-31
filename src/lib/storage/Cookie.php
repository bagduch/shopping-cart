<?php

namespace bagduch\ShoppingCart\lib\storage;

use bagduch\ShoppingCart\lib\storage\Storage;

class Cookie implements Storage
{

    private $cookie = __CLASS__;

    public function __construct($cookie_name = false)
    {
        if ($cookie_name) {
            $this->cookie = $cookie_name;
        }
    }

    public function set($cart = array(), $time = null)
    {
        try {
            $time = is_null($time) && is_numeric($time) ? $time : time() + (86400 * 30);
            setcookie($this->cookie, $cart, $time);
        } catch (Exception $e) {
            echo 'Cookie has to be enable: ', $e->getMessage(), "\n";
        }
    }

    public function get($name)
    {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : "";
    }
}
