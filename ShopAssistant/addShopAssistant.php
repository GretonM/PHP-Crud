<?php
require("../Classes/ShopAssistant.php");

    $name = $_POST['name'];
    

    $shop = new \Classes\ShopAssistant();
    $shop->setName($name);
   
    if ($shop->insert()) {
        header('location:listShopAssistant.php');
    }