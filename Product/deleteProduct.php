<?php
require("../Classes/Product.php");

$id = $_REQUEST['id'];

$product = new \Classes\Product();

if($product->delete($id)){
    header('location:listProduct.php');
}