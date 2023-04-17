<?php
require("../Classes/ShopAssistant.php");

$id = $_REQUEST['id'];

$shop = new \Classes\ShopAssistant();

if($shop->delete($id)){
    header('location:listShopAssistant.php');
}