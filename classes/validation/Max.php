<?php

namespace validation;

class Max implements ValidationInterface{
    private $name;
    private $value;

    public function __construct($name ,$value)
    {
        $this->name = $name;
        $this->value = $value;
    }
    public function validate($name, $value)
    {
        if(strlen($this->value) > 100){
            return "$this->name must be <= 100 chars";
        }
        return '';
    }
}