<?php
require("../Classes/Product.php");
$id = $_REQUEST['id'];
$product = (new Classes\Product())->getById($id);
$services = (new Classes\Product())->getAllServices();
?>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
    <h1>Edit Product</h1>
        <a href="listProduct.php" class="btn btn-primary align-self-end ml-5 mb-2">List</a>
        <form action="editProduct.php?id=<?php echo $product->getId(); ?>" class="form" role="form" method="post">
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" required value="<?php echo $product->getDescription(); ?>" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="validity">Validity</label>
                <input type="text" required value="<?php echo $product->getValidity(); ?>" class="form-control" id="validity" name="validity">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" required value="<?php echo $product->getState(); ?>" class="form-control" id="state" name="state">
            </div>
            <div class="form-group">
                <label for="state">Price</label>
                <input type="text" required value="<?php echo $product->getPrice(); ?>" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="FK_serviceId">Service</label>
                <select name="FK_serviceId" id="FK_serviceId">
                    <?php foreach ($services as $services): ?>
                        <option value="<?php echo $services->getId()?>">
                           <?php echo $services->getId()." ".$services->getDescription();?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Update</button> 
            </div>
        </form>

    </div>
</div>
</body>
</html>