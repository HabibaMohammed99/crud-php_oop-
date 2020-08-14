<?php
session_start();
?>
<?php require_once 'inc/header.php' ?>

<div class="container text-info m-4 d-flex align-items-center justify-content-center">
    
<div class="col-md-9">

    <form action="handlers/handleAdd.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" name="name" class="form-control"  placeholder="product name...">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="number" name="price" class="form-control" placeholder="price..." >
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Desc</label>
    <textarea type="text" name="desc" class="form-control" rows="6" placeholder="description..." ></textarea>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Upload img</label>
    <input type="file" name="img" class="form-control-file" >
  </div>
  <button type="submit" name="submit" class="btn btn-info">Add</button>
</form>   

</div>

</div>

<?php require_once 'inc/footer.php' ?>