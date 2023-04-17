<?php
require("../Classes/Costumer.php");

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $number = $_POST['number'];


    $costumer = new \Classes\Costumer();
    $costumer->setName($name);
    $costumer->setSurname($surname);
    $costumer->setAddress($address);
    $costumer->setNumber($number);
    if ($costumer->insert()) {
        header('location:listCostumer.php');
    }