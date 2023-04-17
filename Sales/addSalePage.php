<?php 
use Classes\Sale;
require("../Classes/Sale.php");
$sale = new Sale();
$price = $_REQUEST['price'];
$productId = $_REQUEST['id'];
$shops = $sale->getAllShopIds();
$costumers = $sale->getAllCostumerIds();
?>

<html>
<head>
    <title>Sale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><body>
<div class="container">
    <div class="row">
        <h1>Sale</h1>
        <form action="addSale.php" class="form" role="form" method="post">
        
            <div class="form-group">
                <label for="shopId">Shop Id</label>
                <select class="form-select" name="shopId" id="shopId">
                    <?php foreach ($shops as $shop): ?>
                        <option value="<?php echo $shop?>">
                           <?php echo $shop?>
                        </option>
                    <?php endforeach; ?>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="costumerId">Costumer Id</label>
                <select class="form-select" name="costumerId" id="costumerId">
                    <?php foreach ($costumers as $costumer): ?>
                        <option value="<?php echo $costumer?>">
                           <?php echo $costumer?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="productId">Product</label>
                <input type="text" required class="form-control" value="<?php echo $productId?>" id="productId" name="productId">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" required class="form-control" value="<?php echo $price?>" id="price" name="price">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Buy</button> 
            </div>
        </form>
    </div>
</div>
</body>
</html>