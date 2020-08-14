<?php
namespace validation;

require_once 'ValidationInterface.php';
require_once 'Required.php';
require_once 'Email.php';
require_once 'Numeric.php';
require_once 'Max.php';
require_once 'Email.php';

class Validator{
    public $errrors =[];
    
    private function makeValidation(ValidationInterface $v)
    {
        return  $v->validate();
    }
    public function rules($name ,$value ,array $rules){
        foreach($rules as $rule){
            if($rule == 'required'){
              $error =  $this->makeValidation(new Required($name , $value));
            }
            else if($rule == 'string'){
              $error =  $this->makeValidation(new Str($name , $value));
            }
            else if($rule == 'max:100'){
                $error =  $this->makeValidation(new Max($name , $value));
            }
            else if($rule == 'numeric'){
                $error =  $this->makeValidation(new Numeric($name , $value));
            }
            else if($rule == 'email'){
                $error =  $this->makeValidation(new Email($name , $value));
            }
            else{
                $error = '';
            }
            if($error !== ''){

                array_push($this->errors,$error);
            }
        }

    }
}