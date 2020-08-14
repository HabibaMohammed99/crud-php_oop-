<?php

namespace validation;

class Email implements ValidationInterface{
    private $name;
    private $value;

    public function __construct($name ,$value)
    {
        $this->name = $name;
        $this->value = $value;
    }
    public function validate($name, $value)
    {
        if(!filter_var($this->value ,FILTER_VALIDATE_EMAIL) ){
            return "$this->name is not a validate Email";
        }
        return '';
    }
}