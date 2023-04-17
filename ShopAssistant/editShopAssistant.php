<?php
require("../Classes/ShopAssistant.php");

    $id= $_REQUEST['id'];
    $name = $_POST['name'];

    $shop = new \Classes\ShopAssistant();
    $shop->setName($name);


    if($shop->edit($id)){
        header('location:listShopAssistant.php');
    }