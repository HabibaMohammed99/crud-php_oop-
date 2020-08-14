<?php

namespace validation;

class Required implements ValidationInterface{
    private $name;
    private $value;

    public function __construct($name ,$value)
    {
        $this->name = $name;
        $this->value = $value;
    }
    public function validate($name, $value)
    {
        if(strlen($this->value) == 0){
            return "$this->name is required";
        }
        return '';
    }
}