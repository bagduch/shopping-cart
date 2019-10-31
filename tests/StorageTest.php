<?php

namespace bagduch\ShoppingCart\Test;

use bagduch\ShoppingCart\lib\storage\Cookie;

class StorageTest extends \PHPUnit_Framework_TestCase
{


    private function TestInitCookie()
    {
        $storage = new Cookie('1001');
    }


}
