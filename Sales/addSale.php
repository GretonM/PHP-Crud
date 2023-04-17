<?php
require("../Classes/Sale.php");

    $shop = $_POST['shopId'];
    $costumer = $_POST['costumerId'];
    $product = $_POST['productId'];
    $price = $_POST['price'];

    $sale = new \Classes\Sale();
    $sale->setShopId($shop);
    $sale->setCostumerId($costumer);
    $sale->setProductId($product);
    $sale->setPrice($price);
    if ($sale->insert()) {
        header('location:../index.php');
    }