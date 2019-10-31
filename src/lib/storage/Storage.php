<?php

namespace bagduch\lib\storage;

interface Storage
{

    public function set($value, $time);

    public function get($name);

}
