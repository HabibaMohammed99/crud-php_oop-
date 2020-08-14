<?php
session_start();
require_once 'classes/product.php';
$id = $_GET['id'];
$pro = new Product;
$product = $pro->getOne($id);
?>
<?php require_once 'inc/header.php' ?>

<div class="container mt-5">
    <div class="row">
        <?php if($product !==null){ ?>
        <div class="col-md-6">
            <img src="images/<?php echo $product['img'];?>" class="img-fluid" >
        </div>
        <div class="col-md-6">
            <h4 class="text-info  mb-3"><?php echo $product['name'] ?></h4>
            <p class="badge badge-warning p-3">$<?php echo $product['price']; ?></p>
            <p class="card-text"><?php echo $product['desc'] ?></p>
            <a href="index.php" class="btn btn-primary mt-3">back</a>
            <a href="edit.php?id=<?php echo $product['id'] ?>" class="btn btn-info mt-3">Edit</a>
            <a href="handlers/handleDelete.php?id=<?php echo $product['id']; ?>" class="btn btn-danger mt-3">Delete</a>
         </div>
        <?php }else{ ?>
            <div class="container  offset-5">
                <div class="row ">
                    <h5 class="text-info" >product not found</h5>
                </div>
            </div>
        <?php }?>
    </div>
    
</div>

<?php require_once 'inc/footer.php' ?>