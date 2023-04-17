<?php
use Classes\Sale;
require("Classes/Sale.php");
$sale = new Sale();
$showShopSales = $sale->showShopSales();
$getMostSoldProducts = $sale->getMostSoldProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/php-crud/Costumer/listCostumer.php">Costumer</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/php-crud/Product/listProduct.php">Product</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/php-crud/Service/listService.php">Service</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/php-crud/Shop/listShop.php">Shop</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/php-crud/ShopAssistant/listShopAssistant.php">Shop Assistant</a>
      </li>
    </ul>
  </div>
</nav>
<h1 >Top Shop Sales</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Sales</th>
    </tr>
    <?php foreach ($showShopSales as $ShopSale): ?>
      <tr>
        <td></td>
        <td><?php echo $ShopSale["id"]?></td>
        <td><?php echo $ShopSale["price"]?></td>
      </tr>
     <?php endforeach; ?>
  </thead>
</table>  

<br>

<h1>Show Most Sold Product</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Sales</th>
    </tr>
    <?php foreach ($getMostSoldProducts as $productSale): ?>
      <tr>
        <td></td>
        <td><?php echo $productSale["id"]?></td>
        <td><?php echo $productSale["price"]?></td>
      </tr>
     <?php endforeach; ?>
  </thead>
</table>  
</body>
</html>