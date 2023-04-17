<?php
require("../Classes/Shop.php");

    $city = $_POST['city'];
    $id = $_POST['FK_shop_assistantId'];
    

    $shop = new \Classes\Shop();
    $shop->setCity($city);
    $shop->setShopAssistantId($id);
   
    if ($shop->insert()) {
        header('location:listShop.php');
    }