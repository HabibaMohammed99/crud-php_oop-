<?php 
session_start();

require_once '../classes/Product.php';
$id = $_GET['id'];

$pro =new Product;
$product = $pro->getOne($id);
$img = $product['img'];

unlink('../images/'.$img);
$result =$pro->delete($id);

header('location:../index.php');
