<?php
session_start();
require_once 'classes/product.php';

$id =$_GET['id'];
$pro = new Product;
$product = $pro->getOne($id);
?>
<?php require_once 'inc/header.php' ?>

<div class="container text-info m-4 d-flex align-items-center justify-content-center">
    
<div class="col-md-9">

    <form action="handlers/handleEdit.php?id=<?php echo $product['id']; ?>"  method="post" >
    <div class="form-group">
    <label >Product Name</label>
    <input type="text" name="name" class="form-control"  placeholder="product name..." value="<?php echo $product['name'] ?>">
    </div>
<div class="form-group">
    <label>Price</label>
    <input type="number" name="price" class="form-control" placeholder="price..." value="<?php echo $product['price'] ?>" >
</div>
<div class="form-group">
    <label >Desc</label>
    <textarea type="text" name="desc" class="form-control" rows="6" placeholder="description..." ><?php echo $product['desc'] ?></textarea>
</div>
  <button type="submit" name="submit" class="btn btn-info">Edit</button>
</form>   

</div>

</div>

<?php require_once 'inc/footer.php' ?>