<?php

require_once 'classes/product.php';

$pro = new Product;
$data = [
    'name'=>'product six' ,
    'desc'=>'loremloremloremloremloremloremloremlorem',
    'price'=>90
  
];
var_dump($pro->update(6,$data));