<?php
require("../Classes/Product.php");

    $id= $_REQUEST['id'];
    $description = $_POST['description'];
    $validity = $_POST['validity'];
    $state = $_POST['state'];
    $price = $_POST['price'];
    $serviceId = $_POST['FK_serviceId'];

    $product = new \Classes\Product();
    $product->setDescription($description);
    $product->setValidity($validity);
    $product->setState($state);
    $product->setPrice($price);
    $product->setServiceId($serviceId);


    if($product->edit($id)){
        header('location:listProduct.php');
    }