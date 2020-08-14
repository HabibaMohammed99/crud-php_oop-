<?php

namespace validation;

class Numeric implements ValidationInterface{
    private $name;
    private $value;

    public function __construct($name ,$value)
    {
        $this->name = $name;
        $this->value = $value;
    }
    public function validate($name, $value)
    {
        if(!is_numeric($this->value)){
            return "$this->name must be number";
        }
        return '';
    }
}