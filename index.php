<?php
session_start();
require_once 'classes/product.php';
require_once 'classes/helpers/Str.php';
use helpers\Str;
$pro = new Product;
$products = $pro->getAll();
?>
<?php require_once 'inc/header.php' ?>

<div class="container ">
    <div class="row">
    <?php if($products !== []){ ?>
        <?php foreach ($products as $product){?>
                <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/<?php echo $product['img'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name'] ?></h5>
                        <p class="badge badge-warning p-2">$<?php echo $product['price']; ?></p>
                        <p class="card-text"><?php echo Str::limit($product['desc']) ?></p>
                        <a href="show.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Show</a>
                        <a href="edit.php?id=<?php echo $product['id'] ?>" class="btn btn-info">Edit</a>
                        <a href="handlers/handleDelete.php?id=<?php echo $product['id']; ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div> 
                </div>
                    <?php }?>
        </div>
    <?php }else {?>
        <div class="container">
            <div class="row">
                <p>products not found</p>
            </div>
        </div>
        <?php } ?>
</div>

<?php require_once 'inc/footer.php' ?>