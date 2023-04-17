<?php
require("../Classes/Costumer.php");

$id = $_REQUEST['id'];

$costumer = new \Classes\Costumer();

if($costumer->delete($id)){
    header('location:listCostumer.php');
}