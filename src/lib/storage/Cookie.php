<?php

namespace bagduch\lib\storage;

use bagduch\lib\storage\Storage;

class Cookie implements Storage
{

    private $cookie = __CLASS__;

    public function __construct($cookie_name = false)
    {
        if ($cookie_name) {
            $this->cookie = $cookie_name;
        }
    }

    public function set($value, $time)
    {
        setcookie($this->cookie, $value, time() + (86400 * 30), "/");
    }

    public function get($name)
    {

    }
}
