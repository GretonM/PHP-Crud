<?php
require("../Classes/Product.php");

    $description = $_POST['description'];
    $validity = $_POST['validity'];
    $state = $_POST['state'];
    $price = $_POST['price'];
    $id = $_POST['FK_serviceId'];

    $product = new \Classes\Product();
    $product->setDescription($description);
    $product->setValidity($validity);
    $product->setState($state);
    $product->setPrice($price);
    $product->setServiceId($id);

    if ($product->insert()) {
        header('location:listProduct.php');
    }