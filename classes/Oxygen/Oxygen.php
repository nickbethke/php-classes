<?php

namespace Oxygen;

use \DateTime;


class Oxygen
{
    protected $_instance;

    const GERMAN_TIME = "H:i:s";
    const GERMAN_DATE = "d.m.Y";

    public function __construct()
    {
        $this->_instance = new DateTime;
    }
    public function __call($method, $args)
    {
        return call_user_func_array(array($this->_instance, $method), $args);
    }
    public function __get($key)
    {
        return $this->_instance->$key;
    }

    public function __set($key, $val)
    {
        return $this->_instance->$key = $val;
    }
}
