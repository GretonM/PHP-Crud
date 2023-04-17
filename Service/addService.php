<?php
require("../Classes/Service.php");

    $description = $_POST['description'];
    $price = $_POST['price'];
    $active = $_POST['active'];

    $service = new \Classes\Service();
    $service->setDescription($description);
    $service->setPrice($price);
    $service->setActive($active);
    if ($service->insert()) {
        header('location:listService.php');
    }