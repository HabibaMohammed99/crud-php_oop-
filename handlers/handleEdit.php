<?php 
session_start();

require_once '../classes/Product.php';

if(isset($_POST['submit']))
{
    $id = $_GET['id'];
    // read data
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];

    //validation 
    
    // if is data valid
    if(true){
        //update in db
        $data =[
            'name'=>$name,
            'desc'=>$desc,
            'price'=>$price
        ];
        $pro = new Product;
        $result = $pro->update($id ,$data);
        
        //if stored successfuly
        if($result == true )
        {

             header('location:../show.php?id='.$id);
            
        }
        else
        {
        
        }
    }
    else
    {
        
    }
}
    else
    {
        header('location:../index.php');
    }

