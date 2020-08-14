<?php

namespace validation;

class Str implements ValidationInterface{
    private $name;
    private $value;

    public function __construct($name ,$value)
    {
        $this->name = $name;
        $this->value = $value;
    }
    public function validate($name, $value)
    {
        if(!is_string($this->value) ){
            return "$this->name must be string";
        }
        return '';
    }
}