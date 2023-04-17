<?php
require("../Classes/Shop.php");

$id = $_REQUEST['id'];

$shop = new \Classes\Shop();

if($shop->delete($id)){
    header('location:listShop.php');
}