<?php
require("../Classes/Service.php");

    $id= $_REQUEST['id'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $active = $_POST['active'];

    $service = new \Classes\Service();
    $service->setDescription($description);
    $service->setPrice($price);
    $service->setActive($active);


    if($service->edit($id)){
        header('location:listService.php');
    }