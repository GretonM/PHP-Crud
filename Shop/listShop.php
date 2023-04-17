<?php
require("../Classes/Shop.php");
$shops = (new Classes\Shop())->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">Crud</a>
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
<div class="container">
    <div class="row">
    <h1 class="">Shop</h1>
    <a href="addShopPage.php" class="btn btn-primary align-self-end ml-5 mb-2">Add New Shop</a>
    <table class="table">
        <tr>
            <th>City</th>
            <th>ShopAssistantId</th>
        </tr>
        <?php foreach ($shops as $shop): ?>
            <tr>
                <td><?php echo $shop->getCity(); ?></td>
                <td><?php echo $shop->getShopAssistantId() ?></td>
                <td>
                <button class="btn btn-primary"><a class="text-light text-decoration-none" href="editShopPage.php?id=<?php echo $shop->getId(); ?>"> Edit</a></button>
                <button class="btn btn-danger"><a class="text-light text-decoration-none" href="deleteShop.php?id=<?php echo $shop->getId(); ?>">Delete</a></button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>
</body>
</html>