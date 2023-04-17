<?php
require("../Classes/Shop.php");

    $id= $_REQUEST['id'];
    $city = $_POST['city'];
    $shopAssistantId = $_POST['FK_shop_assistantId'];

    $shop = new \Classes\Shop();
    $shop->setCity($city);
    $shop->setShopAssistantId($shopAssistantId);


    if($shop->edit($id)){
        header('location:listShop.php');
    }