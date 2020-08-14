<?php
require_once 'MySql.php';

class Product extends MySql{

    //get all
    public function getAll(){
        $query = "SELECT * FROM products";
        $result = $this->connect()->query($query);

        $products = [];
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($products ,$row);
            }
        }
        return $products;
    }

    //get one

    public function getOne($id){

        $query = "SELECT * FROM products WHERE id = '$id'";
        $result =$this->connect()->query($query);

        $product = null;
        if($result->num_rows == 1){
            $product = $result->fetch_assoc();
        }
        return $product;
    }

    //create

    public function createOne(array $data){
        $query = "INSERT INTO products (`name`,`desc`,price,img,created_at)
          VALUES('{$data['name']}','{$data['desc']}','{$data['price']}','{$data['img']}',CURRENT_TIME())";
    
        $result = $this->connect()->query($query);
        if($result == true){
            return true;
        }
        return false;
    }

    //edit
    public function update($id , $data)
    {
        $query = "UPDATE products SET
        `name`= '{$data['name']}',
        `desc`= '{$data['desc']}',
        price= '{$data['price']}'
        WHERE id = '$id'";

        $result = $this->connect()->query($query);
        if($result == true){
            return true;
        }
        return false;

    }

    
    //delete

    public function delete($id){
        $query = "DELETE  FROM products WHERE id = '$id' ";
        $result = $this->connect()->query($query);
        if($result == true){
            return true;
        }
        return false;
    }

}