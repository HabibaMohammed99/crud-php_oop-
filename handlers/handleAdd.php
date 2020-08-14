<?php 

session_start();
require_once '../classes/product.php';
require_once '../classes/helpers/Image.php';
require_once '../classes/validation/Validator.php';
use helpers\Image;
use validation\Validator;

if(isset($_POST['submit'])){

    //read data
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $img = $_FILES['img'];

    // data validation
        $v = new Validator;
        $v->rules('name',$name,['required','string','max:100']);
        $v->rules('price',$price,['required','numeric']);
        $v->rules('desc',$desc,['required','string']);
        $v->rules('img',$img,['required','string','max:100']);
        var_dump($v->errrors);
        die();
    // if data is valid
    if(true)
    {
        $image = new Image($img);

        //store data in db
        $data = [
            'name'=>$name,
            'price'=>$price,
            'desc'=>$desc,
            'img'=>$image->new_name
        ];
        $pro =new Product;
        $result = $pro->createOne($data);

        //if stored 
        if($result == true)
        {
            //upload img
            $image->upload();
            header('location:../index.php');
        }else
        {

        }

    }else
    {

    }

}else{
    header('location:../add.php');
}